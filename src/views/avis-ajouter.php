<?php
    require('path.php');

    $title = 'Ajout avis';

    $content = "<form class ='container' action='' method='post'>";
    $content .="<h3>Département</h3>";
    $content .="<input type='text' placeholder='Département' id='departement' class='text' name='departement'>";

    $content .="<h3>Promo</h3>";
    $content .="<input type='text' placeholder='Promo' id='promo' class='text' name='promo'>";

    $content .="<h3>Module</h3>";
    $content .="<input type='text' placeholder='Module' id='module' class='text' name='module'>";

    $content .="<h3>Note</h3>";
    $content .="<input type='text' placeholder='Note' id='note' class='text' name='note'>";

    $content .="<h3>Etudiant</h3>";
    $content .="<input type='text' placeholder='etudiant' id='etudiant' class='text' name='etudiant'>";

    $content .="<h3>Commentaire</h3>";
    $content .="<input  class = 'commentaire' type='text' id='commentaire' placeholder='Commentaire' class='text' name='commentaire'>";
    
    $content .="<p><input class='button-ajouter' type='submit' value='Ajouter'></p>";

    $content .="</form>";

    $content .="<a href='" . $path .  "avis-lister'><input class='button-ajouter' value='Retour'></p>";

    require("gabarit.php");