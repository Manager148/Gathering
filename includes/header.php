<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1" />
		<meta name="description" content="<?php echo $MetaDescription ?>" />
		<meta name="author" content="Gathering, LLC" />
		<meta name='robots' content='index, follow, noodp' />
		
		<link rel="canonical" href="http://www.wegather.co/" />
		<link rel="author" href="https://plus.google.com/112306847652361077748" />
		
		<title><?php echo $PageTitle ?></title>
		
		<!-- FAVICON -->
		<link rel="icon" type="image/ico" href="<?php echo $imageDir ?>favicon.ico" />	
		<!-- STYLESHEETS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $styleDir ?>bootstrap.min.css?ver=1.0" />
		<link rel="stylesheet" type="text/css" href="<?php echo $styleDir ?>gathering.css?ver=1.0" />
		<!-- FONTS -->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,300,400,600|Dancing+Script" />
		<link rel="stylesheet" type="text/css" href="<?php echo $styleDir ?>font-awesome.min.css" />
	</head>
	
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php echo $imageDir ?>gathering-<?php if ($Page == "Home") { ?>white<?php } else { ?>blue<?php } ?>.png" alt="Gathering" /></a>
					</div>
<?php if ($signIn != true) { ?>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="sign-in.php"<?php if ($Page == "Home") { ?> class="text-white"<?php } ?>>Log In</a></li>
						</ul>
					</div>
<?php } ?>
				</div>
			</nav>
		</header>