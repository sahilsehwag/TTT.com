<!DOCTYPE html>
<html>

<!-- HEAD SECTION -->
<head>
	<?php
		include 'variables.inc.php';
		include $mainDir.'inc/head.inc.php';
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo $mainDir.'css/tools.css';?>>
</head>

<body>
	<header class="tools">
		<!-- HEADER SECTION -->
		<?php include $mainDir.'inc/header.inc.php'; ?>
	</header>

	<!-- MAIN CONTENT -->
	<main class="container-fluid tool">		
		<div class="row">
		
			<div class="index col-lg-3">
				<div class="">
					<h3>Tools Categories</h3>
					<hr/>
					<a class="index-item">
						<input type="checkbox" class="index-item-check"/> Converters
					</a>
					<a class="index-item">
						<input type="checkbox" class="index-item-check"/> Downloaders
					</a>
					<a class="index-item">
						<input type="checkbox" class="index-item-check"/> Calculators
					</a>
					<a class="index-item">
						<input type="checkbox" class="index-item-check"/> Generators			
					</a>
					<a class="index-item">
						<input type="checkbox" class="index-item-check"/> Miscellanous
					</a>		
				</div>
			</div>

			<div class="content col-lg-12">
				
			</div>
		</div>
	</main>

	
	<footer>
		<!-- FOOTER SECTION -->
		<?php include $mainDir.'inc/footer.inc.php' ?>
	</footer>
</body>


</html>