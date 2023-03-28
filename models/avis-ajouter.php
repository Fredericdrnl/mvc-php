<?php
    function add_avis($departement, $promo, $module, $note, $commentaire, $etudiant, $datecomm){
        require("connect-db.php");
        $bdd = connect();
        try {
            $db->query('INSERT INTO avis(departement, promo, module, note, commentaire, etudiant, datecomm) VALUES (' . $departement . ',' . $promo . ',' . $module . ',' . $note . ',' . $commentaire . ',' . $etudiant . ',' . $datecomm . ');');
            return 0;
        } catch(PDOException $e) {
            return 4;
        }
    }
?>