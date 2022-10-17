<?php

$host ="localhost";
$dbname ="annuaire";
$user="root";
$password="";

try{
    $newBD= new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    print "Connexion etablie";
}
catch(PDOException $e){
    die('Erreur :'.$e->getMessage());
}


if  (isset($_POST['nom'])&&
    isset($_POST['prenom'])&&
    isset($_POST['mail'])&&
    isset($_POST['filiere'])&&
    isset($_POST['Annee'])&&
    isset($_POST['ville'])&&
    isset($_POST['adresse'])&&
    isset($_POST['region'])
    ){
    $insertion=$newBD->prepare('INSERT INTO eleve(Nom,Prenom,Mail,filiere,Annee,Ville,Adresse,Region) VALUES(:Nom,:Prenom,:Mail,:filiere,:Annee,:Ville,:Adresse,:Region)');
    $insertion->bindValue(':Nom',$_POST['nom']);
    $insertion->bindValue(':Prenom',$_POST['prenom']);
    $insertion->bindValue(':Mail',$_POST['mail']);
    $insertion->bindValue(':filiere',$_POST['filiere']);
    $insertion->bindValue(':Annee',$_POST['Annee']);
    $insertion->bindValue(':Ville',$_POST['ville']);
    $insertion->bindValue(':Adresse',$_POST['adresse']);
    $insertion->bindValue(':Region',$_POST['region']);
    $verification=$insertion->execute();
    if ($verification) {
        print "<br>Données Envoyé !";
    }
    else{
        print "Echec d'envoi";
    }
    
}
 
header("location:../html/index.html");

