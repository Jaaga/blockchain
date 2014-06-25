<?php
include '../model/seller.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (loginSeller($email,$password))
{
	header("location:../public/listofseller.php");
}
else{
	header("location:../public/login.php");
	echo "Invalid User";
}

?>