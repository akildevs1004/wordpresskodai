<?php
//header("Access-Control-Allow-Origin: *");


// // echo '<pre>';
// // Allow from any origin
// if (isset($_SERVER['HTTP_ORIGIN'])) {
//     // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
//     // whitelist of safe domains
//     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
//     header('Access-Control-Allow-Credentials: true');
//     header('Access-Control-Max-Age: 86400');    // cache for 1 day
// }
// // Access-Control headers are received during OPTIONS requests
// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

//     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
//         header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

//     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
//         header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
// }
// Load the WordPress library.
require_once __DIR__ . '/wp-load.php';

// Set up the WordPress query.
wp();
$api_company_id = HMS_API_COMPANY_ID;
//get API Rooms List FROM HMS 
$decodedData['company_id'] = $api_company_id;
$curl = curl_init(HMS_API_SERVER . '/widget_api_get_rooms_pricelist');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($decodedData));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$api_response = curl_exec($curl);
curl_close($curl);
//echo $api_response;
$api_rooms_price_list = json_decode($api_response);
print_r($api_rooms_price_list);
//get WP rooms list 
$wp_rooms_list = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "vikbooking_rooms");
//print_r($wp_rooms_list);
$room_price = '';
foreach ($wp_rooms_list as $wp_roomrow) {
    //print_r($wp_roomrow);

    $api_room_data = array_filter($api_rooms_price_list, function ($room) use ($wp_roomrow) {


        $wp_room_name = $wp_roomrow->name;
        $wp_room_name_arr = explode("Park ", $wp_room_name);
        if (count($wp_room_name_arr) > 1) {
            $wp_room_name = $wp_room_name_arr[1];
        }

        return strtolower($room->name) === strtolower($wp_room_name);
    });
    $api_room_data = reset($api_room_data);

    //print_r($api_room_data);

    if (isset($api_room_data->price)) {

        for ($i = 1; $i <= 2; $i++) {
            $dbo = JFactory::getDBO();
            $safeq = "SELECT `id` FROM `#__vikbooking_dispcost` WHERE `days`=1 AND `idroom`='" . $wp_roomrow->id . "' AND `idprice`='" . $i . "';";
            $dbo->setQuery($safeq);
            $dbo->execute();
            if ($dbo->getNumRows() == 0) {
                $q = "INSERT INTO `#__vikbooking_dispcost` (`idroom`,`days`,`idprice`,`cost`,`attrdata`) VALUES('" . $wp_roomrow->id . "',1," . $i . ",'" . $api_room_data->price . "', '');";
                $dbo->setQuery($q);
                $dbo->execute();
            } elseif ($dbo->getNumRows() == 1) {
                $upd_id = $dbo->loadResult();
                $q = "UPDATE `#__vikbooking_dispcost` SET `cost`='" . $api_room_data->price . "', `attrdata`= '' WHERE `id`=" . (int)$upd_id . " AND `days`=1 AND `idroom`='" . $wp_roomrow->id . "' AND `idprice`='" . $i . "' LIMIT 1;";
                $dbo->setQuery($q);
                $dbo->execute();
            }
        }
        // $api_room_available_countArray = array_filter($api_room_data->widget_available_rooms, function ($room) use ($wp_roomrow) {
        //     return  $room->online_available  == 1 && $room->status == 0;
        // });


        $room_price = $api_room_data->price;
        $api_rooms_count = count($api_room_data->widget_available_rooms);
    } else {
        $api_rooms_count = 0;
    }
    echo "Update Room Price:" . $wp_roomrow->name . "-" . $api_rooms_count . "-" . $room_price . '<br/>';

    $q = "UPDATE `#__vikbooking_rooms` SET `units`='" . $api_rooms_count . "'  WHERE `id`="   . $wp_roomrow->id . " ;";

    $dbo->setQuery($q);
    $dbo->execute();
}
