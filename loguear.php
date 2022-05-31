<?php
require_once 'conexion.php';
$correo=$_POST["correo"];
$clave=$_POST["clave"];
$clave=hash('md5',$clave);



if(isset($_POST)){

$sql = " SELECT * FROM  clientes WHERE correo= '{$correo}' AND clave= '{$clave}'";
$login= mysqli_query($db,$sql);


if( $login && mysqli_num_rows($login)==1)
{
    $usuario=mysqli_fetch_assoc($login);
    $_SESSION['usuario']=$usuario;
    header('Location: usuario/menu.php');
}
else
{
    $_SESSION['error_login']="Login incorrecto";
    header('Location: index.php')

}
?>