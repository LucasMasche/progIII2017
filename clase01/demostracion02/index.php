<?php

    include_once "./clases/persona.php";
    include_once "./clases/policia.php";

    Persona::Saludar2();
    
    echo "</br>";

    $persona = new Persona("Marina");
    $persona->Saludar();

    echo "</br>";

    $persona->Saludar2();   //asi no se hace, lo toma igual

    echo "</br>";

    Persona::Saludar();     //asi no se hace, lo toma igual

    echo "</br>";

    echo $persona->nombre;
?>