<?php

    if (EsPar(7))
    {
        echo "TRUE";
    }
    else
    {
        echo "FALSE";
    }

    function EsPar($entero)
    {
        if ($entero % 2 == 0)
            return true;
        return false;
    }

    function EsImpar($entero)
    {
        return !EsPar($entero);
    }

?>