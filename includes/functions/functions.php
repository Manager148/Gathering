<?php

	// CONSTANTS
	
	$baseDir	= "http://localhost/";
	$styleDir	= $baseDir . "includes/stylesheets/";
	$imageDir	= $baseDir . "includes/images/";
	$scriptDir	= $baseDir . "includes/scripts/";
	$fontDir	= $baseDir . "includes/fonts/";
	$id			= str_replace(" ","", $Page);;	// trims white space so we can use the page name as the id of the containing div
	$mysqlserver = "localhost";
	$mysqluser = "gatheringapp";
	$mysqlpassword = "password";
	$mysqlDB = "gathering";
	
// Create connection to database
$conn = new mysqli($mysqlserver, $mysqluser, $mysqlpassword, $mysqlDB);

// Check connection to database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

	
	// COMMON FUNCTIONS
	
	// Get/Set Copyright Year
	function auto_copyright ($year = 'auto') {
		if(intval($year) == 'auto') {
			$year = date('Y');
		}
		if(intval($year) == date('Y')) {
			echo intval($year);
		}
		if(intval($year) < date('Y')) {
			echo intval($year) . ' - ' . date('Y');
		}
		if(intval($year) > date('Y')) {
			echo date('Y');
		}
	}
?>