<?php
	$Page				= "Home"; 					// tells us the name of the page
	$PageTitle			= $Page . " - Gathering"; 	// sets the page title
	$MetaDescription	= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
?>

<?php include("includes/functions/functions.php") ?>

<?php include("includes/header.php") ?>

<!-- BODY -->
<div id="<?php echo $id ?>" class="container">

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<div id="gathering-carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#gathering-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#gathering-carousel" data-slide-to="1"></li>
				</ol>
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="page-header">
							<h1 class="text-white">Plan and organize your gathering together.</h1>
						</div>
						
						<p class="lead text-white">Host a gathering, invite guests, assign items, initiate votes making your planning easier.</p>
					</div>
					<div class="item">
						<div class="page-header">
							<h1 class="text-white">Stay close before and after your gathering.</h1>
						</div>
						
						<p class="lead text-white">Capture and share moments beyond your gathering anytime, anywhere.</p>
					</div>
				</div>
			</div>
			
			<a href="sign-up.php" class="btn btn-lg btn-info">Sign Up</a>
		
		</div>
	</div>
</div>
<!-- /BODY -->
		
<?php include("includes/footer.php") ?>