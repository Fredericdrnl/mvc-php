<?php
    require "models/avis-detail.php";
    $max= count_avis();
    $offset=1;
    if (isset($_GET['tri'])){
        $avis = get_avis($_GET['tri']);
    } else { 
        $avis = get_avis('id');
    }
    if ($ERROR == 0){
        require "views/avis-detail.php";
    } else {
        require "controllers/error.php";
    } 
?>  

