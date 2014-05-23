<?php
include('../model/seller.php');

$name=$_POST['name'];
$email= $_POST['email'];
$paypalid= $_POST['paypalid'];
$amount_btc= $_POST['amount_btc'];
$public_address= $_POST['public_address'];
$password= $_POST['password'];
$confpassowrd= $_POST['password2'];

$check=createSeller($name,$email,$paypalid,$password,$amount_btc,
    	$public_address);
header("location:../public/listofseller.php");


?>