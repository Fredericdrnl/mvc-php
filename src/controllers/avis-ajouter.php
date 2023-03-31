<?php
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        include "views/avis-ajouter.php"; 
    } elseif($_SERVER['REQUEST_METHOD'] === "POST"){
        foreach($_POST as $key => $value) {
            if(strlen($value) == 0){
                $ERROR = 4;
                require "views/error.php";
                return;
            }
        }
        require "models/avis-ajouter.php";
        $req = add_avis($_POST['departement'], $_POST['promo'], $_POST['module'], $_POST['note'], $_POST['etudiant'], $_POST['commentaire']);
        if($req === 0){
            header("Location: index.php?controller=avis-lister");
        }
    }
?>


