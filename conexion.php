<?php
// simple conexion a la base de datos
function Conectar(){
	return new mysqli("localhost","root","","hospital");
}

?>