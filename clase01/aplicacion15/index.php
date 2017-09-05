<?php
    require_once "./clases/Rectangulo.php";
    require_once "./clases/Triangulo.php";

    $rec1 = new Rectangulo(10, 5, "blue");
    $tri1 = new Triangulo(10, 5, "green");

    echo $rec1->ToString();
    echo "<br/>";
    echo $tri1->ToString();

?>