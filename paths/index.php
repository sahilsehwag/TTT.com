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
	<header class="paths">
		<!-- HEADER SECTION -->
		<?php include $mainDir.'inc/header.inc.php'; ?>
	</header>

	<!-- MAIN CONTENT -->
	<main class="container">
		<!-- BREADCRUMBS -->
		<div class="row">
			<h2 id="learning-path" class="display-4">Learning Path</h2>
			<hr/>
			<ol class="breadcrumb">
				<li><a href="#" class="active"><strong>Learning Path</strong></a></li>
			</ol>
		</div>

		<!-- PATH CARDS -->
		<div class="row">
			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
				<div id="python-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Python</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Python Related Libraries And Technologies
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="pythonpath.php#learning-path">
				      	Learn Python
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-0 col-sm-offset-1">
				<div id="java-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Java</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Java
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="javapath.php#learning-path">
				      	Learn Java
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
				<div id="net-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">.NET Framework</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn .NET Related Libraries And Technologies
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="netpath.php#learning-path">
				      	Learn .NET
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-0 col-sm-offset-1">
				<div id="web-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Web Development</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Front/Back End Web Development
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="webpath.php#learning-path">
				      	Learn Web Development
				    	</a>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
				<div id="sql-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">SQL</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn SQL,MySQL,SQLite
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="sqlpath.php#learning-path">
				      	Learn SQL
				    	</a>
					</div>
				</div>
			</div>
		
			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-0 col-sm-offset-1">
				<div id="android-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">Android</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Android
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="androidpath.php#learning-path">
				      	Learn Android
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
				<div id="cplusplus-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text">C/C++</h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn C/C++
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="cpath.php#learning-path">
				      	Learn C++
				    	</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-5 col-sm-5 col-lg-offset-0 col-md-offset-0 col-sm-offset-1">
				<div id="programming-path" class="square-card mdl-card mdl-shadow--2dp">
				  	<div class="mdl-card__title mdl-card--expand">		  		
				    	<h2 class="mdl-card__title-text"></h2>
				  	</div>
				  	<div class="mdl-card__supporting-text">
				    	Learn Programming Languages
				  	</div>
				  	<div class="mdl-card__actions mdl-card--border">
				    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="programmingpath.php#learning-path">
				      	Learn Programming Languages
				    	</a>
					</div>
				</div>
			</div>
		</div>
	</main>

	
	<footer>
		<!-- FOOTER SECTION -->
		<?php include $mainDir.'inc/footer.inc.php' ?>
	</footer>
</body>


</html>