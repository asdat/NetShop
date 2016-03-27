<?php

include ('config.php');
ini_set('display_errors',1);
error_reporting(E_ALL);
header("Content-Type:text/html; charset=utf8");

function registration(){
    connect();
    mysqli_set_charset($connection, 'utf8');
    mysqli_select_db($connection, $db_name);
    
    if (mysqli_connect_errno($mysqli)) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
        }
    
    $regName = "/^[\w]{3,}\s[\w]{1}\.[а-я]{1}\.$/ui";
    $regLogin = "/^[\w\d_]{3,}$/i";
    $regPass = "/^[\w\d_\-]{3,}$/i";
    $regMail = "/^[\d\w]{1,}\@[\w]{3,6}\.[\w]{2}$/i";
    $regCountry = "/^[\w]{3,}[- \w]{3,}$/iu";
    $regPhone = "/^[0|+380]{1,4}[\d]{2}-?[\d]{3}-?[\d]{2}-?[\d]{2}/";
    
    $FIO = $_POST['name'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    
    if(!preg_match($regName, $FIO)){
        echo 'Вы ввели не верный формат имени. Повторите ввод.';
    } elseif (!preg_match($regLogin, $login)) {
        echo 'Вы ввели не верный формат логина или пароля. Повторите ввод.';
    } elseif (!preg_match($regPass, $pass)){
        echo 'Вы ввели не верный формат логина или пароля. Повторите ввод.';
    } elseif (!preg_match($regMail, $email)){
        echo 'Вы ввели не верный формат email. Повторите ввод.';
    } elseif (!preg_match($regCountry, $country)) {
        echo 'Вы ввели не верный формат названия города. Повторите ввод.';
    } elseif (!preg_match($regPhone, $phone)){
        echo 'Вы ввели не верный формат номера телефона. Повторите ввод.';
    } else {
        mysqli_query($connection, "INSERT INTO `asdat_stud3`.`users` ("
                . "`id`, `login`, `username`, `password`, `state`, `country`, `phone`)"
                . "VALUES(NULL,`".$login."`,`".$FIO."`,`".md5($pass)."`,0,`".$country."`,`".$phone."`)");
    }
    
    /*connect();
    
    mysqli_set_charset($connection, "utf8");
    
    mysqli_select_db($connection, $db_name);
    
    if (mysqli_connect_errno($mysqli)) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
        }*/
    
    
}
registration();
?>

