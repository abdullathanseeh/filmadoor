<?php

use Razorpay\Api\Api;
$data=$_POST['data'];
$api = new Api('rzp_test_2FkCVw8w20Z4qT', 'pYGkgXcpH7yW6qH72U5CD3M3');

$payment = $api->payment->fetch($data);

?>