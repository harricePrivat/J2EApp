<?php
    $server="localhost";
	$utilisateur="brice";
	$mdp="123456";
	$db="db_pharmacie";
	$connection=new mysqli($server,$utilisateur,$mdp,$db) or die("Tsy nety lty aa");
$codeBarre=intval($_POST['codeBarre']); 
$prix=intval($_POST['codeBarre']);
$nom=$_POST['nom'];
$quantite=intval($_POST['quantite']);
echo 'test';
    $connection->query("INSERT INTO medicaments(codeBarre,prix,nom,quantite) VALUES($codeBarre,$prix,\"$nom\",$quantite)");
header("Location: ../vue/accueil.php"); 
?>