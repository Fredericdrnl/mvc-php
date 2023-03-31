<?php
    require "views/config.php";
    if (isset($_GET['controller']) && (file_exists("controllers/{$_GET['controller']}.php"))){
        require "controllers/{$_GET['controller']}.php";
    } else {
        $ERROR = 1;
        require "controllers/error.php"; 
    }
?>