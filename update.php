<?php
	include('connect.php');
	$id=$_GET['id'];
 
	$currency=$_POST['currency'];
	$id_currency=$_POST['id_currency'];
    $currency_value=$_POST['currency_value'];
 
	mysqli_query($conn,"update `user` set currency_value='$currency_value' where id_currency='$id_currency'");
	header('location:../padma/update/');
?>