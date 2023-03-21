<?php
require "connect-db.php";
function check_array($array){
    require "config-db.php";
    $bool = 2;
    $db = connect();
    if (!$db == null){
        foreach($db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME LIKE '%avis%';")  as $row) {
            if ($array == $row[0]){
                $bool = 0;
            }
        }
        return $bool;
    } else {
        return -1;
    }
    }

function get_avis($tri='id'){
    $validTri = check_array($tri);
    if ($validTri == 0){
        $db = connect();
        $avis = array();
        if (!$db == null){
            foreach($db->query('SELECT * FROM avis ORDER BY ' . $tri . ';')  as $row) {
                array_push($avis, $row);
            }
            return $avis;
        } else {
            return -1;
        }
    } else {
        global $ERROR;
        $ERROR = 3;
    }
}

function count_avis(){
    $db = connect();
    $nbRow = array();
    if (!$db == null){
        $r = $db->query('SELECT COUNT(*) FROM avis'); 
        $nbRow = $r->fetchAll(PDO::FETCH_BOTH);
        return $nbRow[0];
    } else {
        return -1;
    }
}
?>