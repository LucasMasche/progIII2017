<?php

    $a = 10;
    $b = 1;
    $c = 8;

    if ($a < $b && $a > $c || $a < $c && $a > $b)
    {
        echo "Valor del medio \$a = $a";
    }
    else if ($b < $a && $b > $c || $b < $c && $b > $a)
    {
        echo "Valor del medio \$b = $b";
    }
    else if ($c < $a && $c > $b || $c < $b && $c > $a)
    {
        echo "Valor del medio \$c = $c";
    }
    else
    {
        echo "No hay valor medio";
    }

?>