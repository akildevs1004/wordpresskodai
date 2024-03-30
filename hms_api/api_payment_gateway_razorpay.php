<?php

//echo $_SERVER['HTTP_REFERER'];
include('wp-content/razorpay-php-master-updated/Razorpay.php');

//echo "<pre>";

use Razorpay\Api\Api;

$short_url = '';
$reference_id = 'TJ' . date('dmYHis');
$_SESSION['payment_reference_id'] = $reference_id;
$api = new Api('rzp_live_8g6bjwIrihwn3T', 'JNs1nXW6PmUnNkHIdPfQ63n4');

//$origtotdue = 10;
try {
    $results =  $api->paymentLink->create(array(
        'amount' => $origtotdue * 100, 'currency' => 'INR', 'accept_partial' => false,
        'expire_by' => strtotime(date('Y-m-d H:i:s')) + 10000, 'reference_id' => $reference_id, 'description' => 'Room Reservation', 'customer' => array(
            'name' => 'Online',
            'email' => 'customer@gmail.com', 'contact' => '+911122334455'
        ),  'notify' => array('sms' => false, 'email' => false),
        'reminder_enable' => false, 'notes' => array('website' => "Kodai Hyderspark", 'ref_id' => $reference_id), 'callback_url' => 'https://tanjore.hyderspark.com/api_payment_success.php',
        'callback_method' => 'get'
    ));


    foreach ($results as $key => $value) {
        if ($key == 'short_url') {
            $short_url = $value;
        }
        //  print_r($value);
        // echo $value->short_url;
    }
    //print_r($results);
} catch (Exception $e) {
    // print_r($e);
}
//echo $short_url;
if ($short_url != '') {
?>

    <button type="button" class="btn booknow vbo-pref-color-btn paybutton" value="PayButton"><img src="../razor_pay_button.png" /></button>
    <script>
        jQuery(document).ready(function() {
            jQuery(".paybutton").click(function() {
                var w = window.open("<?php echo $short_url; ?>", "popupWindow", "left=500,top=100,width=600, height=800, scrollbars=yes");

            });
        });
    </script>
<?php

}

?><!--
<script>
    jQuery(document).ready(function() {
        jQuery(".paybutton").click(function() {
            var url = "https://tanjore.hyderspark.com/api_payment_success.php";
            //url = 'https://tanjore.hyderspark.com/api_payment_success.php?razorpay_payment_id=pay_NTfDjh18A25Fkv&razorpay_payment_link_id=plink_NTfCZST6UPAISa&razorpay_payment_link_reference_id=TJ27012024230552&razorpay_payment_link_status=paid&razorpay_signature=d70625978577d1dc77a9d16481b00000de2a8217860d07a73af6d37c95592439';
            var w = window.open(url, "popupWindow", "width=1000, height=900, scrollbars=yes");


        });
    });
</script>
 <a href="#" class="paybutton">Paybutton 2</a> -->