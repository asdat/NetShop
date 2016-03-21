<?php
/*
include ('php/content/contats.php');
include ('php/content/enter.php');
include ('php/content/kidsBlouse.php');
include ('php/content/kidsClothes.php');
include ('php/content/kidsPants.php');
include ('php/content/kidsSneakers.php');
include ('php/content/menBlouse.php');
include ('php/content/menClothes.php');
include ('php/content/menPants.php');
include ('php/content/menSneakers.php');
include ('php/content/usefullInfo.php');
include ('php/content/womanBlouse.php');
include ('php/content/womanClothes.php');
include ('php/content/womanPants.php');
include ('php/content/womanSneakers.php');
*/
<<<<<<< HEAD
include_once ('content/enter.php');
=======


$backgroundProduct = ['womanClothes', 'menClothes', 'kidsClothes'];
        for($i = 0; $i < count($backgroundProduct);$i++ ){
            if(in_array($_GET['page'], $backgroundProduct[$i])){
                include ('php/content/'.$backgroundProduct[$i].'.php');
            }
        }




/*
function printBackgroundProduct($backgroundProduct){
    $printTagForBackground = "<style>";
    for($i = 0; $i <= 6;$i++){
        $printTagForBackground .= ".picture$i{background: url(../../images/";
        foreach ($backgroundProduct as $i => $item){
        if($_GET['page'] == $backgroundProduct[$item]){
                    $printTagForBackground .= "$backgroundProduct[$item]/$backgroundProduct[$item].jpg);}";
                }
                elseif ($_GET['page'] == $backgroundProduct[$i]) {
                $printTagForBackground .= "$backgroundProduct[$i]/$backgroundProduct[$i].jpg);}";
                    }
                }
            }
            $printTagForBackground .= "</style>";
            return $printTagForBackground;
        }
        echo printBackgroundProduct($backgroundProduct);*/
        
        /*function printImgProduct($backgroundProduct){
            $printTagStyle = '<style>';
            foreach ($backgroundProduct as $item){
                if($_GET['page'] == $item){
                    for($i = 0; $i <= 17; $i++){
                        $printTagStyle .= ".picture$i{background: url(../../images/$item/$item_$i.jpg)}\n";
                    }
                }else {
                    foreach ($item as $itemI){
                        if($_GET['page'] == $itemI){
                            for($i = 0; $i <=6; $i++){
                                $printTagStyle .= ".picture$i{background: url(../../images/$itemI/$itemI_$i.jpg)}\n";
                            }
                        }
                    }
        }
                
            }
            $printTagStyle .= "</style>";
            return $printTagStyle;
        }
        echo printImgProduct($backgroundProduct);*/

>>>>>>> refs/remotes/origin/dev
?>
