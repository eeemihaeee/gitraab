 /**  
 * @name {String} name ОЧИСТКА ТАБЛИЦЫ
 * @author {String} author eeemihaeee  *  */
<?php 
    include "BaseVar.php";
		
	$zap = "truncate table log";
	$bd->query($zap);	
?>