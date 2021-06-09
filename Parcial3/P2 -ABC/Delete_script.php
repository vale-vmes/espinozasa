<?php
    include "Conexion.php";
  
    $id=$_GET['id'];
    $queryDelete = "DELETE FROM PRODUCTO WHERE ID_PRODUCTO ='$id'";    
    $ejecutarDelete = $conection->prepare($queryDelete);
    $ejecutarDelete->execute();
    if ($ejecutarDelete) {
        header("Location: Formulario.php");
    }
?>