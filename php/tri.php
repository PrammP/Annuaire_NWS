<?php 

include "database.php";
include "Admin.php";

$tri = "SELECT * from `eleve`";
if(isset($_GET['s']) AND !empty($_GET['s'])){
$recherche = htmlspecialchars($_GET['s']);
$tri = $newBD->query('SELECT Nom from `eleve` WHERE Nom LIKE "%'.$recherche.'%" ORDER BY eleve_id DESC');
}


