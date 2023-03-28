<?php
    require('path.php');

    $title = 'Ajout avis';

    $content = "<form class ='container' action='index.php?controller=avis-ajouter' method='POST'>";
    $content .="<h3>Département</h3>";
    $content .="<input type='text' placeholder='Département' class='text' name='departement'>";

    $content .="<h3>Promo</h3>";
    $content .="<input type='text' placeholder='Promo' class='text' name='promo'>";

    $content .="<h3>Module</h3>";
    $content .="<input type='text' placeholder='Module' class='text' name='module'>";

    $content .="<h3>Note</h3>";
    $content .="<input type='text' placeholder='Note' class='text' name='note'>";

    $content .="<h3>Commentaire</h3>";
    $content .="<input  class = 'commentaire' type='text' placeholder='Commentaire' class='text' name='commentaire'>";
    
    $content .="<p><input class='button-ajouter' type='submit' value='Ajouter'></p>";

    $content .="</form>";

    $content .="<a href='" . $path .  "avis-lister'><input class='button-ajouter' value='Retour'></p>";

    require("gabarit.php");