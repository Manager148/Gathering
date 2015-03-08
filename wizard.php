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
		<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12">
			<div class="page-header">
				<h1><small>Step <span id="step">1</span> of 4</small></h1>
			</div>
			
			<form id="wizard-form" class="form-horizontal" action="actions/wizard-action.php" onsubmit="validateWizard();" autocomplete="off" method="post" novalidate>
			
				<div id="step1">
					<div class="form-group">
						<label for="event_name" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label">Name your gathering</label>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Thanksgiving, Brunch, Camping Trip, etc." tabindex="1">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<p class="help-block"><a href="#"><i class="fa fa-plus-circle"></i>&nbsp;Use Old Gathering</a> | <a href="#"><i class="fa fa-search"></i>&nbsp;Discover Gathering Ideas</a></p>
						</div>
					</div>
	
					<div class="form-group">
						<label for="date" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label">When is it?</label>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="datetime-local" class="form-control" id="date" name="date" placeholder="Start Date" tabindex="2">
						</div>
					</div>
	
					<div class="form-group">
						<label for="location" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label">Where is it?</label>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="street" name="street" placeholder="Street" tabindex="3">
						</div>
					</div>
	
					<div class="form-group">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
							<input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="4">
						</div>
					</div>
	
					<div class="form-group">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
							<input type="text" class="form-control" id="state" name="state" placeholder="State" tabindex="5">
						</div>
					</div>
	
					<div class="form-group">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
							<input type="number" class="form-control" id="zip" name="zip" placeholder="Zip" tabindex="6">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-offset-3 col-md-offset-3 col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<button type="button" class="btn btn-info" onclick="step(1);" tabindex="7">Next Step</button>
						</div>
					</div>
				</div>
				
				<div id="step2" style="display:none;">
					<div class="form-group">
						<label for="invitees_name" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label">Who's coming?</label>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="text" class="form-control" id="invitees_name" name="invitees_name" placeholder="First &amp; Last Name" tabindex="4">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<input type="email" class="form-control" id="invitees_email" name="invitees_email" placeholder="Email Address" tabindex="5">
						</div>
						<p class="help-block"><a href="#"><i class="fa fa-plus-circle"></i></a></p>
					</div>
	
					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-3">
							<p class="help-block">Add guests from your <a href="#">Gmail</a> and/or <a href="#">Facebook</a></p>
						</div>
					</div>
					
					<div class="form-group">
						<label for="description" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label">Anything else?</label>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<textarea class="form-control" id="description" name="description" placeholder="Parking instructions, allergens, etc." tabindex="6"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
							<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox1" value="option1">&nbsp;I want guests to RSVP
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox2" value="option2">&nbsp;Send automatic reminders
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox3" value="option3">&nbsp;Send <a href="#">stories</a> collage after the gathering
							</label>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-offset-3 col-md-offset-3 col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<button type="button" class="btn btn-info" onclick="step(2);" tabindex="3">Next Step</button>
						</div>
					</div>
				</div>
				
			</form>

		</div>
	</div>
</div>
<!-- /BODY -->

<script>
	function step(num) {
		$("#step" + num).fadeOut("fast", function() {
			$("#step").text(num + 1);
			$("#step" + (num + 1)).fadeIn("fast");
		});
	}
</script>
		
<?php include("includes/footer.php") ?>