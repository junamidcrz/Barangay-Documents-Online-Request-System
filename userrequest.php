<?php include('usersession.php'); ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>
  <script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"charset="utf-8"></script>
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

*{
	margin: 0;
	padding: 0;
	font-family: "Roboto", sans-serif;
}

header {
	z-index: 1;
	position: fixed;
	background: #22242A;
	padding: 20px;
	width: calc(100% - 0%);
	top: 0;
	height: 30px;
}

.left_area h3 {
    color: #fff;
    margin: 0;
    text-transform: uppercase;
    font-size: 22px;
    font-weight: 900;
}

.left_area span {
	color: #5995fd;
}

.logout_btn{
	padding: 5px;
	background: #5995fd;
	float: right;
	text-decoration: none;
	margin-top: -30px;
	margin-right: 40px;
	border-radius: 2px;
	font-size: 15px;
	font-weight: 600;
	color: #fff;
	transition: 0.5s;
	transition-property: background;
}

.logout_btn:hover {
	background: #4d84e2;
}

.sidebar {
	z-index: 1;
	top: 0;
	background: #2F323A;
	margin-top: 70px;
	padding-top: 30px;
	position: fixed;
	left: 0;
	width: 250px;
	height: calc(100% - -9%);
	transition: 0.5s;
	transition-property: left;
	overflow-y: auto; 
}

.profile_info {
	display: flex;
	flex-flow: column;
	justify-content: center;
	align-items: center;
	color: #fff;
	font-size: 17px;
	margin-bottom: 20px;
}

.sidebar .profile_info .profile_image {
	width: 70px;
	height: 70px;
	border-radius: 100px;
	margin-bottom: 10px;
}

.sidebar .profile_info h4 {
	color: #ccc;
	margin-top: 0;
	margin-bottom: 20px;
}

.sidebar a {
	color: #fff;
	display: block;
	width:  100%;
	line-height: 60px;
	text-decoration: none;
	padding-left: 40px;
	box-sizing: border-box;
	transition: 0.05s;
	transition-property: background;
}

.sidebar a:hover {
	background: #5995fd;
}

.sidebar i {
	padding-right: 10px;
}

label #sidebar_btn {
	z-index: 1;
	color: #fff;
	position: fixed;
	cursor: pointer;
	left: 300px;
	font-size: 20px;
	margin: 5px 0;
	transition: 0.5s;
	transition-property: color;
}

label #sidebar_btn:hover {
	color: #5995fd;
}

#check:checked ~ .sidebar {
	left: -185px;
}

#check:checked ~ .sidebar a span {
	display: none;
}

#check:checked ~ .sidebar a {
	font-size: 20px;
	margin-left: 165px;
	width: 100%;
}

.content {
	width: (100% - 250px);
	margin-top: 60px;
	padding: 20px;
	margin-left: 250px;
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(159,162,168,0.3169642857142857) 0%), url(img/bg.jpg);
	background-size: cover;
	height: auto;
	transition: 0.5s;
}

#check:checked ~ .content {
	margin-left: 60px;
}

#check:checked ~ .sidebar .profile_info {
	display: none;
}

#check {
	display: none;
}

.mobile_nav {
	display: none;	
}

.content .card p {
	background: #fff;
	padding: 15px;
	margin-bottom: 10px;
	font-size: 14px;
	opacity: 0.8;
}

/* Content */

.welcome p {
    font-size: 23px;
    text-align: center;
    margin: 20px 0 25px 0;
	color: #000;
	font-weight: 600;
}

table {
    background: #fff;
    width: 90%;
    text-align: center;
	margin: 10px auto 65px auto;
	border: 1px solid #000;
	border-radius: 5px;
	border-collapse: collapse;
}

.thead {
    color: white; 
	font-weight: 600; 
	font-size: 17px;
}

tr {
	border-bottom: 1px solid #cbcbcb;
	width: 100px;
    font-size: 16px;
}
	
th, td {
	border: none;
	height: 43px;
	padding: 10px;
	font-size: 15px;
}

form {
    background: #fff;
	width: 45%;
	margin: 50px auto;
	text-align: left;
	padding: 20px; 
	border: 1px solid #bbbbbb; 
	border-radius: 5px;
}

.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin-top: 20px;
}

.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}

.btn {
    margin-top: 10px;
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5995fd;
	border: none;
	border-radius: 5px;
	transition: 0.5s;
}

.btn:hover {
    background-color: #4d84e2;
}

.delete_btn{
	text-decoration: none;
	font-size: 17px;
	padding: 2px 5px;
	background: red;
	color: white; 
	transition: 0.5s;
}

.delete_btn:hover{
    background-color: #4d84e2;
}


.del_btn {
	text-decoration: none;
	padding: 2px 5px;
	color: white;
	border-radius: 3px;
	background: #800000;
}

.msg {
	margin: 30px auto; 
	padding: 10px; 
	border-radius: 5px; 
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	width: 50%;
	text-align: center;
}
	

/*Responsive CSS*/

@media screen and (max-width: 780px){
.sidebar {
	display: none;
}
	
#sidebar_btn {
	display: none;
}
	
.content {
	margin-left: 0;
	margin-top: 0;
	padding: 10px 20px;
	transition: 0s;
}
	
#check:checked ~ .content {
	margin-left: 0  ;
}
	
.mobile_nav {
	display: block;
	width: calc(100% - 0%);
}
	
.nav_bar {
	background: #222;
	width: (100% - 0px);
	margin-top: 70px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px 20px;
}
	
.nav_bar .mobile_profile_image {
	width: 50px;
	height: 50px;
	border-radius: 50%;
}
	
.nav_bar .nav_btn {
	color: #fff;
	font-size: 22px;
	cursor: pointer;
	transition: 0.5s;
	transition-property: color;
}
	
.nav_bar .nav_btn:hover {
	color: #5995fd;
}
	
.mobile_nav_items {
	background: #2F323A;
	display: none;
}
	
.mobile_nav_items a {
    font-size: 14px;
	color: #fff;
	display: block;
	text-align: center;
	letter-spacing: 1px;
	line-height: 60px;
	text-decoration: none;
	box-sizing: border-box;
	transition: 0.5s;
	transition-property: background;
}
	
.mobile_nav_items a:hover {
	background: #5995fd;
}
	
.mobile_nav_items i {
	padding-right: 10px;
}
	
.active {
	display: block;
}

.welcome p {
    font-size: 16px;
}

table {
	width: 50%;
	height: auto;
} 

.thead {
    color: white; 
	font-weight: 600; 
	font-size: 12px;
}

tr {
	border-bottom: 1px solid #cbcbcb;
	width: 20px;
}
	
th, td {
	border: none;
	font-size: 11px;
	height: 20px;
	padding: 5px;
}
}

</style>


<body>
	<input type="checkbox" id="check">
  <!--header area start-->

  <header>
  	<label for="check">
  		<i class="fas fa-bars" id="sidebar_btn"></i>
  	</label>
  	<div class="left_area">
  		<h3> BD<Span>ORS</Span></h3>
  	</div>
  	<div class="right_area">
  		<a href="userlogout.php" class="logout_btn">Logout</a>
  	</div>
  </header>
  <!--header area end-->
  
  <!--mobile navigation start-->
  <div class="mobile_nav">
    <div class="nav_bar">
	    <img src="img/ava.png" class="mobile_profile_image">
		<i class="fas fa-bars nav_btn"></i>
    </div>
	<div class="mobile_nav_items">
		<a href="userportal.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
  	    <a href="userreq_doc.php"><i class="fas fa-file-alt"></i><span>Request Document</span></a>
  	    <a href="userrequest.php"><i class="fas fa-folder-open"></i><span>All Requests</span></a>
        <a href="usersetting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
	</div>
  </div>
  <!--mobile navigation end-->
  
  
  <!--sidebar start-->

  <div class="sidebar">
  	<div class="profile_info">
  		<img src="img/ava.png" class="profile_image" alt="">
      <?php  echo $login_session = $row['Username']; ?>
  	</div>
  		<a href="userportal.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
  	    <a href="userreq_doc.php"><i class="fas fa-file-alt"></i><span>Request Document</span></a>
  	    <a href="userrequest.php"><i class="fas fa-folder-open"></i><span>All Requests</span></a>
        <a href="usersetting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
  </div>

  <!--sidebar end-->

  <div class="content">
    <div class="welcome">
        <p>ALL REQUESTS</p>
    </div>
    <?php include ('requestpending.php');?>
    <table class="box" border="none" cellpadding="10" cellspacing="0" width="500" align="center">
	<thead> 
	 <td class ="thead" colspan="9" bgcolor='#5995fd'> PENDING REQUEST </td>
	</thead>
   <tbody>
   <tr>
   <td><label><b>Full Name</b></label></td>
   <td><label><b>Date of Request</b></label></td>
   <td><label><b>Purpose</b></label></td>
   <td><label><b>Document</b></label></td>
   <td><label><b>Fee</b></label></td>
   <td><label><b>Payment</b></label></td>
   <td><label><b>Service</b></label></td>
   <td><label><b>Status</b></label></td>
   <td> </td>
   </tr>

  <?php while ($row = mysqli_fetch_array($result)){ ?>
   <tr>
  <td><?php echo $row['Fullname'];?></td>
  <td><?php echo $row['DateofRequest'];?></td>
  <td><?php echo $row['Purposes'];?></td>
  <td><?php echo $row['Documents'];?></td>
  <td><?php echo $row['Fee'];?></td>
  <td><?php echo $row['Payment'];?></td>
  <td><?php echo $row['Service'];?></td>
  <td><?php echo $row['Status'];?></td>
  <td width='55px'><a class ="delete_btn" onclick="return confirm('Are you sure to cancel this request?');" href="usercancel.php?id=<?php echo $row['id']; ?>"><i class="far fa-times-circle"></i></a></td>
  </tr>
  <?php } ?>
</table>

    <?php include ('requestapproved.php');?>
    <table class="box" border="none" cellpadding="10" cellspacing="0" width="500" align="center">
	<thead> 
	 <td class ="thead" colspan="8" bgcolor='#5185DE'> APPROVED REQUEST </td>
	</thead>
   <tbody>
   <tr>
   <td><label><b>Full Name</b></label></td>
   <td><label><b>Date of Request</b></label></td>
   <td><label><b>Purpose</b></label></td>
   <td><label><b>Document</b></label></td>
   <td><label><b>Fee</b></label></td>
   <td><label><b>Payment</b></label></td>
   <td><label><b>Service</b></label></td>
   <td><label><b>Status</b></label></td>
   </tr>

  <?php while ($row=mysqli_fetch_array($result)){ ?>
   <tr>
  <td><?php echo $row['Fullname'];?></td>
  <td><?php echo $row['DateofRequest'];?></td>
  <td><?php echo $row['Purposes'];?></td>
  <td><?php echo $row['Documents'];?></td>
  <td><?php echo $row['Fee'];?></td>
  <td><?php echo $row['Payment'];?></td>
  <td><?php echo $row['Service'];?></td>
  <td><?php echo $row['Status'];?></td>
  </tr>
  <?php } ?>
  </tbody>
</table>

    <?php include ('requestcompleted.php');?>
    <table class="box" border="none" cellpadding="10" cellspacing="0" width="500" align="center">
	<thead> 
	 <td class ="thead" colspan="9" bgcolor='#3660A5'> COMPLETED REQUEST </td>
	</thead>
   <tbody >
   <tr>
   <td><label><b>Full Name</b></label></td>
   <td><label><b>Date of Request</b></label></td>
   <td><label><b>Purpose</b></label></td>
   <td><label><b>Document</b></label></td>
   <td><label><b>Fee</b></label></td>
   <td><label><b>Payment</b></label></td>
   <td><label><b>Service</b></label></td>
   <td><label><b>Status</b></label></td>
   </tr>

  <?php while ($row=mysqli_fetch_array($result)){ ?>
   <tr>
  <td><?php echo $row['Fullname'];?></td>
  <td><?php echo $row['DateofRequest'];?></td>
  <td><?php echo $row['Purposes'];?></td>
  <td><?php echo $row['Documents'];?></td>
  <td><?php echo $row['Fee'];?></td>
  <td><?php echo $row['Payment'];?></td>
  <td><?php echo $row['Service'];?></td>
  <td><?php echo $row['Status'];?></td>
  <?php } ?>
</table>

    <?php include ('requestdenied.php');?>
    <table class="box" border="none" cellpadding="10" cellspacing="0" width="500" align="center">
	<thead> 
	 <td class ="thead" colspan="9" bgcolor='#203456'> DENIED REQUEST </td>
	</thead>
   <tbody>
   <tr>
   <td><label><b>Full Name</b></label></td>
   <td><label><b>Date of Request</b></label></td>
   <td><label><b>Purpose</b></label></td>
   <td><label><b>Document</b></label></td>
   <td><label><b>Fee</b></label></td>
   <td><label><b>Payment</b></label></td>
   <td><label><b>Service</b></label></td>
   <td><label><b>Status</b></label></td>
   <td></td>
   </tr>

  <?php while ($row=mysqli_fetch_array($result)){ ?>
   <tr>
  <td><?php echo $row['Fullname'];?></td>
  <td><?php echo $row['DateofRequest'];?></td>
  <td><?php echo $row['Purposes'];?></td>
  <td><?php echo $row['Documents'];?></td>
  <td><?php echo $row['Fee'];?></td>
  <td><?php echo $row['Payment'];?></td>
  <td><?php echo $row['Service'];?></td>
  <td><?php echo $row['Status'];?></td>
  </tr>
  <?php } ?>
</table>

 <?php include ('requestcanceled.php');?>
    <table class="box" border="none" cellpadding="10" cellspacing="0" width="500" align="center">
	<thead> 
	 <td class ="thead" colspan="9" bgcolor='#131F33'> CANCELED REQUEST </td>
	</thead>
   <tbody>
   <tr>
   <td><label><b>Full Name</b></label></td>
   <td><label><b>Date of Request</b></label></td>
   <td><label><b>Purpose</b></label></td>
   <td><label><b>Document</b></label></td>
   <td><label><b>Fee</b></label></td>
   <td><label><b>Payment</b></label></td>
   <td><label><b>Service</b></label></td>
   <td><label><b>Status</b></label></td>
   <td></td>
   </tr>

  <?php while ($row=mysqli_fetch_array($result)){ ?>
   <tr>
  <td><?php echo $row['Fullname'];?></td>
  <td><?php echo $row['DateofRequest'];?></td>
  <td><?php echo $row['Purposes'];?></td>
  <td><?php echo $row['Documents'];?></td>
  <td><?php echo $row['Fee'];?></td>
  <td><?php echo $row['Payment'];?></td>
  <td><?php echo $row['Service'];?></td>
  <td><?php echo $row['Status'];?></td>
  <td width='55px'><a class ="delete_btn" onclick="return confirm('Are you sure to delete this request?');" href="requestdelete1.php?id=<?php echo $row['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
  </tr>
  <?php } ?>
</table>
</div>
  
  <script type="text/javascript">
    $(document).ready(function(){
		$('.nav_btn').click(function(){
			$('.mobile_nav_items').toggleClass('active');
		});
	});
  </script>

</body>
</html>