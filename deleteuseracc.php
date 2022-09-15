<?php
//including the database connection file
include("connect.php");
 
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$id = $_GET['id'];

// write delete query
$sql = "DELETE FROM user WHERE id = '$id'";

// Execute the query
$result = $conn->query($sql);

if ($result == TRUE) {
	echo "<script type='text/javascript'>alert('Request Deleted!'); window.location.href = 'adminallusers.php';</script>";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
    }
?>