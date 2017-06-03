<!DOCTYPE html>
<html>

<!-- HEAD SECTION -->
<head>
	<?php
		include 'variables.inc.php';
		include $mainDir.'inc/head.inc.php'; 
	?>
</head>

<body>
	<!-- HEADER SECTION -->
	<header>
		<?php include $mainDir.'inc/header.inc.php'; ?>
	</header>


	<!-- MAIN CONTENT -->
	<main class="container">
		
		<div class="row">
			<h2 id="learning-path">Learning Path</h2>
			<hr/>
			<ol class="breadcrumb">
				<li><a href="../index.php#learning-path">Home</a></li>
				<li><a href="webpath.php#learning-path">Web Development</a></li>
				<li><a href="#learning-path" class="active"><strong>Back-End Web Development</strong></a></li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-3">
				<div id="php-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">PHP</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn PHP
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#">
				      	Learn PHP
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1">
				<div id="flask-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Flask</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Flask
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#">
				      	Learn Flask
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1">
				<div id="rails-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Ruby On Rails</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Ruby On Rails
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#">
				      	Learn Ruby On Rails
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div id="django-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Django</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Django
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#">
				      	Learn Django
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1">
				<div id="node-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Node.Js</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Node.Js
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#">
				      	Learn Node.Js
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1">
				<div id="laravel-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Laravel</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Laravel Framework
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#">
				      	Learn Laravel
				    	</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	
	<!-- FOOTER SECTION -->
	<footer>
		<?php include $mainDir.'inc/footer.inc.php' ?>
	</footer>
</body>


</html>