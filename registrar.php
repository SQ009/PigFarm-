<?php
  require_once  'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $clave=hash('md5',$clave);



    $sql="INSERT INTO clientes VALUES (null,'$nombre','$apellido','$correo','$clave')";
    $guardar= mysqli_query($db,$sql);


    if($guardar){
        echo "si";
    }else{
         echo "no";
    }
?>