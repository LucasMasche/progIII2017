<?php
    require_once "./clases/aula.php";

    class Instituto
    {
        private $_nombre;
        private $_aulas;

        public function __construct($nombre)
        {
            $this->_nombre = $nombre;
        }

        public function CargarAula($aula)
        {
            if ($this->_aulas != null)
            {
                array_push($this->_aulas, $aula);
            }
            else
            {
                $this->_aulas = array($aula);
            }
        }

        public function BuscarAlumnoPorAula($nombre)
        {
            $band = false;
            $cadena = "";
            $aulas = "AULAS: ";
            foreach ($this->_aulas as $aula)
            {
                foreach ($aula->GetAlumnos() as $alumno)
                {
                    if ($alumno->GetNombre() == $nombre || $alumno->GetApellido() == $nombre)
                    {
                        $aulas .= $aula->GetNombre() . "&bnsp;";
                        if (!$band)
                        {
                            $cadena .= $alumno->MostrarDatos() . "<br/>";
                        }
                    }
                }
            }

            if ($band)
            {
                $cadena .= "<br/>".$aulas;
            }
            else
            {
                $cadena = "No se encontro el alumno en ningun aula";
            }
            return $cadena;
        }
    }
?>