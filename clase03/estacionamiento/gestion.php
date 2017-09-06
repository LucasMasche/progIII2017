<?php
require_once "./clases/estacionamiento.php";
//punto de entrada

//estos 2 parametros los recibo del frontend
//uso el postman para pasarle los valores
$patente = $_POST["patente"];
$accion = $_POST["accion"];
//agregarle $foto solo para guardar, que la guardamos en el subdirectorio fotos move_uploaded_file para pasar
//de los archivos temporales a la carpeta que quiero

//var_dump($_GET);
//var_dump($_POST);
//var_dump($_FILES);

/*
Si la accion es guardar pasar el vehiculo al metodo "guardar" de estacionamiento, de ser sacar
se llamara al metodo "sacar" de estacionamiento pasandole el vehiculo como parametro
*/

$veh1 = new Vehiculo("zzz777");
$veh1->fechaIngreso = date("Y_m_d H:i:s");
Estacionamiento::Guardar($veh1);

$veh2 = new Vehiculo("aaa555");
$veh2->fechaIngreso = date("Y_m_d H:i:s");
Estacionamiento::Guardar($veh2);

$veh3 = new Vehiculo("ccc111");
$veh3->fechaIngreso = date("Y_m_d H:i:s");
Estacionamiento::Guardar($veh3);
//var_dump($veh1);

Estacionamiento::Sacar($veh1);


?>