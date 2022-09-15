 <?php
    include("connect.php");
    session_start();
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		
    // username and password sent from form 
      
    $uname = mysqli_real_escape_string($conn,$_POST['Username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['Password']); 
      
	$sql = "SELECT id FROM user WHERE Username = '$uname' and Password = '$pwd'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
	$count = mysqli_num_rows($result);
  
	// If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {
	$_SESSION['login_user'] = $uname;
	header("location: userportal.php");
	}else {
	echo "<script type='text/javascript'>alert('Your Username or Password is wrong! '); window.location.href = 'login.php';</script>";
	}
	}
?>