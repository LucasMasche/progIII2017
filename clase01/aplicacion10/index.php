<?php

    $lapicera1 = array("color" => "rojo", "marca" => "bic", "trazo" => "recto", "precio" => 10.5);
    $lapicera2 = array("color" => "azul", "marca" => "matel", "trazo" => "suave", "precio" => 9.35);
    $lapicera3 = array("color" => "verde", "marca" => "maped", "trazo" => "suave", "precio" => 7.6);
    $asociativo = array("lapicera1" => $lapicera1, "lapicera2" => $lapicera2, "lapicera3" => $lapicera3);
    $indexado = array($lapicera1, $lapicera2, $lapicera3);

    echo "Array asociativo<br/>";
    foreach ($asociativo as $key => $lapi)
    {
        echo $key . "<br/>";
        foreach ($lapi as $key2 => $value)
        {
            echo $key2 . " => " . $value . "<br/>";
        }
    }
    
    echo "<br/>";

    echo "Array indexado<br/>";
    foreach ($indexado as $keyIndex => $lapi)
    {
        echo "Lapicera " . ($keyIndex + 1) . "<br/>";
        foreach ($lapi as $key => $value)
        {
            echo $key . " => " . $value . "<br/>";
        }
    }

?>