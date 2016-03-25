<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
header("Content-Type:text/html; charset=utf8");

function connect(){
    $host = "asdat.mysql.ukraine.com.ua";
$user = "asdat_stud3";
$pass = "erpnf2e3";
$db_name = "asdat_stud3";

$connection = mysqli_connect($host, $user, $pass);

return $connection;
}
function getMenu(){
    connect();
    
    mysqli_set_charset($connection, "utf8");
    
    mysqli_select_db($connection, $db_name);
    
    if (mysqli_connect_errno($mysqli)) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
        }
        
        $result = mysqli_query($connection, "SELECT * FROM menu");
        while ($getMenu = mysqli_fetch_assoc($result)){
            
        }
}

function getCat(){
$host = "asdat.mysql.ukraine.com.ua";
$user = "asdat_stud3";
$pass = "erpnf2e3";
$db_name = "asdat_stud3";

$connection = mysqli_connect($host, $user, $pass);

mysqli_set_charset($connection, "utf8");

mysqli_select_db($connection, $db_name);
        if(mysqli_connect_errno($connection)){
            echo ("Не удалось подключиться" . mysqli_connect_error());
        }

   
    $result = mysqli_query($connection, "SELECT * FROM menu");
    
    if(!$result){
        return NULL;
    }
    
    $catArr = array();
    if(mysqli_num_rows($result) != 0){
        
        for ($i=0; $i < mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_assoc($result);
            if(empty($catArr[$row['perent_id']])){
                $catArr[$row['perent_id']] = array();
            }
            $catArr[$row['perent_id']][] = $row;
            if(empty($catArr[$row['link']])){
               $catArr[$row['link']] = array();
            }
            $catArr[$row['link']][] = $row;
        }
    }
    return $catArr;
}

function printMenu($arr, $perent_id = 0){
    
    getCat();
    
    if(empty($arr[$perent_id])){
        return;
    } 
    echo "<ul>";
    for($i=0; $i < count($arr[$perent_id]); $i++){
        echo ("<li><a href='$arr[$perent_id]]'>\"$arr[$perent_id][$i]['title']'</a>'");
        printMenu($arr,$arr[$parent_id][$i]['id']);
        echo '</li>';
    }
    echo '</ul>';
}

?>

