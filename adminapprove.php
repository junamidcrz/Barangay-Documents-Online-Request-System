<?php
	$db = mysqli_connect('localhost', 'root', '', 'bdors'); 
	
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	
	//inserting details on the database
    $sql = "UPDATE request SET Status ='Approved' WHERE id = '$id'";
	
	if (mysqli_query($db, $sql)) {
	    echo "<script type='text/javascript'>alert('Request Approved!'); window.location.href = 'adminallrequest.php';</script>";
        } 
		else{
            echo "Error: " . $sql . " " . mysqli_error($db);
        }
        mysqli_close($db);
	}
	
?>	   