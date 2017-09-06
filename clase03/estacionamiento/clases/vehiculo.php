<?php
    class Vehiculo
    {
        public $patente;
        public $fechaIngreso;
        public $fechaEgreso;
        public $importe;

        public function __construct($patente)
        {
            $this->patente = $patente;
        }
    }
?>