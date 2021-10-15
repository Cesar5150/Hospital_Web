<?php
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];

include('./conexion.php');
$con= mysqli_query($conexion, "SELECT * FROM usuario WHERE Correo ='$usuario' AND Contra ='$password'");

if($res = mysqli_fetch_array($con)){
    $_SESSION['u_usuario']=$usuario;
    header("Location:principal.php");
}else{
    header("Location:index.php");
}

?>

/*
//crear el objeto de la conexion
$con=new Conexion();
$link=$con->Conectar();

//Traemos los datos de usuario y passwd
$usuario=(isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password=(isset($_POST['password'])) ? $_POST['password'] : '';

//generar la consulta de validacion de usuario y passwd
$sql="SELECT u.IdPerfil,p.Nombre as rol FROM usuario u JOIN perfil p ON u.IdPerfil = p.IdPerfil
WHERE Correo='$usuario' AND Contra='$password'";
$res=$link->prepare($sql);
$res->execute();
if($res->rowCount()>=1){
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    //crear las variables de sesion
    $_SESSION['usuario']=$usuario;
    //controlar el rol de la sesion
    $_SESSION['id_rol']=$data[0]['id_r'];
    $_SESSION['desc']=$data[0]['rol'];
}else{
    $_SESSION['usuario']=NULL;
    $data=NULL;
}
print json_encode($data);
$link=null;
*/