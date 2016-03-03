<?php

$enterForm = ["<div class=\"content\">", "<div class=\"enterForm\">", "<p>Вход</p>\n", "<form action=\"php/adm.php\" class=\"formEnter\" method=\"post\">\n", "<label for=\"login\">Логин</label>\n",
    "<input name=\"login\" id=\"enterLog\" type=\"text\">\n", "<label for=\"password\">Пароль</label>\n", "<input name=\"password\" id=\"enterPass\" type=\"password\">\n",
    "<button type=\"submit\" id=\"enter\">Войти</button>\n", "</form>\n", "</div>\n"];

$checkinForm = ["<div class=\"checkInForm\">", "<p>Регистрация</p>\n", "<form action=\"#\">\n", "<label for=\"name\">ФИО</label>\n", "<input name=\"name\" type=\"text\">\n",
    "<label for=\"name\">Логин</label>\n", "<input name=\"login\" type=\"text\">\n", "<label for=\"password\">Пароль</label>\n", "<input type=\"password\"  maxlength=\"18\">\n",
    "<label for=\"email\">Введите email</label>\n", "<input name=\"email\" type=\"text\">\n", "<button type=\"submit\" id=\"reg\">Зарегестрироваться</button>\n"];

for($i=0;$i<=count($enterForm);$i++){
    echo $enterForm[$i];
}
for($i=0;$i<=count($checkinForm);$i++){
    echo $checkinForm[$i];
}

echo "</form>
            </div>
            <div class=\"clr\"></div>
        </div>";

?>
                                     
                                                    
						
			