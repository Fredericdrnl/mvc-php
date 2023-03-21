<?php
    require "models/avis-lister.php";

    $offset = 0;
    $max = 10;
  
    if (isset($_GET['max'])){
        $max = $_GET['max'];
    } 

    if ((isset($_GET['offset'])) && (count_avis() > $_GET['offset'])){
        $offset = $_GET['offset'];
    }

    $precedent= $offset - $max;
    if ($precedent < 0){
        $precedent = 0;
    }
    $suivant= $max + $offset;
    if ($suivant >= count_avis()[0]){
        $suivant = count_avis()[0] - $max;
        // print_r(count_avis());
        // print_r("coucou");
    }
    if (isset($_GET['tri'])){ 
        $avis = get_avis($_GET['tri'], $max, $offset);
    } else {
        $avis = get_avis('id', $max, $offset);
    }

    if ($ERROR == 0){
        require "views/avis-lister.php";
    } else {
        require "controllers/error.php";
    }
?>  

