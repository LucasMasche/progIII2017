<?php
require_once "./clases/estacionamiento.php";
//punto de entrada

//var_dump(timezone_identifiers_list());
date_default_timezone_set("America/Argentina/Buenos_Aires");

//fecha Unix (el número de segundos desde el 1 de Enero del 1970 00:00:00 UTC)
/*
$fecha1 = "2017-09-10 17:15:20";
$fecha2 = date("Y-m-d H:i:s");
$unix1 = strtotime($fecha1)."\n";
$unix2 = strtotime($fecha2)."\n";
echo ($unix2 - $unix1);
*/

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

$veh1 = new Vehiculo("zzz777", date("Y-m-d H:i:s"));
Estacionamiento::Guardar($veh1);

$veh2 = new Vehiculo("aaa555", date("Y-m-d H:i:s"));
Estacionamiento::Guardar($veh2);

$veh3 = new Vehiculo("ccc111", date("Y-m-d H:i:s"));
Estacionamiento::Guardar($veh3);

//var_dump($veh1);
sleep(5);
Estacionamiento::Sacar($veh1);

?>