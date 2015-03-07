<nav id="about-subnav" class="subnav clearfix">
	<div class="container">
		<ul class="nav navbar-nav">
			<li id="skills-subnavbar" <?php if (basename($_SERVER['PHP_SELF']) == "skills.php") echo "class='active'" ?>><p><a href="<?php echo $baseDir ?>about/skills.php" class="no-decoration">Skills</a></p></li>
			<li id="resume-subnavbar" <?php if (basename($_SERVER['PHP_SELF']) == "resume.php") echo "class='active'" ?>><p><a href="<?php echo $baseDir ?>about/resume.php" class="no-decoration">Resume</a></p></li>
		</ul>
	</div>
</nav>