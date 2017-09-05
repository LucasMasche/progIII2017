<?php
    require_once "./clases/FiguraGeometrica.php";

    class Rectangulo extends FiguraGeometrica
    {
        private $_ladoUno;
        private $_ladoDos;

        public function __construct($l1, $l2, $color = "red")
        {
            $this->_ladoUno = $l1;
            $this->_ladoDos = $l2;
            $this->CalcularDatos();
            $this->_color = $color;
        }

        protected function CalcularDatos()
        {
            $this->_perimetro = ($this->_ladoUno * 2) + ($this->_ladoDos * 2);
            $this->_superficie = $this->_ladoUno * $this->_ladoDos;
        }

        public function Dibujar()
        {
            $rectangulo = "<font color=\"" . $this->_color . "\">";
            for ($i=0; $i < $this->_ladoDos; $i++)
            {
                for ($j=0; $j < $this->_ladoUno; $j++)
                { 
                    $rectangulo .= "*";
                }
                $rectangulo .= "<br/>";
            }
            $rectangulo .= "</font>";
            return $rectangulo;
        }

        public function ToString()
        {
            $cadena = "RECTÁNGULO<br/>" . $this->Dibujar();
            $cadena .= "Base: " . $this->_ladoDos . "<br/>Altura: " . $this->_ladoUno . "<br/>";
            $cadena .= parent::ToString();
            return $cadena;
        }
    }
?>