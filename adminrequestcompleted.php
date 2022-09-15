<?php
include('connect.php');
$fullname = "";
$homeadd = "";
$birthdate = "";
$age = "";
$gender = "";
$contact = "";
$datepicker = "";
$purposes = "";
$documents = "";
$validID = "";
$fee = "";
$payment = "";
$service = "";
$status = "";

$db = mysqli_connect('localhost', 'root', '', 'bdors');
$result = mysqli_query($db, "SELECT * FROM request where Status='Completed'");
?>