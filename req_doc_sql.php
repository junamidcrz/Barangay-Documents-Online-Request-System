<?php
    include('usersession.php');
    $fullname = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $homeadd = $_POST['homeadd'];
    $contact = $_POST['contact'];
    $datepicker = $_POST['datepicker'];
    $purposes = $_POST['purposes'];
    $documents = $_POST['documents'];
    $fee = $_POST['fee'];
    $ValidID = $_POST['ValidID'];
    $FrontID = $_POST['FrontID'];
    $BackID = $_POST['BackID'];
    $payment = $_POST['payment'];
    $service = $_POST['service'];
    $status = $_POST['status'];
    $username =  $user_check;
    
    //check connection if it's working
    $conn = new mysqli('localhost', 'root', '', 'bdors');
    if($conn->connect_error){
    echo "$conn->connect_error";
    //failed to connect
    die("Connection Failed : ". $conn->connect_error);  
  } 
    //insert the data to database
    else {
		$stmt = $conn->prepare("insert into request(Username, Fullname, Birthdate, Age, Gender, HomeAddress, Contact, DateofRequest, Purposes, Documents, Fee, ValidID, FrontID, BackID, Payment, Service, Status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssissssssssbbsss", $username, $fullname, $birthdate, $age, $gender, $homeadd, $contact, $datepicker, $purposes, $documents, $fee, $ValidID, $FrontID, $BackID, $payment, $service, $status);
    $execval = $stmt->execute();
    
    //after submitting the message will pop up
    echo "<script type='text/javascript'>alert('Your Request is Being Process'); window.location.href = 'req_doc.php';</script>";
	  header("location: userrequest.php");
    $stmt->close();
    $conn->close();
  } 


?>

