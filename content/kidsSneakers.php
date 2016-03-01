<?php


echo "<div class=\"content\">\n 
        <div class=\"photoContent\">\n";
    $nameAndPriceSneakers = ["Nike Huarache Black <br> 100", "Nike Huarache Black & Rad <br> 250", "Nike Lebron Black <br> 175", "Nike Dunk White <br> 150", "Nke RT 1 <br> 180",
        "Jordan Executive \"Black Gym & Black\" <br> 210"];

    for($i = 0; $i <= 5; $i++){
        echo "<div class=\"product\"><div class=\"picture$i\">\n";
        echo "<p>$nameAndPriceSneakers[$i] $</p>";
        echo "<a href=\"#\">В корзину</a>\n
                    </div>\n</div>\n";
    }
    echo $clr;
    echo "</div>\n</div>\n";
    
?>

