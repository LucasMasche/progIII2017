<?php

    $operador = "/";
    $op1 = 10;
    $op2 = 2;

    echo $op1 . " " . $operador . " " . $op2 . " = ";
    switch ($operador)
    {
        case '+':
            echo $op1 + $op2;
            break;
        
        case '-':
            echo $op1 - $op2;
            break;
        case '*':
            echo $op1 * $op2;
            break;
        case '/':
            if ($op2 != 0)
            {
                echo $op1 / $op2;
            }
            else
            {
                echo "ERROR!!!";
            }
            break;
    }

?>