<?php

include "Conexion.php";

try
{
    $consultaSelect="SELECT * FROM PRODUCTO";
    $consulta=$conection->prepare($consultaSelect);
    $consulta->execute();
    echo "Id_Producto  |  Nombre  |  Categoría  |  Marca  |  Precio  |  Descripcion  <br>";
    echo "--------------------------------------------------------------------------------------------------- <br>";
    while($registro = $consulta->fetch())
    {
        echo $registro['ID_PRODUCTO'].' - '.
            $registro['NOMBRE'].' - '.
            $registro['CATEGORIA'].' - '.
            $registro['MARCA'].' - '.
            $registro['PRECIO'].' - '.
            $registro['DESCRIPCION'].' <br> ';
        
    }
    $consulta->closeCursor();
}
catch(PDOException $exc)
{
    echo "No se pudo realizar la consulta en la base de datos";
    echo $exc->getMessage();
}
?>

