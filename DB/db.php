<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//include_once ('../config/config.app');

function connect(){
    
    $db_user = "asdat_stud3";
    $db_pass = "erpnf2e3";
    $db_host = "asdat.mysql.ukraine.com.ua";
    $db_name = "asdat_stud3";

$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
return $mysqli;
}
/*
function getMenu(){
    
    connect();
    
    if (mysqli_connect_errno($mysqli)) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
        }
        
        mysqli_set_charset($mysqli, 'utf8');
$res = mysqli_query($mysqli, "SELECT * FROM `menu` ");
    if($res){
            echo '<ul>';
            $takeMenu = array();
            while($takeMenu = mysqli_fetch_assoc($res)){
                foreach ($getMenu as $item){
                    
                }
    ?>
            <li>
				<a href=" <?php echo $item['menu']?'/':$item['link'];?>" 
					title="<?php echo $item['title'];?>"> 
					<?php echo $item['title'];?>
				</a>
            </li>
            <?php
            
            }   
        
	echo '</ul>';
}
mysqli_close($mysqli);

return ;
}
$printMenu = getMenu();
echo $printMenu;
// если ошибка подключения, то выводим ее на экран
// mb_internal_encoding("UTF-8");
*/

?>
    