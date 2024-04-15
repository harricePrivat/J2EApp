
<?php include_once("Header.php");?>
<?php
	 $alertMessage = "succes";
?>

<h1>Ajout d'un m�dicament</h1>

<?php
	if ($alertMessage == "success") {
?>
<div class='alert alert-success'>
	Medicament ajout� avec succ�s!
	<button type='button' class='close' aria-label='Close'
		data-dismiss='alert'>
		<span aria-hidden='true'>&times;</span>
	</button>
</div>
<?php
	}
?>
<?php
	if ($alertMessage == "erreur") {
?>

<div class='alert alert-danger'>
	Merci de remplir ce formulaire
	<button type='button' class='close' aria-label='Close'
		data-dismiss='alert'>
		<span aria-hidden='true'>&times; </span>
	</button>
</div>

<?php
	}
?>
<form action="../controller/ajout.php" method="post" class="row">
	<div class="form-group col-sm-6">
		<label for="code">Code Barre *</label> <input type="text"
			class="form-control input-lg" id="code" name="codeBarre">
	</div>
	<div class="form-group col-sm-6">
		<label for="prix">Prix *</label> <input type="text"
			class="form-control input-lg" id="prix" name="prix">
	</div>
	<div class="form-group col-sm-6">
		<label for="nom">Nom</label> <input type="text"
			class="form-control input-lg" id="nom" name="nom" value="">
	</div>
	<div class="form-group col-sm-6">
		<label for="quantite">Quantit�</label> <input type="text"
			class="form-control input-lg" id="quantite" name="quantite">
	</div>

	<div class="form-group col-sm-12">
		<input type="submit" class="btn btn-lg btn-default" name="annuler"
			value="Annuler"> <input type="submit"
			class="btn btn-lg btn-success pull-right" name="ajouter"
			value="Ajouter">
	</div>
</form>




