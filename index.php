<?php
   $menu=[
        ['title'=>'Главная', 'link'=>'/'],
        ['title'=>'Женская одежда', 'link'=>'womanClothes.php', 
            'children'=>[
                ['title'=>'Кроссовки', 'link'=>'womanSneakers.php'],
                ['title'=>'Свитшоты', 'link'=>'womanBlouse.php'],
                ['title'=>'Штаны', 'link'=>'womanPants.php'],
            ]
            ],
        ['title'=>'Мужская одежда', 'link'=>'manClothes.php', 
            'children'=>[
                ['title'=>'Кроссовки', 'link'=>'manSneakers.php'],
                ['title'=>'Свитшоты', 'link'=>'manBlouse.php'],
                ['title'=>'Штаны', 'link'=>'manPants.php'],
            ]
            ],
        ['title'=>'Детская одежда', 'link'=>'kidsClothes.php', 
            'children'=>[
                ['title'=>'Кроссовки', 'link'=>'kidsSneakers.php'],
                ['title'=>'Свитшоты', 'link'=>'kidsBlouse.php'],
                ['title'=>'Штаны', 'link'=>'kidsPants.php'],
            ]
            ],
       ['title'=>'Полезная информация', 'link'=>'usefulInfo.php'],
        ['title'=>'Контакты', 'link'=>'contacts.php'],
        ['title'=>'Войти', 'link'=>'Enter.php']
    ];
    function printMenu($menu, $level){
    global $classes;
    $html = "<ul class=\"{$classes[$level]}\">\n";
    foreach ($menu AS $i=>$item){
        $html.="<li class='item-$i'><a href='{$item['link']}'>{$item['title']}</a>\n";
        if(count($item['children'])){
            $html .= printMenu($item['children'], $level+1); 
        }
        $html.="</li>";
    }
    $html.='</ul>';
    return $html;
        
    }
    echo printMenu($menu, $level);
?>
              