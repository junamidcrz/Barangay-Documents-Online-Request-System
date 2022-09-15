<?php
	$db = mysqli_connect('localhost', 'root', '', 'bdors');
	
	// if the 'id' variable is set in the URL, we know that we need to edit a record
    if (isset($_GET['id'])) {
	$id = $_GET['id'];
	
	//inserting details on the database
    $sql = "UPDATE request SET Status ='Canceled', Service ='Canceled', Payment='Canceled' WHERE id='$id'";
	
	if (mysqli_query($db, $sql)) {
	    echo "<script type='text/javascript'>alert('Request Canceled!'); window.location.href = 'userrequest.php';</script>";
        } 
		else{
            echo "Error: " . $sql . " " . mysqli_error($db);
        }
        mysqli_close($db);
	}
?>	   