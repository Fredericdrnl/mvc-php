<?php
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        var_dump("GET");
        include "views/avis-ajouter.php"; 
    } elseif($_SERVER['REQUEST_METHOD'] === "POST"){
        foreach($_POST as $key => $value) {
            if(!isset($value)){
                $ERROR = 2;               
                include "views/error.php";
                return;
            }
        }
        require("models/avis-ajouter.php");
        $req = add_avis($_POST['departement'], $_POST['promo'], $_POST['module'], $_POST['note'], $_POST['commentaire'], $_POST['etudiant']);
        if($req == 0){
            var_dump("POST");
            require("views/avis-lister.php");
        }
    }
?>