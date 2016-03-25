<?php
header("Content-Type:text/html; charset=utf8");
function registration(){
    
    $regName = "/^[\w \.]{3,}$/ui";
    $regLogin = "/^[\w\d_]{3,}$/i";
    $regPass = "/^[\w\d_\-]{3,}$/i";
    $regMail = "/(\w+@[a-z_]+?\.[a-z]{2,6})/i";
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
        echo 'Поздравялем бл*ть! Вы зарегестрировались';
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

