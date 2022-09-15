<?php
   include('connect.php');
   session_start();

   $admin_check = $_SESSION['login_admin'];
   
   $ses_sql = mysqli_query($conn,"SELECT Username from admin where Username = '$admin_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Username'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location: adminlogin.php");
      die();
   }
?>