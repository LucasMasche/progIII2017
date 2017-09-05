<?php
    require_once "./clases/persona.php";

    class Profesor extends Persona
    {
        private $_legajo;

        public function __construct($nombre, $apellido, $sexo, $legajo)
        {
            parent::__construct($nombre, $apellido, $sexo);
            $this->_legajo = $legajo;
        }

        public function GetLegajo()
        {
            return $this->_legajo;
        }

        public function GetApellido()
        {
            return $this->_apellido;
        }

        public function MostrarDatos()
        {
            $cadena = "";
            $cadena .= "Nombre: ".$this->_nombre."<br/>Apellido: ".$this->_apellido;
            $cadena .= "<br/>Sexo: ".$this->_sexo."<br/>Legajo: ".$this->_legajo."<br/>";
            return $cadena;
        }
    }
?>