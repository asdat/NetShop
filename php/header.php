<?php
<<<<<<< HEAD
=======
        /*ini_set('display_errors',1);
        error_reporting(E_ALL);
        include ('../DB/db.php');*/

>>>>>>> refs/remotes/origin/dev
 $wrapperHeader = "<div id=\"page-wrapper\"><div id=\"header-wrapper\" class=\"wrapper\">"; 
 $wrapperHeader .= "<div id=\"header\">";
 echo $wrapperHeader;
 
 // создаём массив для вывода заголовка
$namePages = [
       'womanClothes'=>['title' => 'Женская одежда', 'content'=>'Женская одежда'],
       'womanSneakers'=>['title'=>'Женские кроссовки', 'content'=>'Женские кроссовки'],
       'womanBlouse'=>['title'=>'Женские свитшоты', 'content'=>'Женские свитшоты'],
       'womanPants'=>['title'=>'Женские штаны', 'content'=>'Женские свитшоты'],
       'menClothes'=>['title' => 'Мужская одежда', 'content'=>'Мужская одежда'],
       'menSneakers'=>['title' => 'Мужские кроссовки', 'content'=>'Мужские кроссовки'],
       'menBlouse'=>['title'=>'Мужские свитшоты', 'content'=>'Мужские свитшоты'],
       'menPants'=>['title'=>'Мужские штаны', 'content'=>'Мужские штаны'],
       'kidsClothes'=>['title'=>'Детская одежда', 'content'=>'Детская одежда'],
       'kidsSneakers'=>['title' => 'Детские кроссовки', 'content'=>'Детские кроссовки'],
       'kidsBlouse'=>['title'=>'Детские свитшоты', 'content'=>'Детские свитшоты'],
       'kidsPants'=>['title' => 'Детские штаны', 'content'=>'Детские штаны'],
       'usefulInfo'=>['title' => 'Полезная информация', 'content'=>'Полезная информация'],
       'contacts'=>['title' => 'Контакты', 'content'=>'Контакты'],
       'enter'=>['title' => 'Войти', 'content'=>'Войти'],
   ];
   
   
        $htmlNamePage = "<div id=\"logo\">\n<h1>\n<a href=\"index.php\">ZIGGS</a>\n</h1>\n<p>";
        
   if (in_array($_GET['page'], array_keys($namePages))){    //если значение адресной строки равно значению массива то...
       $htmlNamePage .= $namePages[$_GET['page']]['content']; //добавляем значение "content" для значения массива $namePages
       $htmlNamePage .= "</p>\n</div>\n";
       echo $htmlNamePage;  // название страницы
   } else {
       $htmlNamePage .= 'Главная';  // если адресная строка не равна значению в массиве, то выводим Главную
       $htmlNamePage .= "</p>\n</div>\n";
       echo $htmlNamePage; 
   }
   echo "<nav id=\"nav\">"; //закрываем все открытые теги
  
   // создаем массив для списка меню (название страницы, ссылки на них)
      $menu=[
        ['title'=>'Главная', 'link'=>'/'],
        ['title'=>'Женская одежда', 'link'=>'?page=womanClothes', 
            'children'=>[
                ['title'=>'Кроссовки', 'link'=>'?page=womanSneakers'],
                ['title'=>'Свитшоты', 'link'=>'?page=womanBlouse'],
                ['title'=>'Штаны', 'link'=>'?page=womanPants'],
            ]
            ],
        ['title'=>'Мужская одежда', 'link'=>'?page=menClothes',  
            'children'=>[
                ['title'=>'Кроссовки', 'link'=>'?page=menSneakers'],
                ['title'=>'Свитшоты', 'link'=>'?page=menBlouse'],
                ['title'=>'Штаны', 'link'=>'?page=menPants'],
            ]
            ],
        ['title'=>'Детская одежда', 'link'=>'?page=kidsClothes',
            'children'=>[
                ['title'=>'Кроссовки', 'link'=>'?page=kidsSneakers'],
                ['title'=>'Свитшоты', 'link'=>'?page=kidsBlouse'],
                ['title'=>'Штаны', 'link'=>'?page=kidsPants'],
            ]
            ],
       ['title'=>'Полезная информация', 'link'=>'?page=usefulInfo'],
        ['title'=>'Контакты', 'link'=>'?page=contacts'],
        ['title'=>'Войти', 'link'=>'?page=enter']
    ];
   
      
   

   $classes=[0=>'menu', 'submenu']; // глобальный массив уровней меню
    function printMenu($menu, $level){ // функция вывода страниц
    global $classes;
    $html = "<ul class=\"{$classes[$level]}\">";  // для списка меню задаём класс с названием уровня
    foreach ($menu AS $i=>$item){   // перебираем элементы массива (ключ => значение)
        $html.="<li class='item-$i'><a href='{$item['link']}'>{$item['title']}</a>\n";
        if(count($item['children'])){ // если во втором уровне меню есть значение $item
            $html .= printMenu($item['children'], $level+1); // то заносим это значение в переменную 
        }
        $html.="</li>";
    }
    $html.='</ul>'; // закрываем все теги
    return $html;   // возвращаем результат функции
        
    }
    echo printMenu($menu, $level);  // выводим результат на экран
    
    echo "</nav>\n</div>\n</div>";
   
?>