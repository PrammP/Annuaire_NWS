

<h1 class=h1>Dashboard Admin</h1>
<table>
    <tr>


        <td><strong>Nom</strong></td>
        <td><strong>Prénom</strong></td>
        <td><strong>Mail</strong></td>
        <td><strong>Filiere</strong></td>
        <td><strong>Annee</strong></td>
        <td><strong>Adresse</strong></td>
        <td><strong>Region</strong></td>
        <td><strong>Message</strong></td>
        <td><strong>Sujet</strong></td>
        <td><strong>Mail</strong></td>

    </tr>

<?php
include "connect.php";
    foreach ($newBD->query('SELECT * FROM `eleve`') as $row) {
        $row = array_map("utf8_encode", $row);

        $nom = $row['Nom'];
        $prenom = $row['Prenom'];
        $mail = $row['Mail'];
        $filiere = $row['filiere'];
        $Annee = $row['Annee'];
        $ville = $row['Ville'];
        $adresse = $row['Adresse'];
        $region = $row['Region'];


        print "<tr> 
        
        <td>$nom</td>
        <td>$prenom</td>
        <td>$mail</td>
        <td>$filiere</td>
        <td>$Annee</td>
        <td>$ville</td>
        <td>$adresse</td>
        <td>$region</td>
        ";
    }

 $dbb = null;


?>
</table>
