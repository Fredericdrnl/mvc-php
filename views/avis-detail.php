<?php 
    $title = 'Avis';
    $content = "<div class='container'><h3> Voici la table avis</h3>";
    $content .="<div class ='tab'><br><table class ='avis'>
        <tr>
            <th><a href = 'http://localhost/php/semestre4/tp1/index.php?controller=avis-detail'>id</a></th>
            <th><a href = 'http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=departement'>departement</a></th>
            <th><a href ='http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=promo'>promo</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=module'>module</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=note'>note</a></th>
            <th><a href= 'http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=commentaire'>commentaire</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=etudiant'>etudiant</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-detail&tri=datecomm'>datecomm</a></th>
        </tr>";

    for ($i = 0; $i < sizeof($avis); $i++){
        $content .= "<tr>";
        for ($j = 0; $j < sizeof($avis[$i])/2; $j++){
            $data = $avis[$i][$j];
            $content .= "<th>$data</th>";
        }
        $content .= "</tr>";
    }
    $content .= "</div></div>";
    $content .= "<a class ='link' href='http://localhost/php/semestre4/tp1/index.php?controller=avis-lister'>Back</a>";

    require "./views/gabarit.php";
?>