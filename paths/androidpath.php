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
				<li><a href="#learning-path" class="active"><strong>Android</strong></a></li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-3">
				<div id="android-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Android</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Android
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				      	Learn Android
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1">
				<div id="camera-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Camera API</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Camera API
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				      	Learn Camera API
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1">
				<div id="map-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Google Maps API</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Google Maps API
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				      	Learn Google Maps API
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