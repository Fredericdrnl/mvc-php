<?php
    require "models/avis-lister.php";

    $offset = 0;
    $max = 10;
    $departement = "";
    $module = "";
    $changmaxlink = "";
  
    if ((isset($_GET['offset'])) && (count_avis() > $_GET['offset'])){
        $offset = $_GET['offset'];
    }

    if (isset($_POST['max'])){
        $max = $_POST['max'];
    } else if (isset($_GET['max'])) {
        $max = $_GET['max'];
    }

    $precedent= $offset - $max;
    if ($precedent < 0){
        $precedent = 0;
    }
    $suivant= $max + $offset;
    if ($suivant >= count_avis()[0]){
        $suivant = count_avis()[0] - $max;
    }

    if (isset($_POST['departement'])){
        $departement = $_POST['departement'];
        $module = $_POST['module'];
    }
    if (isset($_GET['tri'])){ 
        $avis = get_avis($_GET['tri'], $max, $offset, $departement, $module);
    } else {
        $avis = get_avis('id', $max, $offset, $departement, $module);
    }

    if ($ERROR == 0){
        require "views/avis-lister.php";
    } else {
        require "controllers/error.php";
    }
?>  

