<?php
 
$link = new mysqli("localhost", "root", "", "adgeco");
 
if($link->connect_error) {
	echo "<b>Fallo al conectar a la BD: </b>" . $link->connect_error . "---" . $link->connect_error;
}
 
return $link;
 
 ?>