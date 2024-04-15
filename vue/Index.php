
<?php
session_start(); 
include_once("Header.php");
 ?>

 <?php
	$alertMessage =$_SESSION['alert'];
?>
<div class="container">
	<h1>PHARMACIE MANAGEMENT</h1>
	<p class="lead">Connectez-vous</p>
	<?php
		if ($alertMessage == "erreur") {
	?>
	<div class='alert alert-danger'>
		Email et/ou mot de passe incorrect
		<button type='button' class='close' aria-label='Close'
			data-dismiss='alert'>
			<span aria-hidden='true'>&times; </span>
		</button>
	</div>
	
	<?php } else if($alertMessage == " ") { ?>
		<div class='alert alert-danger'>
		Veuillez entrez votre email et/ou mot de passe
		<button type='button' class='close' aria-label='Close'
			data-dismiss='alert'>
			<span aria-hidden='true'>&times; </span>
		</button>
	</div>
	<?php } ?>
	<form class="form-inline" action="../controller/control.php" method="post">

		<div class="form-group">
			<label for="login-username" class="sr-only">Email</label> <input
				type="text" class="form-control" id="login-email" name="email"
				placeholder="Email" value="">
		</div>
		<div class="form-group">
			<label for="login-passowrd" class="sr-only">Password</label> <input
				type="password" class="form-control" id="login-password"
				name="password" placeholder="Password">
		</div>

		<button type="submit" class="btn btn-primary" name="login">Connexion</button>
		<a href="#" type="button" class="btn btn-danger">Inscrivez-vous</a>

	</form>
</div>


	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html> 