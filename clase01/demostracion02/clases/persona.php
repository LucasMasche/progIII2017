<?php

    class Persona
    {
        public $nombre;
        public $apellido;
        public $dni;

        public function __construct($nombre, $apellido = "", $dni = -1)  //a los que le asigne algo son opcionales, van todos a la derecha
        {
            $this->nombre = $nombre;

        }

        function Saludar()
        {
            echo "hola";
        }

        static function Saludar2()
        {
            echo "hola estático";
        }
    }

?>