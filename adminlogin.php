<html>
<head>
	<title>BDORS Admin Login</title>
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap'); 


* {
	margin: 0;
	padding: 0;
	font-family: "Roboto", sans-serif;	
}

.logo h3{
	position: absolute;
	color: #fff;
    font-size: 22px;
    font-weight: 900;
	width: 50px;
	cursor: pointer;
	margin: 30px 0 0 30px;
}

.logo span{
	color: #5995fd;
}


.container{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/bg.jpg);
	background-size: cover;
	width: 100%;
	height: 100vh;
}


form{
	color: #fff;
}
		
.box{
	width: 320px;
	padding: 40px 40px 20px 40px;
	border-radius: 25px;
	position: absolute;
	height: 340px;
	margin-top: 24%;
	left: 50%;
	transform: translate(-50%,-50%);
	background: #0006;
	text-align: center;
}
		
.box h1{
	color: #fff;
	font-size: 25px;
	padding: 5px 0;
	text-transform: uppercase;
	font-weight: 300;
}
		
.box input[type = "text"],.box input[type = "password"]{
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}
		
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
	width: 280px;
	border=color: #2ecc71;
}
		
.box input[type = "submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid red;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}
		
.box input[type = "submit"]:hover{
	background: red;
}

</style>

<body>
	<div class="logo">
  	    <h3>BD<Span>ORS</Span></h3>
  	</div> 
	<div class="container">
	<form class="box" action="" method="post">
	<img src="img/ava.png" width="60" height="60" style="margin-left:0%; padding-bottom: 5px;">
		<h1>Admin Login</h1>
			<input type="text" name="Username" placeholder="Username">
			<input type="password" name="Password" placeholder="Password">
			<input type="submit" name="submit" value="Login">
			
<?php
    session_start();
	include('connect.php');
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = mysqli_real_escape_string($conn,$_POST['Username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['Password']); 	
   
	$sql = "SELECT id FROM admin WHERE Username = '$uname' and Password = '$pwd'";
	$result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
	$count = mysqli_num_rows($result);
     
	if ($count == 1) {
	$_SESSION['login_admin'] = $uname;
	header("location: adminportal.php");
	} else {
	    echo "<script type='text/javascript'>alert('Your Username or Password is wrong! '); window.location.href = 'adminlogin.php';</script>";
	    exit();
	}
	}
?>
	</form>
    </div>
</body>

</html>
		