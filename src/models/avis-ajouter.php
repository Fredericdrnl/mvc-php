<?php
    function add_avis($departement, $promo, $module, $note, $etudiant,  $commentaire){
        require("connect-db.php");
        $db = connect();
        try {
            $query = 'INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) VALUES (:departement, :promo, :module, :note, :etudiant, :commentaire);';

            $request = $db->prepare($query);
            $request -> bindValue(':departement', $departement);
            $request -> bindValue(':promo', $promo);
            $request -> bindValue(':module', $module);
            $request -> bindValue(':note', $note);
            $request -> bindValue(':etudiant', $etudiant);
            $request -> bindValue(':commentaire', $commentaire);
            $request->execute();
            return 0;
        } catch(PDOException $e) {
            return 2;
        }
    }
?>