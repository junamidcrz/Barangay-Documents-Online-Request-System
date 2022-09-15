<?php 
    include('adminsession.php');
	$db = mysqli_connect('localhost', 'root', '', 'bdors');

	// initialize variables
    $uname = ""; 
    $pwd = "";
    $edit_state = false;
	
	//Getting id from the url
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	}
    
    //if button save is clicked
	if (isset($_POST['save'])) {
		$_SESSION['msg'] = "Click the Edit Button First"; 
        header('location: adminsetting.php');
    } 

    // update records
    if (isset($_POST['update'])){
        $uname = $_POST['Username'];
        $pwd = $_POST['Password'];
        
        $sql = mysqli_query($db, "UPDATE admin SET Username='$uname', Password='$pwd' WHERE Username = '$admin_check'");
        echo "<script type='text/javascript'>alert('Update Successful!'); window.location.href = 'adminsetting.php';</script>";
        header('location: adminsetting.php');
    }

    // show records
    $results = mysqli_query($db, "SELECT * FROM admin WHERE Username = '$admin_check'"); 
?>