<?php

    $lapicera1 = array("color" => "rojo", "marca" => "bic", "trazo" => "recto", "precio" => 10.5);
    $lapicera2 = array("color" => "azul", "marca" => "matel", "trazo" => "suave", "precio" => 9.35);
    $lapicera3 = array("color" => "verde", "marca" => "maped", "trazo" => "suave", "precio" => 7.6);

    echo "\$lapicera1<br/>";
    foreach ($lapicera1 as $key => $value)
    {
        echo $key . " => " . $value . "<br/>";
    }

    echo "\$lapicera2<br/>";
    foreach ($lapicera2 as $key => $value)
    {
        echo $key . " => " . $value . "<br/>";
    }
    
    echo "\$lapicera3<br/>";
    foreach ($lapicera3 as $key => $value)
    {
        echo $key . " => " . $value . "<br/>";
    }
    
?>