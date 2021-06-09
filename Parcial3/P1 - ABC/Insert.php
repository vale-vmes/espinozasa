<?php
    include "Conexion.php";

    //Campos traidos por metodo POST
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
   


    $queryInsert = "INSERT INTO PRODUCTO (NOMBRE, CATEGORIA, MARCA, PRECIO, DESCRIPCION) 
                                        VALUES('$nombre', '$categoria', '$marca', '$precio', '$descripcion')";
    $ejecutarInsert = $conection->prepare($queryInsert);
    $ejecutarInsert->execute();

    if ($ejecutarInsert) {
        header("Location: Formulario.php"); //aqui no se que vam
    } 


?>