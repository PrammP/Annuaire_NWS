

<h1 class=h1>Dashboard Admin</h1>
<table>
    <tr>


        <td><strong>Nom</strong></td>
        <td><strong>Prénom</strong></td>
        <td><strong>Message</strong></td>
        <td><strong>Sujet</strong></td>
        <td><strong>Mail</strong></td>
    </tr>

<?php
$user = "root";
$pass = "";
try {
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
