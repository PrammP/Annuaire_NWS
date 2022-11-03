<?php
include "database.php";

if(isset($_GET['id_supp'])){
    $ID=$_GET['id_supp'];
    $datasupp="DELETE FROM eleve WHERE eleve_id = $ID";
    $newBD->prepare($datasupp)->execute(); 
}
    