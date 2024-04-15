
<?php include_once("Header.php");?>

<?php
	$server="localhost";
	$utilisateur="brice";
	$mdp="123456";
	$db="db_pharmacie";
		$connection=new mysqli($server,$utilisateur,$mdp,$db) or die("Tsy nety lty aa");	
	//String keyword = (String) request.getParameter("motCle");

	 $currentPage = 2;
	$noOfPages = 2;
	$medocs = $connection->query("SELECT * from medicaments");
	
?>

<div class="title">
	<h2 id="heading2">Gestion des m�dicaments</h2>
	<!--<form action="rechercherMedicament?motCle=<%=keyword%>" method="get"
		class="form-group pull-right">
		<label for="motCle" class="sr-only">Mot cl�</label> <input
			class="searchbox" type="text" name="motCle" id="motCle"
						placeholder="Rechercher par mot cl�" />
		<button type="submit" class="btn btn-sm btn-success">Chercher</button>
	</form>-->
</div>

<p></p>
<div>

	<table class="table table-striped table-bordered">
		<tr>
			<th class="centered">Id</th>
			<th class="centered">Code Barre</th>
			<th class="centered">Nom</th>
			<th class="centered">Prix en Ariary</th>
			<th class="centered">Quantit�</th>
			<th class="centered">Editer</th>
		</tr>

		<?php
			
			while($line=mysqli_fetch_assoc($medocs)){
		?>

		<tr>
			<td class="sized centered"><?php echo $line['idMedicament']  ?></td>
			<td class="sized centered"><?php echo $line['codeBarre'] ;?></td>
			<td class="sized centered"><?php echo $line['prix'] ;?></td>
			<td class="sized centered"><?php echo $line['nom'];?></td>
			<td class="sized centered"><?php echo $line['quantite'];?></td>
			<td class="sized centered"><a
				href="editMedoc.php?id=<?php echo $line['idMedicament']?>"
				class="btn btn-sm btn-primary">Modifier</a></td>
		</tr>


		<?php
			}
		?>

	</table>
	<div class="centered">
		

	</div>

	<div class="centered add">
		<a href="addMedocForm.php" type="button"
			class="btn btn-sm btn-success"><span
			class="glyphicon glyphicon-plus"></span> Ajouter un medicament</a>
	</div>
</div>
