

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
    <form method="GET">
<input type="search" id="myInput" name="s" placeholder="Rechercher un nom.." autocomplete="off">

</form>
<?php

include "connect.php"; 
include "delete.php";
include "update.php";


    foreach ($newBD->query('SELECT * FROM `eleve` ') as $row) {
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
        <td>$mail</td>";

        switch ($filiere) {

            case "Developpement Web":
                print "<td><a href='Admin.php?id_fil1=".$id."' id='update'>$filiere</a></td>";
                break;
            case "Communication - Graphique":
                print "<td><a href='Admin.php?id_fil2=".$id."' id='update'>$filiere</a></td>";
                break;
            case "Social Media Management":
                print "<td><a href='Admin.php?id_fil3=".$id."' id='update'>$filiere</a></td>";
                break;
            case "E-Business":
                print "<td><a href='Admin.php?id_fil4=".$id."' id='update'>$filiere</a></td>";
                break;
            case "Ne sais pas":
                print "<td><a href='Admin.php?id_fil5=".$id."' id='update'>$filiere</a></td>";
                break;
        };
        switch ($Annee) {

            case "1":
                print "<td><a href='Admin.php?id_annee1=".$id."' id='update'>$Annee</a></td>";
                break;
            case "2":
                print "<td><a href='Admin.php?id_annee2=".$id."' id='update'>$Annee</a></td>";
                break;
            case "3":
                print "<td><a href='Admin.php?id_annee3=".$id."' id='update'>$Annee</a></td>";
                break;
        }
         print "
        <td>$ville</td>
        <td>$adresse</td>F
        <td>$region</td>
        <td><a href='Admin.php?id_supp=".$id."' id='delete'>Supprimer</a></td>"
        ;
    }
    

 $dbb = null;

 $tri = "SELECT * from `eleve`";
 if(isset($_GET['s']) AND !empty($_GET['s'])){
 $recherche = htmlspecialchars($_GET['s']);
 $tri = $newBD->query('SELECT * from `eleve` WHERE Prenom LIKE "%'.$recherche.'%" ORDER BY eleve_id DESC');
 print 

 "
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
        <td><a href='Admin.php?id_edit=".$id."' id='update'>Editer</a> </td>";

 }
?>
</table>
<button class="ReturnAnnu"> 
<a href="../html/Index.html"><strong>Retour au formulaire</strong></a>
</button>

