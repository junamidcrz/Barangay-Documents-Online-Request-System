<?php include 'usersession.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>

  <script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"charset="utf-8"></script>
  
  <!--Date Picker--> 

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

   <!--Date Picker--> 
   
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

* {
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

.logout_btn {
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
	margin-left:  165px;
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

/* Form Design */
form {
	background: #fff;
	width: 60%;
	height: auto;
	margin: 10px auto 0 auto;
	text-align: left;
	padding: 25px; 
	border: 1px solid #fff; 
	border-radius: 5px;
} 

.welcome p {
    font-size: 25px;
    text-align: center;
    margin-top: 15px;
	padding-bottom: 9px;
	color: #000;
	font-weight: 600;
}

.input-group label, p {
	display: block;
	text-align: left;
	margin-top: 10px;
}

.identification {
    border-top: 3px solid #ccc;
    display: block;
	text-align: left;
	margin-top: 30px;
	padding-top: 5px;
}

.identification h1 {
    font-size: 12px;
	color: gray;
	display: block;
	text-align: left;
	margin-top: 10px;
	margin-bottom: 3px;
}

.identification select {
    width: 35%;
	padding: 12px 20px;
	margin-top: 1px;
	margin-bottom: 7px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

.mics {
    border-top: 3px solid #ccc;
    display: block;
	text-align: left;
	margin-top: 7px;
	padding-top: 5px;
}

.mics h1 {
    font-size: 12px;
	color: gray;
	display: block;
	text-align: left;
	margin-top: 3px;
	margin-bottom: 3px;
}

.mics select {
    width: 35%;
	padding: 12px 20px;
	margin-top: 1px;
	margin-bottom: 7px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input {
	width: 100%;
}

input[type=text], select{
	width: 100%;
	padding: 12px 20px;
	margin-top: 1px;
	margin-bottom: 7px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=file]{
    width: 100%;
	padding-bottom: 10px;
	border: none;
	box-sizing: border-box;
}

input[type=submit] {
	width: 100%;
	background-color: #5995fd;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #4d84e2;
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

form {
	width: 80%;
	height: auto;
}

.welcome p {
	margin-top: 5%;
	font-size: 17px;
}

.input-group label, p {
	font-size: 14px;
}

.fee{
   font-size: 14px;
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
        <?php echo $login_session = $row['Username'];?>
    </div>
        <a href="userportal.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
  	    <a href="userreq_doc.php"><i class="fas fa-file-alt"></i><span>Request Document</span></a>
  	    <a href="userrequest.php"><i class="fas fa-folder-open"></i><span>All Requests</span></a>
        <a href="usersetting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
         <!--sidebar end-->
	 
    <div class="content">
    <div class="welcome">
        <p>REQUEST DOCUMENT</p>
    </div>
    <div class="form">                       <!--remove submitted data-->
    <form action="req_doc_sql.php" method="POST" autocomplete="off" >
	  <div class="input-group">
        <label for="name">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your name (Lastname, Firstname, Middle Name)" required>
      </div>
	  
	  <div class="input-group">
        <label for="birthdate">Date of Birth</label>
        <input type="text" id="birth" name="birthdate" placeholder="Enter your birthday (Ex: 12/25/2000)" required>
	  </div>
	  
	  <div class="input-group">
        <label for="age">Age</label>
        <input type="text" id="age" name="age" placeholder="Enter your age" required>
	  </div>
	   
      <div class="input-group">
        <label for="gender">Select Gender</label>
        <select id="gender" name="gender" required>
            <option disabled selected>Please Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
	  </div>
		
      <div class="input-group">
        <label for="address">Address</label>
        <input type="text" id="add" name="homeadd" placeholder="Enter your address" required>
      </div>
	  
	  <div class="input-group">
        <label for="number">Contact Number</label>
        <input type="text" id="contact" name="contact" placeholder="Enter your active contact number" required>
      </div>
	  
   	  <div class="input-group">
        <p>Date of Request<input type="text" id="datepicker" name="datepicker" required></p>
      </div>
	  
	  <div class="input-group">
        <label for="purposes">Purpose</label>
        <input type="text" id="purpose" name="purposes" placeholder="Enter your purpose of request" required>
      </div>
	  
	  <div class="input-group">
        <label for="document">Documents</label>
        <select id="document" name="documents" required>
            <option disabled selected>Please Select</option>
            <option value="Barangay Clearance" name="barangay clearance">Barangay Clearance</option>
            <option value="Certificate of Indigency" name="certificate of indigency">Certificate of Indigency</option>
            <option value="Barangay ID" name="barangay id">Barangay ID</option>
			<option value="Community Tax Return" name="community tax return">Community Tax Return (Cedula)</option>
        </select>
	   </div>
	   
	<!-- To show fee start --> 
	    <br>
		<label for="fee" class="fee">Fee</label>
	  	<div class="input-group" id="fee" name="fee" style="border-bottom: 2px solid black; width: 100px; margin-bottom: 20px;"><br>

	<script>
			$fee = $(document).on("change", "#document", function(){

			var document = $(this).val();
			
			if(document == 'Barangay Clearance'){
				$("#fee").text('75 Pesos');
			} else if(document == 'Certificate of Indigency'){
				$("#fee").text('100 Pesos');
			} else if(document == 'Barangay ID'){
				$("#fee").text('50 Pesos');
			} else if(document == 'Community Tax Return'){
				$("#fee").text('20 Pesos');
			} 
			})
	</script>
    </div>
	<!-- To show fee end --> 
	  
	<div class="input-group">
        <label for="fee">Please Confirm your Requested Document</label>
        <select id="fee" name="fee" required>
            <option disabled selected>Please Select</option>
            <option value="75 Pesos" name="barangay clearance">Barangay Clearance</option>
            <option value="100 Pesos" name="certificate of indigency">Certificate of Indigency</option>
            <option value="50 Pesos" name="barangay id">Barangay ID</option>
			<option value="20 Pesos" name="community tax return">Community Tax Return (Cedula)</option>
        </select>
	   </div>
	   
    <!-- Upload Image Start-->
      <div class="identification">
        <p><label for="image">Upload Valid IDs</label></p>
		<h1>Select Primary IDs</h1>
		
        <select id="ID" name="ValidID" required>
            <option value=""></option>
            <option value="School ID">School ID</option>
			<option value="Barangay ID">Barangay ID</option>
            <option value="Voter's ID">Voter's ID</option>
            <option value="Senior Citizen ID">Senior Citizen ID</option>
            <option value="PWD ID">PWD ID</option>
			<option value="PRC I">PRC ID</option>
            <option value="PhilHealth ID">PhilHealth ID</option>
            <option value="Passport">Passport</option>
			<option value="Driver's Licence">Driver's Licence</option>
            <option value="SSS Card">SSS Card</option>
            <option value="UMID Card">UMID Card</option>
        </select> 
		
		<h1><li>Please upload the FRONT pic of ID</li></h1>
		<input type="file"  accept="image/*" name="FrontID" id="file"  onchange="loadFile(event)" style="display: moz-box cursor: pointer;" required>

		<h1><li>Please upload the BACK pic of ID</li></h1>
		<input type="file"  accept="image/*" name="BackID" id="file"  onchange="loadFile(event)" style="display: moz-box cursor: pointer; margin-bottom: 15px;" required>

        <script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
		</div>
	<!-- Upload Image End-->
	
	
	<!-- Fee and Payment Start-->
	  <div class="mics">
	  <div class="input-group">
	  <label>Payment Option</label>
	  <h1><li>Please Select Your Payment</li></h1>
	  <select id="payment" name="payment" required>
            <option value=""></option>
            <option value="COD">Cash on Delivery (COD)</option>
            <option value="On Pickup">On Pickup</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Paymaya">Paymaya</option>
			<option value="Gcash">Gcash</option>
       </select> 
	   </div>
	   
	  <div class="input-group">
	  <label>Service Option</label>
	  <h1><li>Please Select Your Service</li></h1>
	  <select id="service" name="service" required>
            <option value=""></option>
            <option value="For Delivery">For Delivery</option>
            <option value="For Pickup">For Pickup</option>
        </select> 
	   </div>
	   
	  </div>
	<!-- Fee and Payment End-->

	<!-- Status Hidden-->
	<div class="input-group">
	  <input type="hidden" id="status" name="status">
		<script type="text/javascript"> 
		document.getElementById("status").setAttribute('value','Pending for Approval');
		</script>
	</div>
	<!-- Status Hidden-->


    <input type="submit" value="Submit" onclick="return confirm('Are you sure you want to place this request?');" style="margin-top: 25px;">
		
	  </div>
    </form>
    </div>
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