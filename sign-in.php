<?php
	$Validation			= true;							// includes the validation script
	$Page				= "Sign In"; 					// tells us the name of the page
	$PageTitle			= $Page . " - Gathering"; 		// sets the page title
	$MetaDescription	= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
?>

<?php include("includes/functions/functions.php") ?>

<?php include("includes/header.php") ?>

<!-- BODY -->
<div id="<?php echo $id ?>" class="container">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
			<div class="page-header">
				<h1>Sign In</h1>
			</div>
			
			<form id="sign-in-form" class="form-horizontal" action="actions/sign-in-action.php" onsubmit="validateSignin();" autocomplete="off" method="post" novalidate>
			
				<div class="form-group">
					<label for="email" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">Email</label>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<input type="email" class="form-control" id="email" name="email" tabindex="1">
					</div>
				</div>
				
				<div class="form-group">
					<label for="password" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">Password</label>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<input type="password" class="form-control" id="password" name="password" tabindex="2">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-lg-offset-4 col-md-offset-4 col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<button type="submit" class="btn btn-info" tabindex="3">Sign In</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
	
</div>
<!-- /BODY -->
		
<?php include("includes/footer.php") ?>