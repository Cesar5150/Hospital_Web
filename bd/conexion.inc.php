<?php 
class Conexion{
    public static function Conectar() {
     define('servidor','localhost');
     define('usuario','root');
     define('password','');
     define('bdname','hopital');
     $op=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
     try{
     $link= new PDO("mysql:host=".servidor.";bdname=".bdname,usuario,password,$op);
     return $link;
     }catch (Exception $e){
          die("ERROR AL CONECTAR LA BD".$e->getMessage());
     }

    }
}

// simple conexion a la base de datos
function conectarse(){
	return new mysqli("localhost","root","","hospital");
}

?>
