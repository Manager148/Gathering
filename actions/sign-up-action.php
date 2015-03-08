<?php
	require_once ("../includes/functions/functions.php");
	// Validate the Sign In process here

	
				
		//Enter email and passwords into database
		
	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];
	
$sql = "INSERT INTO users (email, password) VALUES ('".$userEmail."', '".$userPassword."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		
	
	header("Location: ../wizard.php");
	exit();
?>