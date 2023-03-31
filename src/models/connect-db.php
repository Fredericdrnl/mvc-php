<?php
function connect(){
    require 'config-db.php';
    try {
        $PDO = new PDO($DBDRIVER . ':host=' . $DBHOST . ';dbname=' . $DBNAME, $DBUSER, $DBPASSWORD);
        return $PDO;
    }catch (PDOException) {
        require "views/config.php";
        global $ERROR;
        $ERROR = 2;
        require 'controllers/error.php';
    }
}
?>

