		<!-- FOOTER -->
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a href="#" class="navbar-brand<?php if ($Page == "Home") { ?> text-white<?php } ?>">&copy; <?php auto_copyright('2015') ?> // Gathering, LLC</a>
					</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"<?php if ($Page == "Home") { ?> class="text-white"<?php } ?>><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"<?php if ($Page == "Home") { ?> class="text-white"<?php } ?>><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"<?php if ($Page == "Home") { ?> class="text-white"<?php } ?>><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
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
		<script type="text/javascript">
			$.backstretch([
				"<?php echo $imageDir ?>home-slide-1.jpg",
				"<?php echo $imageDir ?>home-slide-2.jpg"
			], {duration: 3000, fade: 1450});
		</script>
<?php } ?>
	</body>
</html>