<?php 
include "database.php";

class Eleve {

    $id = $row['eleve_id'];
    $nom = $row['Nom'];
    $prenom = $row['Prenom'];
    $mail = $row['Mail'];
    $filiere = $row['filiere'];
    $Annee = $row['Annee'];
    $ville = $row['Ville'];
    $adresse = $row['Adresse'];
    $region = $row['Region'];

}