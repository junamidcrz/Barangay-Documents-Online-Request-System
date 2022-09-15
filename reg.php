<?php 
	session_start();
	
	//check if the user click the submit button on the form
    if(isset($_POST['signup'])){ 
	
	//then we include the databse connection
	include_once 'connect.php';
	
	//and we get the data from the signup form
    $fname = ($_POST['FirstName']);
	$lname = ($_POST['LastName']);
    $email = ($_POST['Email']);
    $uname = ($_POST['Username']);
    $pwd =($_POST['Password']);
	$pwd2 =($_POST['CPassword']);
	$Status = $_POST['Status'];
	
	
	//confirming if passwords are the same
    if ($pwd != $pwd2) {
    echo "<script type='text/javascript'>alert('Password do not match!'); window.location.href = 'login.php';</script>";
    }
			
	//inserting details on the database
	else{
	    $sql = "INSERT INTO user (FirstName, LastName, Email, Username, Password, Status)
            VALUES ('$fname','$lname','$email','$uname','$pwd', '$Status')";
			
	if (mysqli_query($conn, $sql)) {
	    echo "<script type='text/javascript'>alert('Your are already registered!'); window.location.href = 'login.php';</script>";
        } 
		else{
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
        }
    }
?>