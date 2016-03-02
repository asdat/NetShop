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
    ['title'=>'Женские кроссовки', 'link'=>'womanSneakers.php?page=womanSneakers'],
    ['title'=>'Женские свитшоты', 'link'=>'womanBlouse.php?page=womanBlouse'],
    ['title'=>'Женские Штаны', 'link'=>'womanPants.php?page=womanPants'],
    ['title'=>'Мужске кроссовки', 'link'=>'manSneakers.php?page=manSneakers'],
    ['title'=>'Мужские свитшоты', 'link'=>'manBlouse.php?page=manBlouse'],
    ['title'=>'Мужские штаны', 'link'=>'manPants.php?page=manPants'],
    ['title'=>'Детские кроссовки', 'link'=>'kidsSneakers.php?page=kidsSneakers'],
    ['title'=>'Детские свитшоты', 'link'=>'kidsBlouse.php?page=kidsBlouse'],
    ['title'=>'Детские штаны', 'link'=>'kidsPants.php?page=kidsPants'],
    ['title'=>'Информация', 'link'=>'usefulInfo.php?page=usefulInfo'],
    ['title'=>'Контакты', 'link'=>'contacts.php?page=contacts']
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

        