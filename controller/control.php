<?php
session_start();
$server="localhost";
$utilisateur="brice";
$mdp="123456";
$db="db_pharmacie";
    $connection=new mysqli($server,$utilisateur,$mdp,$db) or die("Tsy nety lty aa");
   // echo 'test';
    $resultQuery=$connection->query("SELECT * FROM utilisateurs");
    if($resultQuery==null) echo 'daika';
    while($resultQuery->fetch_assoc()!=null){
        $line=$resultQuery->fetch_assoc();
        echo $line['password'];
        /*$email= $line['email'];
         $mdp=$line['password'];
        if($_POST['email']==$email && $_POST['password']==$mdp ){
            header("Location: ../vue/accueil.php");
        }*/
    }
        //header("Location: ../vue/Index.php");

 
   /*
    if($mail=="test@test.net" && $password="test" ){
        header("Location: ../vue/accueil.php");
    }
    else{
        $_SESSION['alert']="erreur";
    }
    $connection->close();*/
?>