<?php

$host ='localhost';
$dbname ='annuaire';
$user='root';
$pwd='';

    try{
        $newBD= new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
        
    }
    catch(PDOException $e){
        die('Erreur :'.$e->getMessage());
    }