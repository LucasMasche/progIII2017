<?php

    $vec = array("H", "O", "L", "A");

    LeerArray($vec);
    echo " invertido es ";
    LeerArray(InvertirPalabra($vec));

    function InvertirPalabra($arrayDeCaracteres)
    {
        $vecInvertido;
        $cont = 0;
        $tamano = count($arrayDeCaracteres);
        for ($i=$tamano; $i > 0; $i--)
        {
            $vecInvertido[$cont] = $arrayDeCaracteres[$i - 1];
            $cont++;
        }
        return $vecInvertido;
    }

    function LeerArray($palabra)
    {
        foreach ($palabra as $value)
        {
            echo $value;
        }
    }

?>