<!DOCTYPE html>
<html>

<!-- HEAD SECTION -->
<head>
	<?php
		include 'variables.inc.php';
		include $mainDir.'inc/head.inc.php'; 
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo $mainDir.'css/torrents.css';?>>	
</head>

<body>
	<header class="torrents">
		<!-- HEADER SECTION -->
		<?php include $mainDir.'inc/header.inc.php'; ?>
	</header>

	<!-- MAIN CONTENT -->
	<main class="container-fluid torrent">
		<div class="row">
			<div class="index col-lg-3">
				<div class="">
					<h3>Torrent Categories</h3>
					<hr/>				
					<li class="coll">				
						<a class="index-item">					
							<span class="glyphicon glyphicon-triangle-right"></span>
							<input type="checkbox" class="index-item-check"/> Games					
						</a>
						<ul class="sub-items">
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Rgmechanics</li>
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Steam</li>
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Gamer</li>
						</ul>
					</li>
					<li class="coll">
						<a class="index-item">
							<span class="glyphicon glyphicon-triangle-right"></span>
							 <input type="checkbox" class="index-item-check"/> Movies					
						</a>
						<ul class="sub-items">
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Yify</li>
							<li class="index-item"><input type="checkbox" class="index-item-check"/> NEEE</li>					
						</ul>
					</li>
					<li class="coll">
						<a class="index-item">
							<span class="glyphicon glyphicon-triangle-right"></span>
							 <input type="checkbox" class="index-item-check"/> Animes					
						</a>
						<ul class="sub-items">
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Anime-Rg</li>
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Sweety</li>
							<li class="index-item"><input type="checkbox" class="index-item-check"/> Animer</li>
						</ul>
					</li>		
				</div>
			</div>
			<div class="content col-lg-9">
				
				<div class="row tor-tbl">
		<!-- 			<div class="col-lg-12 torrent">
						<div class="row">
							<div class="col-lg-4">Deadpool[Yify] 2015</div>
							<div class="seeds col-lg-1 col-lg-offset-3">100</div>
							<div class="peers col-lg-1">5</div>
							<div class="leechers col-lg-1">15</div>
							<a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a>
							<a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a>
						</div>
					</div>
					<div class="col-lg-12 torrent">
						<div class="row">
							<div class="col-lg-4">Naruto Shippuden-453[720][SUB][Anime-RG] 2015</div>
							<div class="seeds col-lg-1 col-lg-offset-3">100</div>
							<div class="peers col-lg-1">5</div>
							<div class="leechers col-lg-1">15</div>
							<a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a>
							<a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a>
						</div>
					</div>
					<div class="col-lg-12 torrent">
						<div class="row">
							<div class="col-lg-4">Deadpool[Yify] 2015</div>
							<div class="seeds col-lg-1 col-lg-offset-3">100</div>
							<div class="peers col-lg-1">5</div>
							<div class="leechers col-lg-1">15</div>
							<a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a>
							<a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a>
						</div>
					</div> -->
					<table class="col-lg-12 table-striped table-hover mdl-shadow--2dp">
						<tr>							
							<th>TORRENT NAME</th>
							<th>SEEDS</th>
							<th>SIZE</th>
							<th>LEECHERS</th>
							<th>DOWNLOAD</th>
							<th>MAGNET</th>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Deadpool 2015[YIFY]</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
						<tr>
							<td><a href="#">Naruto Shippuden-423[720p][ANIME-RG]-Naruto's Revenge</a></td>
							<td>1000</td>
							<td>50</td>
							<td>50</td>
							<td><a href="#" class="download" title="Download Torrent"><span class="fa fa-download col-lg-1"></span></a></td>
							<td><a href="#" class="magnet" title="Download Magnet"><span class="fa fa-magnet col-lg-1"></span></a></td>
						</tr>
					</table>
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