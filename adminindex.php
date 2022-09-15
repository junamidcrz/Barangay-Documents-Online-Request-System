<?php
include('connect.php');
$fname = "";
$lname = "";
$email = "";
$uname = "";
$id = "";

$db = mysqli_connect('localhost', 'root', '', 'bdors');
$result = mysqli_query($db, "SELECT * FROM user");
?>