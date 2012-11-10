<?php
include_once('connect.php');

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipCode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$size = $_POST['size'];
$month = $_POST['month'];

echo $fName	. $lName . $address	. $city	. $state . $zip	. $phone . $email . $size . $month;
?>