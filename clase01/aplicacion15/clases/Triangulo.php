<?php
    require_once "./clases/FiguraGeometrica.php";
    
    class Triangulo extends FiguraGeometrica
    {
        private $_base;
        private $_altura;

        public function __construct($b, $h, $color = "red")
        {
            $this->_base = $b;
            $this->_altura = $h;
            $this->CalcularDatos();
            $this->_color = $color;
        }

        protected function CalcularDatos()
        {
            $hipotenusa = (int)pow(pow($this->_base, 2) + pow($this->_altura, 2), (1/2));
            $this->_perimetro = ($hipotenusa * 2) + $this->_base;
            $this->_superficie = ($this->_base * $this->_altura) / 2;
        }

        public function Dibujar()
        {
            $puntos = 1;
            $triangulo = "<font color=\"" . $this->_color . "\">";
            for ($i=0; $i < $this->_altura; $i++)
            {
                if ($puntos <= $this->_base)
                {
                    for ($k=$this->_altura - $i; $k > 0; $k--)
                    {
                        $triangulo .= "&nbsp;";
                    }
                    for ($j=0; $j < $puntos; $j++)
                    {
                        $triangulo .= "*";
                    }
                    $puntos += 2;
                }
                $triangulo .= "<br/>";
            }
            $triangulo .= "</font>";
            return $triangulo;
        }

        public function ToString()
        {
            $cadena = "TRIÁNGULO<br/>" . $this->Dibujar();
            $cadena .= "Base: " . $this->_base . "<br/>Altura: " . $this->_altura . "<br/>";
            $cadena .= parent::ToString();
            return $cadena;
        }
    }
?>