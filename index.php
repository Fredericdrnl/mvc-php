<?php
    $cont = $_GET['controller'] ?? 'error';

    require 'controller/$cont.php'
?>