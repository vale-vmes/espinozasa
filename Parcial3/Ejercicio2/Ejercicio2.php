<?php

$database='producto';
$user='root';
$password='';
$server='localhost';

try
{
    $conection = new PDO("mysql:host=$localhost;dbname=$producto,$user,$password")
    echo "Conexión exitosa!";
}
catch(PDOException $exc)
{
    echo "No se ha podido realizar la conexión!";
    echo $exc->getMessage();
    exit();
}

?>