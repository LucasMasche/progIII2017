<?php
    require_once "./clases/IMostrarPersonas.php";
    require_once "./clases/alumno.php";
    require_once "./clases/profesor.php";

    class Aula implements IMostrarPersonas
    {
        private $_nombre;
        private $_profesor;
        private $_alumnos;

        public function __construct($nombre, $profesor)
        {
            $this->_nombre = $nombre;
            $this->_profesor = $profesor;
        }

        public function GetNombre()
        {
            return $this->_nombre;
        }

        public function GetAlumnos()
        {
            return $this->_alumnos;
        }

        public function MostrarPersonas()
        {
            $cadena = "";
            $cadena .= "AULA: ".$this->_nombre."<br/><br/>PROFESOR<br/>".$this->_profesor->MostrarDatos() ."<br/>ALUMNOS<br/>";
            foreach ($this->_alumnos as $alu)
            {
                $cadena .= $alu->MostrarDatos() . "<br/>";
            }
            return $cadena;
        }

        public function CargarAlumno($alumno)
        {
            if ($this->_alumnos != null)
            {
                array_push($this->_alumnos, $alumno);
            }
            else
            {
                $this->_alumnos = array($alumno);
            }
        }
    }
?>