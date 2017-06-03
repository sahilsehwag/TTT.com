<!DOCTYPE html>
<html>

<head>
	<?php 
		include 'variables.inc.php';
		include $mainDir.'inc/head.inc.php';		
	?>
</head>


<body>
	<header class="paths">
		<?php include $mainDir.'inc/header.inc.php';?>
	</header>

	<main class="container">

		<h2 id="learning-path">Learning Path</h2>
		<hr/>
		<ol class="breadcrumb">
			<li><a href="../../index.html#learning-path">Home</a></li>
			<li><a href="../paths/sqlpath.html#learning-path">SQL</a></li>
			<li><a href="#learning-path" class="active"><strong>Standard SQL Tutorials</strong></a></li>
		</ol>

		<div class="row">
			<?php include '../inc/index.inc.php';?>

			<div class="tutorial col-lg-9">
				<h1>Main Heading</h1>
				<hr/>
				<blockquote>Blockquote</blockquote>
				<div class="tutorial-content">
					<h3>Sub-Heading</h3>
					<ol>SQL
						<li>DDL</li>							
						<li>DML</li>
						<li>DCL</li>
						<li>TCL</li>
					</ol>
					<br/>
					<h3>Sub-Heading</h3>
					<p>This Is Come Content</p>
					<br/>
					<h3>Sub-Heading</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
					</p>
										
					<code>
						<h5>
							SELECT <var>USERNAME</var>, <var>PASSWORD</var> FROM USERS WHERE USERNAME='JAAT' AND PASSWORD='JAAT';	
						</h5>
					</code>

					<h3>Sub-Heading</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
					</p>

					<h3>Sub-Heading</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
					</p>

					<h3>Sub-Heading</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
					</p>

					<h3>Sub-Heading</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
					</p>			
				</div>
			</div>			
		</div>

	</main>

	<footer>
		<?php include $mainDir.'inc/footer.inc.php';?>
	</footer>
	
</body>


</html>