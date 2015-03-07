<?php
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
	
	$baseDir	= "http://localhost/gathering/";
	$styleDir	= "http://localhost/gathering/includes/stylesheets/";
	$imageDir	= "http://localhost/gathering/includes/images/";
	$scriptDir	= "http://localhost/gathering/includes/scripts/";
?>