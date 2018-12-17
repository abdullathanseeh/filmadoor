<?php
require 'razorpay/Razorpay.php';
use Razorpay\Api\Api;
$id=$_POST['reponse_id'];
$api = new Api('rzp_test_2FkCVw8w20Z4qT', 'pYGkgXcpH7yW6qH72U5CD3M3');
$payment  = $api->payment->fetch($id);
return echo $payment->email;
?>