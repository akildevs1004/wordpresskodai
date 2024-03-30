<?php
//echo '<pre>';
//print_r($orderrooms);
$hms_reservation_number = '';
// exit;
if (isset($_SESSION["api_search_results"])) {
    $sample_json = "hms_api/api_sample_booking.json";
    $jsonData = file_get_contents($sample_json);
    $decodedData = json_decode($jsonData, true); // Set the second parameter to true for an associative array

    //print_r($decodedData);
    // exit;
    $api_company_id = HMS_API_COMPANY_ID; //1=kodai 2 tanjavoor ;

    $api_search_results = $_SESSION["api_search_results"];

    $curl = curl_init(HMS_API_SERVER . '/widget_rooms_availability');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, array('from_date' => $_SESSION["api_search_check_in_date"], 'to_date' => $_SESSION["api_search_check_out_date"], 'company_id' => HMS_API_COMPANY_ID));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    $api_search_results = json_decode($response, true);
    //print_r(array('from_date' => $_SESSION["api_search_check_in_date"], 'to_date' => $_SESSION["api_search_check_out_date"], 'company_id' => HMS_API_COMPANY_ID));

    //echo "-----------";
    if (isset($api_search_results['data'])) {
        $string = $ord['custdata'];

        // Split the string by newline character "\n"
        $lines = explode("\n", $string);

        $api_customer_data = array();
        foreach ($lines as $line) {
            // Split each line by ":"
            $parts = explode(": ", $line, 2); // Limiting to 2 parts in case the value contains ": "
            if (count($parts) === 2) {
                $key = trim($parts[0]);
                $value = trim($parts[1]);
                $api_customer_data[$key] = $value;
            }
        }

        global $wpdb;


        $api_json_reference_number = $ord['id'] . '_' . $ord['confirmnumber'];
        //echo $_SESSION["api_confirmation_order_id"] . '<br/>';
        //echo $api_json_reference_number;
        $is_create_new_order = true;
        if (isset($_SESSION["api_confirmation_order_id"])) {

            if ($_SESSION["api_confirmation_order_id"] == $api_json_reference_number) {
                //echo "API already exists";
                $is_create_new_order = false;
            }
        }


        //print_r($ord);

        //print_r($orderrooms);
        if ($is_create_new_order) {

            $decodedData['all_room_Total_amount'] = $ord['total'];
            $decodedData['type'] =  HMS_API_COMPANY_REF_NAME; //"Online"; //HMS_API_COMPANY_REF_NAME;
            $decodedData['source'] = HMS_API_COMPANY_REF_NAME;

            $decodedData['check_in'] = date('Y-m-d', $ord['checkin']);

            $decodedData['check_out'] = date('Y-m-d', $ord['checkout']);
            $decodedData['payment_mode_id'] =  3; //3 online

            //$decodedData['advance_price'] = $ord['total'];

            $decodedData['total_days'] = $room_stay_nights;
            $decodedData['sub_total'] = $ord['total'];

            $decodedData['total_price'] = $ord['total'];
            $decodedData['remaining_price'] = 0;

            $decodedData['company_id'] = $api_company_id;



            $decodedData['first_name'] =   $api_customer_data['Name'];
            $decodedData['last_name'] =    $api_customer_data['Last Name'];
            $decodedData['contact_no'] =     $api_customer_data['Last Name'];
            $decodedData['whatsapp'] =     $api_customer_data['Last Name'];
            $decodedData['email'] =    $api_customer_data['e-Mail'];
            $decodedData['nationality'] =    $api_customer_data['Country'];
            $decodedData['id_card_type_id'] =    null;
            $decodedData['id_card_no'] =    isset($api_customer_data['VAT ID']) && '';

            $decodedData['address'] =    $api_customer_data['Address'];
            $decodedData['request'] =    $api_customer_data['Special Requests'];

            $decodedData['api_json_reference_number'] = $api_json_reference_number;

            if (isset($_SESSION['payment_reference_id'])) {
                $decodedData['payment_reference_id'] =  $_SESSION['payment_reference_id'];

                $decodedData['advance_price'] = $ord['total'];
            } else {
                $decodedData['payment_reference_id'] =  "Not Availalbe";
                $decodedData['advance_price'] = 0;
            }


            if (isset($_SESSION['payment_response'])) {

                $decodedData['payment_response'] =  json_decode($_SESSION['payment_response'], true);
            } else {
                $decodedData['advance_price'] = 0;
                $decodedData['payment_response'] = "Falied payment";
            }


            $booked_rooms = [];
            foreach ($orderrooms as $key => $room) {


                $api_room_name = $room['name'];;

                $api_room_name_arr = explode("Park ", $api_room_name);
                if (count($api_room_name_arr) > 1) {
                    $api_room_name = $api_room_name_arr[1];
                }
                $decodedData['selectedRooms'][$key] = $decodedData['selectedRooms'][0];
                $decodedData['selectedRooms'][$key]['room_no'] = $api_search_results['data'][strtolower($api_room_name)][$key]['room_no'];
                $decodedData['selectedRooms'][$key]['room_type'] = $api_room_name;
                $decodedData['selectedRooms'][$key]['room_id'] =  $api_search_results['data'][strtolower($api_room_name)][$key]['id'];;
                $decodedData['selectedRooms'][$key]['price'] =  $room['room_cost'];;
                $decodedData['selectedRooms'][$key]['days'] =   $room_stay_nights;
                $decodedData['selectedRooms'][$key]['sgst'] =  0; // $ord['tot_taxes'] / 2;;
                $decodedData['selectedRooms'][$key]['cgst'] = 0; //$ord['tot_taxes'] / 2;;

                $decodedData['selectedRooms'][$key]['check_in'] =  date('Y-m-d', $ord['checkin']); //$ord['checkin'];
                $decodedData['selectedRooms'][$key]['check_out'] = date('Y-m-d', $ord['checkout']); //$ord['checkout'];

                $decodedData['selectedRooms'][$key]['after_discount'] =  $room['room_cost'];
                $decodedData['selectedRooms'][$key]['room_tax'] = 0; // $ord['tot_taxes'];

                $decodedData['selectedRooms'][$key]['total'] =  $room['room_cost'];
                $decodedData['selectedRooms'][$key]['grand_total'] =  $room['room_cost'];

                $decodedData['selectedRooms'][$key]['company_id'] =  $api_company_id;
                $decodedData['selectedRooms'][$key]['no_of_adult'] =  $room['adults'];
                $decodedData['selectedRooms'][$key]['no_of_child'] =  $room['children'];
                // $priceList = [];
                // $priceList['date'] =   date('Y-m-d', $ord['checkin']);
                // $priceList['price'] = $room['room_cost'];
                // $priceList['tax'] = 0; // $ord['tot_taxes'];
                // $priceList['day_type'] = "weekend";
                // $priceList['day'] = "Sun";
                // $priceList['room_price'] = $room['room_cost'];
                // $priceList['discount'] =  0;
                // print_r($api_search_results['data'][strtolower($api_room_name)]);
                //$decodedData['selectedRooms'][$key]['priceList']  = [$priceList];
                //if (isset($api_search_results['data'][strtolower($api_room_name)][$key])) {
                $decodedData['selectedRooms'][$key]['priceList']  = $api_search_results['data'][strtolower($api_room_name)][$key]['price_list'];
                // } else {
                //     $priceList = [];
                //     $priceList['date'] =   date('Y-m-d', $ord['checkin']);
                //     $priceList['price'] = $room['total_price'];
                //     $priceList['tax'] = 0; // $ord['tot_taxes'];
                //     $priceList['day_type'] = "weekend";
                //     $priceList['day'] = "Sun";
                //     $priceList['room_price'] = $room['total_price'];
                //     $priceList['discount'] =  0;

                //     $decodedData['selectedRooms'][$key]['priceList']  = [$priceList];
                // }


                $booked_rooms[] = $api_search_results['data'][strtolower($api_room_name)][$key]['room_no'];
            } //for 

            //$decodedData['rooms'] = $api_search_results['data'][($api_room_name)][0]['room_no'];
            $decodedData['rooms'] = implode(',', $booked_rooms);


            // echo (json_encode($decodedData));
            // exit;

            if ($decodedData['rooms'] != null) {

                // $curl = curl_init('http://127.0.0.1:8000/api/widget_api_room_booking');
                $curl = curl_init(HMS_API_SERVER . '/widget_api_room_booking');
                curl_setopt($curl, CURLOPT_POST, true);


                curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($decodedData));
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $api_response = curl_exec($curl);
                curl_close($curl);
                //echo $api_response;
                //exit;
                //echo json_encode($decodedData);

                $decodedData['api_reponse'] = $api_response;
                $api_responseArray = json_decode($api_response, true);
                // print_r($api_responseArray);
                $hms_booking_id = '';
                $hms_reservation_number = 0;



                if (isset($api_responseArray['data'])) {


                    $hms_booking_id = $api_responseArray['data'];
                    $hms_reservation_number = $api_responseArray['booking_reservation_number'];






                    $jsonData = json_encode($decodedData);

                    $filename = 'wp-content/api_orders/api_' . $api_json_reference_number . '.json'; // Specify the filename
                    if (!file_exists('wp-content/api_orders')) {
                        mkdir('wp-content/api_orders', 0777, true);
                    }
                    file_put_contents($filename, $jsonData);


                    $_SESSION["api_confirmation_order_id"] = $api_json_reference_number;
                } else {

                    //print_r($api_responseArray)  . "<br/>";
                    echo '<div style="color:red">Note: Order is pending. Room Information is not available. You will get Room updates.</div>';
                }

                //update to wordpress DB
                //         $wpdb->query(
                //             $wpdb->prepare("UPDATE " . $wpdb->prefix . "vikbooking_orders
                //     SET hms_api_booking_id = '" . $hms_booking_id . "'
                //     ,hms_api_reservation_number	 = '" .  $hms_reservation_number . "'
                //     ,hms_json_request	 = '" .  json_encode($decodedData) . "'
                //     ,hms_json_response	 = '" .  json_encode($api_response) . "'

                //  WHERE id = " . $ord['id'])
                //         );

                $wpdb->query(
                    $wpdb->prepare(
                        "UPDATE " . $wpdb->prefix . "vikbooking_orders
                        SET hms_api_booking_id = %s,
                            hms_api_reservation_number = %s,
                            hms_json_request = %s,
                            hms_json_response = %s
                        WHERE id = %d",
                        $hms_booking_id,
                        $hms_reservation_number,
                        json_encode($decodedData),
                        json_encode($api_response),
                        $ord['id']
                    )
                );
            } else {

                //print_r($api_responseArray)  . "<br/>";
                echo '<div style="color:red">Note: Room is already confimed. You will get Room updates.</div>';
            }

            echo '<div style="color:green">Note: Our Team will contact your about payments and you will get Room updates.</div>';
        }
    }
}


if ($hms_reservation_number > 0)
    echo '<div style="color:green">Note: Hotel Room reservation Number : ' . $hms_reservation_number   . '</div>';
// if ($ord['hms_api_reservation_number'] > 0)
//     echo '<div style="color:green">Note: Hotel Room reservation Number : ' .   $ord['hms_api_reservation_number'] . '</div>';

  //else {
//     // echo "NO HMS API";
// }
