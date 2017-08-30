<?php
    abstract class Persona
    {
        protected $_nombre;
        protected $_apellido;
        protected $_sexo;

        public function __construct($nombre, $apellido, $sexo)
        {
            $this->_nombre = $nombre;
            $this->_apellido = $apellido;
            $this->_sexo = $sexo;
        }

        public abstract function MostrarDatos();
    }
?>