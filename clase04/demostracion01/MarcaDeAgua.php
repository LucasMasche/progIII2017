<?php
//var_dump($_FILES);

$destino = "./fotoUno.png";
//subo el archivo
//1048576 bytes = 1 MB
if ($_FILES["foto"]["type"] == "image/png" && $_FILES["foto"]["size"] <= 1048576 && $_FILES["foto"]["size"] > filesize("./fotoDos.png"))
{
    move_uploaded_file($_FILES["foto"]["tmp_name"], $destino);
}

$im = imagecreatefrompng("fotoUno.png");
$estampa = imagecreatefrompng('fotoDos.png');

// Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
$margen_dcho = 10;
$margen_inf = 10;
$sx = imagesx($estampa);
$sy = imagesy($estampa);

// Copiar la imagen de la estampa sobre nuestra foto usando los índices de márgen y el
// ancho de la foto para calcular la posición de la estampa. 
imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));

// Imprimir y liberar memoria
header('Content-type: image/png');
$destino2 = "./".$_POST["usuario"].".png";
imagepng($im, $destino2);
imagedestroy($im);


?>