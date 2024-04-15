<?php include_once("Header.php");?>

<h1>Modification d'un m�dicament</h1>

<?php
	$server="localhost";
	$utilisateur="brice";
	$mdp="123456";
	$db="db_pharmacie";
		$connection=new mysqli($server,$utilisateur,$mdp,$db) or die("Tsy nety lty aa");
	$id=$_GET['id'];
		$result=$connection->query("SELECT * FROM medicaments WHERE idMedicament=$id");
		if($result== null) echo "<H1>Poins</H1>";
		$line=mysqli_fetch_assoc($result);
		$br=null;
		if ($br != null) {
?>


<div class='alert alert-danger'>
	<p>
		�tes-vous s�r de vouloir supprimer ce m�dicament? <br> Cet action
		est irreversible!
	</p>
	<br>

	<form action="supprimerMedicament" method='get'>
		<a type='button'
			href="supprimerMedicament?id=<%=m.getIdMedicament()%>"
			class='btn btn-danger btn-sm'>Oui supprimer</a> <a type='button'
			class='btn btn btn-default btn-sm' data-dismiss='alert'>Oops!
			Non, Merci</a>
	</form>
</div>

<?php
	}
?>

<?php if ($alertMessage == "success") { ?>

<div class='alert alert-success'>
	Medicament ajout� avec succ�s.
	<button type='button' class='close' aria-label='Close'
		data-dismiss='alert'>
		<span aria-hidden='true'>&times;</span>
	</button>
</div>

<?php } ?>

<form action="accueil.php" method="post" class="row" name="editer">
	<div class="form-group col-md-12">
		<label for="code">ID</label> <input type="text"
			class="form-control input-lg" id="id" name="id"
			value="<?php echo $line['idMedicament']?>" readonly>
	</div>
	<div class="form-group col-sm-6">
		<label for="code">Code Barre *</label> <input type="text"
			class="form-control input-lg" id="code" name="code"
			value="<?php echo $line['codeBarre']?>">
	</div>
	<div class="form-group col-sm-6">
		<label for="prix">Prix *</label> <input type="text"
			class="form-control input-lg" id="prix" name="prix"
			value="<?php echo $line['prix']?>">
	</div>
	<div class="form-group col-sm-6">
		<label for="nom">Nom</label> <input type="text"
			class="form-control input-lg" id="nom" name="nom"
			value="<?php echo $line['nom']?>">
	</div>
	<div class="form-group col-sm-6">
		<label for="quantite">Quantit�</label> <input type="text"
			class="form-control input-lg" id="quantite" name="quantite"
			value="<?php echo $line['quantite']?>">
	</div>

	<div class="form-group col-sm-12">
		<hr>
		<input type="submit" name="supprimer" value="Supprimer"
			class="btn btn-lg btn-danger pull-left">

		<div class="pull-right">
			<input type="submit" name="annuler" class="btn btn-lg btn-default"
				value="Annuler"> <input type="submit"
				class="btn btn-lg btn-success" name="modifier" value="Modifier">
		</div>
	</div>
</form>

