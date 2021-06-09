<?php
    include "Conexion.php";
  
    $id=$_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $queryUpdate = "UPDATE PRODUCTO SET 
        NOMBRE='$nombre', 
        CATEGORIA='$categoria',
        MARCA='$marca',
        PRECIO='$precio',
        DESCRIPCION='$descripcion'
        WHERE ID_PRODUCTO ='$id'";    
    $ejecutarUpdate = $conection->prepare($queryUpdate);
    $ejecutarUpdate->execute();
    if ($ejecutarUpdate) {
        header("Location: Formulario.php");
    }
?>