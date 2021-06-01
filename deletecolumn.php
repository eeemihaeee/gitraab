/**
 * This is an example header component. This component is meant to be placed at the top of the page.
 *
 * @name {String} name Удаление столбцов

 * @author {String} author Перетягин Илья
 *
 */

<?php
	include "BaseVar.php";
	
	$tab = htmlentities(file_get_contents("tanos.txt"));
	
	$column_title=$_POST["spisok"];	
	$sql="alter table $tab drop $column_title ";
	$bd->query($sql);
	$zapros = "SELECT * from $tab";
	vivod($bd, $zapros, $tab);
?>