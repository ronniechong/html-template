<?php

	//Change settings here
	include_once('_assets/lib/settings.php');

	//Default values if metas and titles are not available in local pages
	if (strlen($page_title)<=0){
		$page_title="Default title";
	}

	if (strlen($page_metawords)<=0){
		$page_metawords="Default meta keywords";
	}

	if (strlen($page_metadesc)<=0){
		$page_metadesc="Default meta description";
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$page_title?></title>
		<meta name="keywords" content="<?=$page_metawords?>">
		<meta name="description" content="<?=$page_metadesc?>">
		<link rel="stylesheet" href="_assets/css/default.css">
		<link rel="shortcut icon" href="_assets/images/icons/favicon.ico">
		<?php 
			if ($objSettings -> isMobileResponsive) { 
				echo $objSettings -> strMobileViewport; 
			}
		?>
		<?php 
			//Calls localised scripts if necessary
			scriptheader() 
		?>

		<script src="_assets/js/functions.js"></script>
		<!--[if IE ]>
			<meta http-equiv="Imagetoolbar" content="no">
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="_assets/js/html5.js"></script>
		<![endif]-->
		<!--[if IE 9 ]>
			<meta http-equiv="X-UA-Compatible" content="IE=9">
		<![endif]-->
		
	</head>
	<body>
		<div class="page">
			<header class="page-header">
				<h1>Header</h1>
				<nav class="nav-header">
					<ul>
						<li><a href="#">Header link 1</a></li>
						<li><a href="#">Header link 2</a></li>
						<li><a href="#">Header link 3</a></li>
					</ul>
				</nav>
			</header>
			<div class="page-body">
				<?php 
					//Display content here
					content() 
				?>
			</div>
			<footer class="page-footer">
				<nav class="nav-footer">
					<ul>
						<li><a href="#">Footer link 1</a></li>
						<li><a href="#">Footer link 2</a></li>
						<li><a href="#">Footer link 3</a></li>
					</ul>
				</nav>
			</footer>
		</div>
	</body>
</html>