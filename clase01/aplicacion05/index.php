<?php

    //$num entre 20 y 60
    $num = 30;

    echo "Entre 20 y 60<br/>\$num = $num<br/>";

    function Numero($num)
    {
        switch ($num)
        {
            case '1':
                $letras = "uno";
                break;
            case '2':
                $letras = "dos";
                break;
            case '3':
                $letras = "tres";
                break;   
            case '4':
                $letras = "cuatro";
                break;
            case '5':
                $letras = "cinco";
                break;
            case '6':
                $letras = "seis";
                break;
            case '7':
                $letras = "siete";
                break;   
            case '8':
                $letras = "ocho";
                break;
            case '9':
                $letras = "nueve";
                break;
            default:
                $letras =  "";
                break;
        }
        return $letras;
    }

    if ($num == 20)
    {
        echo "veinte";
    }
    else if ($num >= 21 && $num <= 29)
    {
        echo "veinti";
        $num -= 20;
        echo Numero($num);
        $num += 20;
    }
    else if ($num == 30)
    {
        echo "treinta";
    }
    else if ($num >= 31 && $num <= 39)
    {
        echo "treinta y ";
        $num -= 30;
        echo Numero($num);
        $num += 30;
    }
    else if ($num == 40)
    {
        echo "cuarenta";
    }
    else if ($num >= 41 && $num <= 49)
    {
        echo "cuarenta y ";
        $num -= 40;
        echo Numero($num);
        $num += 40;
    }
    else if ($num == 50)
    {
        echo "cincuenta";
    }
    else if ($num >= 51 && $num <= 59)
    {
        echo "cincuenta y ";
        $num -= 50;
        echo Numero($num);
        $num += 50;
    }
    else if ($num == 60)
    {
        echo "sesenta";
    }


?>