

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
$user = "root";
$pass = "";
try {

    $dbb = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    foreach ($dbb->query('SELECT * FROM `eleve`') as $row) {
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

    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    foreach ($dbh->query('SELECT * FROM `eleve`') as $row) {
        $row = array_map("utf8_encode", $row);

        $Nom = $row['nom'];
        $Prenom = $row['prenom'];
        $Mail = $row['mail'];
        $filiere = $row['filiere'];
        $Annee = $row['Annee'];
        $Ville = $row['ville'];
        $Adresse = $row['adresse'];
        $Region = $row['region'];


        echo "<tr> 
        
        <td>$Nom</td>
        <td>$Prenom</td>
        <td>$Mail</td>
        <td>$filiere</td>
        <td>$Annee</td>
        <td>$Ville</td>
        <td>$Adresse</td>
        <td>$Region</td>
        ";
    }

    $dbh = null;

}
catch(PDOException $e){
    die('Erreur :'.$e->getMessage());
}
?>
</table>
