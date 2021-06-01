/**
 * @name {String} name Список таблиц по кнопке
 *
 * @author {String} author Уваров Александр
 *
 */
<?php 
	include "BaseVar.php";
	$name_table = $_POST['pic'];
	$zapros = "SELECT * from `$name_table`";
	vivod($bd, $zapros, $name_table); 	// Функция библиотеки TableT
	
?>