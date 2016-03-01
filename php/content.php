<?php

$includeContent = [
    'contacts' => ['link'=>'content/contats.php'],
    'enter' => ['link'=>'content/enter.php'],
    'kidsBlouse' => ['link'=>'content/kidsBlouse.php'],
    'kidsClothes' =>['link'=>'content/kidsClothes.php'],
    'kidsPants' => ['link'=>'content/kidsPants.php'],
    'kidsSneakers' => ['link'=>'content/kidsSneakers.php'],
    'manBlouse' => ['link'=>'content/manBlouse.php'],
    'manClothes' => ['link'=>'content/manClothes.php'],
    'manPants' => ['link'=>'content/manPants.php'],
    'manSneakers' => ['link'=>'content/manSneakers.php'],
    'usefullInfo' => ['link'=>'pcontent/usefullInfo.php'],
    'womanBlouse' => ['link'=>'content/womanBlouse.php'],
    'womanPants' => ['link'=>'content/womanPants.php'],
    'womanClothes' => ['link'=>'content/womanClothes.php'],
    'womanSneakers' => ['link'=>'content/womanSneakers.php']
];
/*
foreach ($includeContent as $i => $item){
    if(in_array($_GET['page'], array_keys($includeContent))){
        include_once ($item['link']);
    }
}
*/


include ('content/enter.php');
?>
