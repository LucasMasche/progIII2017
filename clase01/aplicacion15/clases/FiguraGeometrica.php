<?php
    abstract class FiguraGeometrica
    {
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        public function __construct()
        {
        }

        //seria virtual pero en php cualquier metodo puede ser modificado como si fuera virtual (en una herencia)
        public function ToString()
        {
            $cadena = "";
            $cadena .= "Color: " . $this->_color . "<br/>";
            $cadena .= "Perímetro: " . $this->_perimetro . "<br/>";
            $cadena .= "Superficie: " . $this->_superficie . "<br/>";
            return $cadena;
        }

        public abstract function Dibujar();

        protected abstract function CalcularDatos();

        public function GetColor()
        {
            return $this->_color;
        }

        public function SetColor($color)
        {
            $this->_color = $color;
        }
    }
?>