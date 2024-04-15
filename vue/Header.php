
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHARMLG</title>
<link type="text/css" href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="../assets/css/styles.css" rel="stylesheet">
</head>

<?php $username ="username"; ?>

<body style="padding-top: 60px;">

	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top"
		style="margin-bottom: 40px;">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Index.php">PHAR<strong>MLG</strong></a>
			</div>
			<?php if($username != null) { ?>
			<div id="navbar-collapse" class="navbar-collapse collapse">
				<?
				
				?>
		

				<ul class="nav navbar-nav navbar-right">
					

					<li><a href="Index.php">Deconnexion</a></li>
				</ul>
				
				<?php } else { ?>
				
				<ul class="nav navbar-nav navbar-right">
					<!--  <li><a href="/index">Connexion</a></li>-->

					<li><a href="#">Inscription</a></li>
				</ul>
				<?php } ?>
			</div>

		</div>

	</nav>
	<div class="container">