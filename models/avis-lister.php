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

function get_avis($tri='id', $max, $offset, $departement='', $module=''){
    $validTri = check_array($tri);
    if ($validTri == 0){
        $db = connect();

        if (!$db == null){
            $where = "";
            if (!($departement =='') && !($module =='')){
                $where = "WHERE departement ILIKE '" . $departement . "' AND module ILIKE '" . $module . "'";  
            } else {
                if (!($departement =='')) {
                    $where = "WHERE departement ILIKE '" . $departement . "'";
                } else if (!($module =='')) {
                    $where = "WHERE module ILIKE '" . $module . "'";    
                }
            }
            $r = $db->query('SELECT * FROM avis ' . $where . ' ORDER BY ' . $tri . ' LIMIT ' . $max . ' OFFSET ' . $offset . ';');
            $avis = $r->fetchAll();
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