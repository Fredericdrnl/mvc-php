<?php
    $title = 'Avis';
    $content = "<div class='container'><h3> Voici la table avis</h3>";
    $content .="<div class ='tab'><br><table class ='avis'>
        <tr>
            <th><a href = 'http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&max=" . $max . "&offset=" . $offset ."'>id</a></th>
            <th><a href = 'http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=departement&max=" . $max . "&offset=" . $offset ."'>departement</a></th>
            <th><a href ='http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=promo&max=" . $max . "&offset=" . $offset ."'>promo</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=module&max=" . $max . "&offset=" . $offset ."'>module</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=note&max=" . $max . "&offset=" . $offset ."'>note</a></th>
            <th><a href= 'http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=commentaire&max=" . $max . "&offset=" . $offset ."'>commentaire</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=etudiant&max=" . $max . "&offset=" . $offset ."'>etudiant</a></th>
            <th><a href='http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&tri=datecomm&max=" . $max . "&offset=" . $offset ."'>datecomm</a></th>
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
    $content .= "<a class='link' href='http://localhost/php/semestre4/tp1/index.php?controller=avis-detail'>Voir plus</a>";

    // if ($precedent > 0) {
    $content .= "<ul class='nav'><a class = 'precedent' href = 'http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&max=" . $max . "&offset=" . $precedent ."'>Precedent</a>";
    // } else {
    //     $precedent = 0;
    // }
    
    // if ($suivant < count_avis()[0]){
    $content .= "<a class = 'suivant' href = 'http://localhost/php/semestre4/tp1/index.php?controller=avis-lister&max=" . $max . "&offset=" . $suivant ."'>Suivant</a></ul>";
    // } else {
    // $suivant = count_avis()[0] - $max;
    // }
    
    $content .= "<div class = 'max'><input placeholder='Max' class='text'><input class='button' type='button' value='Changer'></div>";

    require "./views/gabarit.php";
?>  