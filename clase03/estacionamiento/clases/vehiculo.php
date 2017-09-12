<?php
    class Vehiculo
    {
        public $patente;
        public $fechaIngreso;
        public $fechaEgreso;
        public $importe;

        public function __construct($patente, $fechaIngreso, $importe = "10")
        {
            $this->patente = $patente;
            $this->fechaIngreso = $fechaIngreso;
            $this->importe = $importe;
        }
    }
?>