<?php

    $suma = 0;
    $cant = 0;

    for ($i=1; ; $i++)
    { 
        $suma += $i;
        if ($suma > 1000)
            break;
        echo $suma."<br/>";
        $cant = $i;
    }

    echo "Números sumados: $cant";
?>