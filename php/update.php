<?php

function Update ($prenom, $nom, $mail, $ID)
{
$sql = "UPDATE eleve SET Prenom = ?, Nom = ?, Mail = ? WHERE eleve_id= $ID";
$newBD = prepare($sql) -> execute([$prenom, $nom, $mail, $ID]);
}

if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $prenom = $_POST['Prenom'];
        $nom = $_POST['Nom'];
        $mail = $_POST['Mail'];
        

        Update($prenom, $nom, $mail, $ID);
    }