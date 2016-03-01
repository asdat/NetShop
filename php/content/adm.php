<?php

$adm = [
    'user1' => ['login'=>'Stas', 'password'=>'123456'],
    'user2' => ['login'=>'Denis', 'password'=>'abcdefg']
];

function myAdmin(){
    foreach ($adm as $item){
        if($_POST['login'] == $adm[$item]['login'] && $_POST['password'] == $adm[$item]['password']){
            echo '<h3>Вы успешно вошли на сайт</h3>';
            setcookie($_POST['login'], $_POST['password']);
        } else {
            echo '<h3>Не верно введены логин либо пароль. Пожалуйста повторите ввод</h3>';
        }
    }
}

?>

