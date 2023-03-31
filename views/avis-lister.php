<?php
    require('path.php');

    $title = 'Avis';
    $content = "<div class='container'><h3 class = 'title'> Voici la table avis</h3>";
    $content .="<div class ='tab'><br><table class ='avis'>
        <tr>
            <th><a href ='" . $path . "avis-lister&max=" . $max . "&offset=" . $offset ."'>id</a></th>
            <th><a href ='" . $path . "avis-lister&tri=departement&max=" . $max . "&offset=" . $offset ."'>departement</a></th>
            <th><a href ='" . $path . "avis-lister&tri=promo&max=" . $max . "&offset=" . $offset ."'>promo</a></th>
            <th><a href ='" . $path . "avis-lister&tri=module&max=" . $max . "&offset=" . $offset ."'>module</a></th>
            <th><a href ='" . $path . "avis-lister&tri=note&max=" . $max . "&offset=" . $offset ."'>note</a></th>
            <th><a href ='" . $path . "avis-lister&tri=commentaire&max=" . $max . "&offset=" . $offset ."'>commentaire</a></th>
            <th><a href ='" . $path . "avis-lister&tri=etudiant&max=" . $max . "&offset=" . $offset ."'>etudiant</a></th>
            <th><a href ='" . $path . "avis-lister&tri=datecomm&max=" . $max . "&offset=" . $offset ."'>datecomm</a></th>
        </tr>";
    for ($i = 0; $i < sizeof($avis); $i++){
        $content .= "<tr>";
        for ($j = 0; $j < sizeof($avis[$i])/2; $j++){
            $data = $avis[$i][$j];
            $content .= "<th>$data</th>";
        }
        $content .= "</tr>";
    }
    $content .= "</div></div><div class = 'param'><a class='link' href='" . $path . "avis-detail'>Voir plus</a>";

    $content .= "<ul class='nav'><a class = 'precedent' href='" .  $path . "avis-lister&max=" . $max . "&offset=" . $precedent ."'>Precedent</a>";
    
    $content .= "<a class = 'suivant' href ='" . $path . "avis-lister&max=" . $max . "&offset=" . $suivant ."'>Suivant</a></ul>";
    
    $content .= "<div class = 'max'><form method='POST' action='index.php?controller=avis-lister&max=" . $max . "&offset=" . $offset ."'><input type='text' placeholder='Max' class='text' name='max'><a href='" . $path . "avis-lister&max=" . $max . "&offset=" . $offset ."'><input class='button' type='submit' value='changer' name='changer'></a></form></div>";

    $content .= "<p>Département</p><form method='POST' action='index.php?controller=avis-lister&max=" . $max . "&offset=" . $offset ."'><select name='departement' class='select'><option value='' name=''></option><option value='INFO' name='INFO'>INFO</option><option value='GEA' name='GEA'>GEA</option></select>";
    $content .= "<p>Module</p><form method='POST' action='index.php?controller=avis-lister&max=" . $max . "&offset=" . $offset ."'><select name='module' class='select'><option value=''></option><option value='C++'>C++</option><option value='DROIT'>DROIT</option><option value='elexir' name='elexir'>elexir</option><option value='Finance' name='Finance'>Finance</option><option value='Mathématiques' name='Mathématiques'>Mathématiques</option><option value='PHP' name='PHP'>PHP</option></select> <input class='button' type='submit' value='changer' name='changer'></form>";

    $content .= "<a class='ajouter' href='" . $path . "avis-ajouter'>Ajouter</a></div>";
    
    require "./views/gabarit.php";
?>  