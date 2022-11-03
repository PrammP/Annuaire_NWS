<?php

include "database.php";

if(isset($_GET['id_annee1'])){
    $ID=$_GET['id_annee1'];
    $UP="UPDATE eleve SET Annee = '2' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
} 

if(isset($_GET['id_annee2'])){
    $ID=$_GET['id_annee2'];
    $UP="UPDATE eleve SET Annee = '3' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
}

if(isset($_GET['id_annee3'])){
    $ID=$_GET['id_annee3'];
    $UP="UPDATE eleve SET Annee = '1' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
    
}


if(isset($_GET['id_fil1'])){
    $ID=$_GET['id_fil1'];
    $UP="UPDATE eleve SET filiere = 'Communication - Graphique' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
} 

if(isset($_GET['id_fil2'])){
    $ID=$_GET['id_fil2'];
    $UP="UPDATE eleve SET filiere = 'Social Media Management' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
}

if(isset($_GET['id_fil3'])){
    $ID=$_GET['id_fil3'];
    $UP="UPDATE eleve SET filiere = 'E-Business' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
    
}
if(isset($_GET['id_fil5'])){
    $ID=$_GET['id_fil5'];
    $UP="UPDATE eleve SET filiere = 'Developpement Web' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
    
}
if(isset($_GET['id_fil4'])){
    $ID=$_GET['id_fil4'];
    $UP="UPDATE eleve SET filiere = 'Ne sais pas' WHERE eleve_id = $ID";
    $newBD->prepare($UP)->execute(); 
    header("Location:Admin.php");
    
}

