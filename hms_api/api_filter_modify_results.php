<?php


$from_date_array = explode('/', $_POST['checkindate']);
$to_date_array = explode('/', $_POST['checkoutdate']);
$_SESSION["api_search_check_in_date"] = $from_date_array[2] . '-' . $from_date_array[1] . '-' . $from_date_array[0];
$_SESSION["api_search_check_out_date"] = $to_date_array[2] . '-' . $to_date_array[1] . '-' . $to_date_array[0];

$curl = curl_init(HMS_API_SERVER . '/widget_rooms_availability');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, array('from_date' => $_SESSION["api_search_check_in_date"], 'to_date' => $_SESSION["api_search_check_out_date"], 'company_id' => HMS_API_COMPANY_ID));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$api_response = json_decode($response, true);

$_SESSION["api_search_results"] = $api_response;
// Initialize an empty array to store matching elements
$filteredRooms = [];
$row1 = [];
$row2 = [];
$row3 = [];


$api_rooms_list_names_only = [];
$api_rooms_list_price_list = [];
$wp_rooms_list_price_list_updated = [];
if (isset($api_response['data'])) { //modify the results

    foreach ($api_response['data'] as $roomType => $rooms) {
        $api_rooms_list_names_only[] = strtolower($roomType);
        $api_rooms_list_price_list[strtolower($roomType)] = ["total_price" => $rooms[0]['total_price'], "room_no" => $rooms[0]['room_no']];
        //$api_rooms_list_price_list[strtolower($roomType)] = $rooms[0]['total_price'];
    }

    foreach ($this->res as $index1 => $roomType) {


        foreach ($roomType as $index2 => $pricingRate) {
            foreach ($pricingRate as $index3 => $room) {

                $wp_room_name = $room['name'];
                $wp_room_name_arr = explode("Park ", $wp_room_name);
                if (count($wp_room_name_arr) > 1) {
                    $wp_room_name = $wp_room_name_arr[1];
                }

                if (isset($api_rooms_list_price_list[strtolower($wp_room_name)])) {
                    // $row2[$index2] = $room;
                    $room['cost'] = $api_rooms_list_price_list[strtolower($wp_room_name)]['total_price'];
                    $wp_rooms_list_price_list_updated[$room['idroom']] = $api_rooms_list_price_list[strtolower($wp_room_name)]['total_price'];;
                    $filteredRooms[$index1][$index2][] =  $room;
                }
            } //for 

        }
    }

    $this->res = $filteredRooms;
}
$_SESSION["api_rooms_list_names_only"] = $api_rooms_list_names_only;
$_SESSION["api_rooms_list_price_list"] = $api_rooms_list_price_list;

$_SESSION["wp_rooms_list_price_list_updated"] = $wp_rooms_list_price_list_updated;

//print_r($_SESSION["wp_rooms_list_price_list_updated"]);
