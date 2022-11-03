<html>
<link  href="../css/style.css" rel="stylesheet">
</html>

<?php

include "database.php";

if  (isset($_POST['nom'])&&
    isset($_POST['prenom'])&&
    isset($_POST['mail'])&&
    isset($_POST['filiere'])&&
    isset($_POST['Annee'])&&
    isset($_POST['ville'])&&
    isset($_POST['adresse'])&&
    isset($_POST['region'])
    ){
    $insertion=$newBD->prepare('INSERT INTO eleve(Nom,Prenom,Mail,filiere,Annee,Ville,Adresse,Region) VALUES(:Nom,:Prenom,:Mail,:filiere,:Annee,:ville,:adresse,:region)');

   

    $insertion->bindValue(':Nom',$_POST['nom']);
    $insertion->bindValue(':Prenom',$_POST['prenom']);
    $insertion->bindValue(':Mail',$_POST['mail']);
    $insertion->bindValue(':filiere',$_POST['filiere']);
    $insertion->bindValue(':Annee',$_POST['Annee']);
    $insertion->bindValue(':ville',$_POST['ville']);
    $insertion->bindValue(':adresse',$_POST['adresse']);
    $insertion->bindValue(':region',$_POST['region']);
    $insertion->execute();
}
 
header("location:../html/index.html");

