<?php

    echo ValidarPalabra("Recuperatorio", 20);

    function ValidarPalabra($palabra, $max)
    {
        if (strlen($palabra) <= $max)
        {
            if ($palabra == "Recuperatorio" || $palabra == "Parcial" || $palabra == "Programacion")
            {
                return 1;
            }
        }
        return 0;
    }

?>