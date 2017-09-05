<?php
    require_once "./clases/persona.php";

    class Alumno extends Persona
    {
        private $_nroLibreta;

        public function __construct($nombre, $apellido, $sexo, $nroLibreta)
        {
            parent::__construct($nombre, $apellido, $sexo);
            $this->_nroLibreta = $nroLibreta;
        }

        public function GetNombre()
        {
            return $this->_nombre;
        }

        public function GetApellido()
        {
            return $this->_apellido;
        }

        public function GetNroLibreta()
        {
            return $this->_nroLibreta;
        }

        public function MostrarDatos()
        {
            $cadena = "";
            $cadena .= "Nombre: ".$this->_nombre."<br/>Apellido: ".$this->_apellido;
            $cadena .= "<br/>Sexo: ".$this->_sexo."<br/>Nro de libreta: ".$this->_nroLibreta."<br/>";
            return $cadena;
        }
    }
?>