<?php include ('userserver.php'); 

	//fetch the record to be updated
	if (isset($_GET['edit'])){
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM user WHERE Username = '$user_check'");
		$record = mysqli_fetch_array($rec);
		$fname = $record['FirstName'];
		$lname = $record['LastName'];
		$email = $record['Email'];
		$uname = $record['Username'];
		$pwd = $record['Password'];
	}
?>
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
	background: url(img/bg.jpg) no-repeat;
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

table {
    background: #fff;
    width: 50%;
    text-align: center;
	margin: 10px auto 0 auto;
	font-size: 16px;
	border: 1px solid #bbbbbb;
	border-radius: 5px;
	border-collapse: collapse;
}

tr {
	border-bottom: 1px solid #cbcbcb;
	width: 100px;
}
	
th, td {
	border: none;
	height: 43px;
	padding: 10px;
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

.edit_btn{
	text-decoration: none;
	font-size: 17px;
	padding: 2px 5px;
	background: blue;
	color: white; 
	transition: 0.5s;
}

.edit_btn:hover{
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
	transition: 0.5ss;
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
	width: (100% -0px);
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

.btn {
	padding: 7px;
	font-size: 14px;
}

.edit_btn{
	font-size: 15px;
	padding: 2px 3px;
}

table {
    font-size: 13px;
	width: 80%;
	height: auto;
} 

tr {
	border-bottom: 1px solid #cbcbcb;
	width: 50px;
}
	
th, td {
    font-size: 11px;
	border: none;
	height: 30px;
	padding: 5px;
}

form {
    font-size: 14px;
	width: 80%;
	height: auto;
}

.input-group label, p {
	font-size: 14px;
}
}
</style>


<body>
<?php if (isset($_SESSION['msg'])): ?>
	<div class = "msg">
		<?php
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		?>
	</div>
	<?php endif ?>
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
		<?php echo $login_session = $row['Username'];?>
  	</div>
  		<a href="userportal.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
  	    <a href="userreq_doc.php"><i class="fas fa-file-alt"></i><span>Request Document</span></a>
  	    <a href="userrequest.php"><i class="fas fa-folder-open"></i><span>All Requests</span></a>
        <a href="usersetting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
  <!--sidebar end-->

  
  <!--content start-->
  <div class="content">
  <?php while ($row = mysqli_fetch_array($results)) { ?>
		<table>
		<tr bgcolor='#5995fd' style="color:white;">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th> </th>
		</tr>
		<tr>
			<td><?php echo $row['FirstName'];?>	</td>
			<td><?php echo $row['LastName'];?>	</td>
			<td><?php echo $row['Email']; ?>	</td>
			<td><?php echo $row['Username'];?>	</td>
			<td><?php echo $row['Password']; ?>	</td>
			<td>
				<a class ="edit_btn" href="usersetting.php?edit=<?php echo $row['id']; ?>"><i class="far fa-edit"></i></a>
			</td>
		</tr>
		</table>
	<?php } ?>
	
  <form method="post" action="userserver.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="FirstName" value="<?php echo $fname; ?>" required oninvalid="this.setCustomValidity('Please Click the Edit Button')" oninput="setCustomValidity('')">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="LastName" value="<?php echo $lname; ?>" require>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email" value="<?php echo $email; ?>" required>
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" value="<?php echo $uname; ?>" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text"  name="Password" value="<?php echo $pwd; ?>" required>
		</div>
		<div class="input-group">
		<?php if ($edit_state == false): ?>
			<button class="btn" type="submit" name="update" >Update</button>
		<?php else: ?>
			<button class="btn" type="submit" onclick="return confirm('Are you sure to change your information?');" name="update" >Update</button>
		<?php endif ?>
		</div>
	</form>
	</div>
    <!--content end-->
</body>
  
  <script type="text/javascript">
    $(document).ready(function(){
		$('.nav_btn').click(function(){
			$('.mobile_nav_items').toggleClass('active');
		});
	});
  </script>

</body>
</html>