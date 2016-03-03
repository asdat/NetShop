<?php
$printHead = "<meta name=\"viewport\" content=\"initial-scale=1\"><title>";
$printMeta = "<meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
$printLink = "<link rel=\"stylesheet\" href=\"assets/css/main.css\"/>\n <link rel=\"stylesheet\" href=\"assets/css/style.css\"/>\n";
$printLink .= "<link rel\"stylesheet\" href=\"assets/css/bootstrap.css\" type=\"text/css\"/>\n";
echo $printLink, $printMeta;
$titleArr = [
        'womanClothes'=>['title' => 'Женская одежда', 'content'=>'Женская одежда'],
       'womanSneakers'=>['title'=>'Женские кроссовки', 'content'=>'Женские кроссовки'],
       'womanBlouse'=>['title'=>'Женские свитшоты', 'content'=>'Женские свитшоты'],
       'womanPants'=>['title'=>'Женские штаны', 'content'=>'Женские свитшоты'],
       'manClothes'=>['title' => 'Мужская одежда', 'content'=>'Мужская одежда'],
       'manSneakers'=>['title' => 'Мужские кроссовки', 'content'=>'Мужские кроссовки'],
       'manBlouse'=>['title'=>'Мужские свитшоты', 'content'=>'Мужские свитшоты'],
       'manPants'=>['title'=>'Мужские штаны', 'content'=>'Мужские штаны'],
       'kidsClothes'=>['title'=>'Детская одежда', 'content'=>'Детская одежда'],
       'kidsSneakers'=>['title' => 'Детские кроссовки', 'content'=>'Детские кроссовки'],
       'kidsBlouse'=>['title'=>'Детские свитшоты', 'content'=>'Детские свитшоты'],
       'kidsPants'=>['title' => 'Детские штаны', 'content'=>'Детские штаны'],
       'usefulInfo'=>['title' => 'Полезная информация', 'content'=>'Полезная информация'],
       'contacts'=>['title' => 'Контакты', 'content'=>'Контакты'],
       'enter'=>['title' => 'Войти', 'content'=>'Войти']
    ];

    if(in_array($_GET['page'], array_keys($titleArr))){
        $printHead .= $titleArr[$_GET['page']]['title']."</title>\n";
    } else {
        $printHead .= "ZIGGS</title>\n";
}
echo $printHead;
    $clr = "<div class=\"clr\"></div>";
?>