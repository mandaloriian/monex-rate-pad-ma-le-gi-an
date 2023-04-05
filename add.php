<?php
	include('connect.php');
 
	$id_currency=$_POST['id_currency'];
    $currency_value=$_POST['currency_value'];
 
	mysqli_query($conn,"insert into `user` (id_currency,currency_value) values ('$id_currency','$currency_value')");
	header('location:../padma/');
 
?>