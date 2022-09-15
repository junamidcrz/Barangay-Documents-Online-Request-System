<?php
    $db = mysqli_connect('localhost', 'root', '', 'bdors'); 
	
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	
	//inserting details on the database
    $sql = "UPDATE request SET Payment = 'Paid', Service = 'Received', Status ='Completed' WHERE id = '$id'";
	
	if (mysqli_query($db, $sql)) {
	    echo "<script type='text/javascript'>alert('Request Completed!'); window.location.href = 'adminallrequest.php';</script>";
        } 
		else{
            echo "Error: " . $sql . " " . mysqli_error($db);
        }
        mysqli_close($db);
	}
?>