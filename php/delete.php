<?php
include "database.php";

if(isset($_GET['id_supp'])){
    $idi=$_GET['id_supp'];
    $datasupp="DELETE FROM eleve WHERE eleve_id = $idi";
    $newBD->prepare($datasupp)->execute(); 
    header("Location:Admin.php");
}
    