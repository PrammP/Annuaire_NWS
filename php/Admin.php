

<h1 class=h1>Liste Eleve</h1>
<link  href="../css/style.css" rel="stylesheet">
<table id="myTable">
    <tr>

    
        <td><strong>Nom</strong></td>
        <td><strong>Prénom</strong></td>
        <td><strong>Mail</strong></td>
        <td><strong>Filiere</strong></td>
        <td><strong>Annee</strong></td>
        <td><strong>Ville</strong></td>
        <td><strong>Adresse</strong></td>
        <td><strong>Region</strong></td>
        </div>
    </tr>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher un nom..">
<?php

include "connect.php"; 
include "delete.php";
include "update.php";

    foreach ($newBD->query('SELECT * FROM `eleve`') as $row) {
        $row = array_map("utf8_encode", $row);

        $id = $row['eleve_id'];
        $nom = $row['Nom'];
        $prenom = $row['Prenom'];
        $mail = $row['Mail'];
        $filiere = $row['filiere'];
        $Annee = $row['Annee'];
        $ville = $row['Ville'];
        $adresse = $row['Adresse'];
        $region = $row['Region'];


        print "
        <tr> 
        
        <td>$nom</td>
        <td>$prenom</td>
        <td>$mail</td>
        <td>$filiere</td>
        <td>$Annee</td>
        <td>$ville</td>
        <td>$adresse</td>
        <td>$region</td>
        <td><a href='Admin.php?id_supp=".$id."' id='delete'>Supprimer</a></td>
        <td><a href='Admin.php?id_edit=".$id."' id='update'>Editer</a> </td>"
        ;
    }
    
    

 $dbb = null;


?>
</table>
<button> 
<a href="../html/Index.html">Retour au formulaire</a>
</button>

