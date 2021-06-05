<?php 
include "Conexion.php";
$conection->query("SET NAMES 'UTF8'"); //EVITA PROBLEMAS CON CARACTERES DE LA BD CON LAS CONSULTAS
$consultaSelect=$conection->prepare("SELECT * FROM PRODUCTO");
$consultaSelect->execute();
$recorrido=$consultaSelect->fetchAll(PDO::FETCH_ASSOC);//CREA UN ARRAY ASOCIATIVO (GUARDA COLUMNAS DE CONSULTA)
echo json_encode($recorrido);
?>
