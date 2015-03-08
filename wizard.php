<?php
	$Page				= "Wizard"; 				// tells us the name of the page
	$PageTitle			= $Page . " - Gathering"; 	// sets the page title
	$MetaDescription	= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
?>

<?php include("includes/functions/functions.php") ?>

<?php include("includes/header.php") ?>

<!-- BODY -->
<div id="<?php echo $id ?>" class="container">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
			<div class="page-header">
				<h1>Wizard</h1>
			</div>
			
			<form id="wizard-form" class="form-horizontal" action="actions/wizard-action.php" onsubmit="validateWizard();" autocomplete="off" method="post" novalidate>
				<div class="form-group">
					<label for="event_name" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">Event Name</label>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<input type="text" class="form-control" id="event_name" tabindex="1">
					</div>
				</div>
				
				<div class="form-group">
					<label for="event_date" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">Event Date</label>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<input type="datetime-local" class="form-control" id="event_date" tabindex="2">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-lg-offset-4 col-md-offset-4 col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<button type="submit" class="btn btn-default" tabindex="3">Continue</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
<!-- /BODY -->
		
<?php include("includes/footer.php") ?>