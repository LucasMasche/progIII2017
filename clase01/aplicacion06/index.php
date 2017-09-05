<?php

    $vec = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
    $suma = 0;
    $cont = 0;
    $promedio;

    var_dump($vec);

    echo "<br/>";

    foreach ($vec as $value)
    {
        $suma += $value;
        $cont++;
    }

    $promedio = $suma / $cont;
    echo "$promedio<br/>";

    if ($promedio < 6)
    {
        echo "Promedio menor a 6";
    }
    else if ($promedio > 6)
    {
        echo "Promedio mayor a 6";
    }
    else if ($promedio == 6)
    {
        echo "Promedio igual a 6";
    }

?>