/**
 * This is an example header component. This component is meant to be placed at the top of the page.
 *
 * @name {String} name Удаление таблицы

 * @author {String} author Перетягин Илья
 *
 */

<?php 
    include "BaseVar.php";
	//УДАЛЕНИЕ ТАБЛИЦЫ	
	$ter = $_POST['pica'];
	$zap = "drop table $ter";
	$bd->query($zap);
	
?>
 