<?php

    $vec;
    $indice = 0;

    for ($i=1; ; $i++)
    {
        if ($i % 2 == 1)
        {
            $vec[$indice] = $i;
            $indice++;
        }
        if ($indice >= 10)
            break;
    }

    var_dump($vec);
    echo "<br/>";

    echo "Con FOR<br/>";
    for ($i=0; $i < 10; $i++)
    {
        echo $vec[$i] . "<br/>";
    }

    echo "Con FOREACH<br/>";
    foreach ($vec as $value)
    {
        echo $value . "<br/>";
    }

    echo "Con WHILE<br/>";
    $cont = 0;
    while ($cont < 10)
    {
        echo $vec[$cont] . "<br/>";
        $cont++;
    }

?>