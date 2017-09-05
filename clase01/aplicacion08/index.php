<?php

    $v = array(1 => 90, 30 => 7, "e" => 99, "hola" => "mundo");

    var_dump($v);
    echo "<br/>";

    foreach ($v as $value)
    {
        echo $value . "<br/>";
    }

?>