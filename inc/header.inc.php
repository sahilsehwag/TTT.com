<div class="jumbotron first-layer">
	<nav class="container-fluid">
		<ul>
			<!-- <a href=<?php echo $mainDir."index.php"; ?> class=""><li class="hvr-underline-from-center col-lg-1 logo">Home</li></a> -->
			<a href=<?php echo $mainDir."index.php"; ?>><li class="hvr-underline-from-center col-lg-1 col-lg-offset-5">Home</li></a>
			<a href=<?php echo $mainDir."paths/"; ?>><li class="hvr-underline-from-center col-lg-1">Tutorials</li></a>
			<a href=<?php echo $mainDir."services/"; ?>><li class="hvr-underline-from-center col-lg-1">Tools</li></a>
			<a href=<?php echo $mainDir."torrents/"; ?>><li class="hvr-underline-from-center col-lg-1">Torrents</li></a>
			<a href=<?php echo $mainDir."about.php"; ?>><li class="hvr-underline-from-center col-lg-1">About</li></a>
			<a href=<?php echo $mainDir."login/login.php"; ?>><li class="hvr-underline-from-center col-lg-1">Log In</li></a>
			<a href=<?php echo $mainDir."login/register.php"; ?>><li class="hvr-underline-from-center col-lg-1 register">Register</li></a>
		</ul>
	</nav>
	<h1 class="title"><?php echo $leftUpper?> <span><?php echo $primUpper?> </span><br/>
		<small><?php echo $leftLower?><span><?php echo $primLower?> </span></small>
	</h1>
	<div class="form-group input-group input-group-lg">
		<input type="text" class="form-control" placeholder=<?php echo $placeholder?>/>
		<span class="input-group-addon"><a href="#"><span class="glyphicon glyphicon-search"></span></a></span>
	</div><br/>
</div>