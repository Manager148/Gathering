<?php
	if (isset($_COOKIE["css_expire_date"])) {
		
	} else {
		setcookie("css_expire_date","asdf",time()+3600*24*30,"/","www.spencerbieri.com","false");
	}
?>