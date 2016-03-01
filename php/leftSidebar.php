<?php

$leftSidebarHtml = "<div class=\"wrapper style3\">\n";
if($_GET['page'] == 'contacts'){
    $leftSidebarHtml .= "<div class=\"title\"></div>\n";
} elseif ($_GET['page'] == 'enter') {
    $leftSidebarHtml .= "<div class=\"title\">ВВЕДИТЕ ДАННЫЕ</div>\n";
} elseif ($_GET['page'] == 'usefulInfo') {
    $leftSidebarHtml .= "<div class=\"title\">ВАЖНО</div>\n";
}
    else{
    $leftSidebarHtml .= "<div class=\"title\">Галерея</div>\n";
}

$defaultDiv = "<div id=\"highlights\" class=\"container\">\n
						<div class=\"row 150%\">\n
						
						<div class=\"row 150%\">\n
							<div class=\"4u 12u(mobile)\">\n
									<div id=\"sidebar\">\n";

$linksArr = [
    ['title'=>'Женские кроссовки', 'link'=>'content/womanSneakers.php?page=womanSneakers'],
    ['title'=>'Женские свитшоты', 'link'=>'content/womanBlouse.php?page=womanBlouse'],
    ['title'=>'Женские Штаны', 'link'=>'content/womanPants.php?page=womanPants'],
    ['title'=>'Мужске кроссовки', 'link'=>'content/manSneakers.php?page=manSneakers'],
    ['title'=>'Мужские свитшоты', 'link'=>'content/manBlouse.php?page=manBlouse'],
    ['title'=>'Мужские штаны', 'link'=>'content/manPants.php?page=manPants'],
    ['title'=>'Детские кроссовки', 'link'=>'content/kidsSneakers.php?page=kidsSneakers'],
    ['title'=>'Детские свитшоты', 'link'=>'content/kidsBlouse.php?page=kidsBlouse'],
    ['title'=>'Детские штаны', 'link'=>'content/kidsPants.php?page=kidsPants'],
    ['title'=>'Информация', 'link'=>'content/usefulInfo.php?page=usefulInfo'],
    ['title'=>'Контакты', 'link'=>'content/contacts.php?page=contacts']
];

function printLeftSidebar ($linksArr){
    $listHtml = "<ul class=\"leftMenu\">\n";
    foreach ($linksArr as $item) {
        $listHtml .= "<li><a href='{$item['link']}'>{$item['title']}</a></li>\n";
    }
    $listHtml .= "</ul>\n";
    return $listHtml;
}
$endOfLeftSidebar = "</div>\n</div>\n</div>\n";
echo $leftSidebarHtml, $defaultDiv, printLeftSidebar($linksArr), $endOfLeftSidebar;

?>

        