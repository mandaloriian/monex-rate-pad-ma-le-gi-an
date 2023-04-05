<?php

$pname="localhost";
$usname="root";
$password="";

$db_padmauser="padmadb";

$conn=mysqli_connect($pname,$usname,$password,$db_padmauser);

if(!$conn){
    echo "Connection Not Successfull";
}

?>