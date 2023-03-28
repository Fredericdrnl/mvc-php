<?php
    $path = 'http://localhost/php/semestre4/mvc-php/index.php?controller=';
    require "models/avis-lister.php";

    $offset = 0;
    $max = 10;
    $changmaxlink = "";
  
    if ((isset($_GET['offset'])) && (count_avis() > $_GET['offset'])){
        $offset = $_GET['offset'];
    }

    if (isset($_GET['changer'])) {
        if (!($_GET['max'] == "")){
            var_dump($_GET['max']);
            $max = $_GET['max'];
            $changmaxlink = $path . 'avis-lister&max=' . $max . '&offset=' . $offset;
        }
    } else {
        if (isset($_GET['max'])){
            $max = $_GET['max'];
        }
    }

    $precedent= $offset - $max;
    if ($precedent < 0){
        $precedent = 0;
    }
    $suivant= $max + $offset;
    if ($suivant >= count_avis()[0]){
        $suivant = count_avis()[0] - $max;
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

