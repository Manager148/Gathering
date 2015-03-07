		<!-- FOOTER -->
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="#">&copy; <?php auto_copyright('2015') ?> // Gathering, LLC</a>
					</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Social Links</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</footer>
		<!-- /FOOTER -->
		
		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $scriptDir ?>bootstrap.min.js"></script>
<?php if ($Validation == true) { ?>
		<script type="text/javascript" src="<?php echo $scriptDir ?>validation.js"></script>
<?php } ?>
<?php if ($Page == "Home") { ?>
		<script type="text/javascript" src="<?php echo $scriptDir ?>backstretch.min.js"></script>
<?php } ?>
	</body>
</html>