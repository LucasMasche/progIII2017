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

        public function BuscarAlumnoPorAula($nombreOApellido , $apellido = "")
        {
            $band = false;
            $cadena = "";
            $aulas = "AULAS: ";
            if ($apellido != "")
            {
                foreach ($this->_aulas as $aula)
                {
                    foreach ($aula->GetAlumnos() as $alumno)
                    {
                        if (strtolower($alumno->GetNombre()) == strtolower($nombreOApellido) &&
                            strtolower($alumno->GetApellido()) == strtolower($apellido))
                        {
                            $aulas .= $aula->GetNombre() . "&nbsp;";
                            if (!$band)
                            {
                                $cadena .= $alumno->MostrarDatos() . "<br/>";
                                $band = true;
                            }
                        }
                    }
                }
            }
            else
            {
                foreach ($this->_aulas as $aula)
                {
                    foreach ($aula->GetAlumnos() as $alumno)
                    {
                        if (strtolower($alumno->GetNombre()) == strtolower($nombreOApellido) ||
                            strtolower($alumno->GetApellido()) == strtolower($nombreOApellido))
                        {
                            $aulas .= $aula->GetNombre() . "&nbsp;";
                            if (!$band)
                            {
                                $cadena .= $alumno->MostrarDatos() . "<br/>";
                                $band = true;
                            }
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
                $cadena = "No se encontro el alumno en ningún aula";
            }
            return $cadena;
        }

        public function BuscarAlumnoPorLibreta($nroLibreta)
        {
            $band = false;
            $cadena = "";
            $aulas = "AULAS: ";
            foreach ($this->_aulas as $aula)
            {
                foreach ($aula->GetAlumnos() as $alumno)
                {
                    if ($alumno->GetNroLibreta() == $nroLibreta)
                    {
                        $aulas .= $aula->GetNombre() . "&nbsp;";
                        if (!$band)
                        {
                            $cadena .= $alumno->MostrarDatos() . "<br/>";
                            $band = true;
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
                $cadena = "No se encontro ningún alumno con ese número de libreta en ningún aula";
            }
            return $cadena;
        }

        public function BuscarProfesorPorLegajo($legajo)
        {
            $band = false;
            $cadena = "";
            $aulas = "AULAS: ";
            foreach ($this->_aulas as $aula)
            {
                if ($aula->GetProfesor()->GetLegajo() == $legajo)
                {
                    $aulas .= $aula->GetNombre() . "&nbsp;";
                    if (!$band)
                    {
                        $cadena .= $aula->GetProfesor()->MostrarDatos() . "<br/>";
                        $band = true;
                    }
                }
            }
            
            if ($band)
            {
                $cadena .= "<br/>".$aulas;
            }
            else
            {
                $cadena = "No se encontro ningún profesor con ese número de legajo en ningún aula";
            }
            return $cadena;
        }

        public function CantidadAulasPorLibreta($nroLibreta)
        {
            $band = false;
            $cadena = "";
            $cantidadAulas = 0;
            foreach ($this->_aulas as $aula)
            {
                foreach ($aula->GetAlumnos() as $alumno)
                {
                    if ($alumno->GetNroLibreta() == $nroLibreta)
                    {
                        $cantidadAulas++;
                        if (!$band)
                        {
                            $band = true;
                        }
                    }
                }
            }
            
            if ($band)
            {
                $cadena .= $cantidadAulas;
            }
            else
            {
                $cadena = "No se encontro ningún alumno con ese número de libreta en ningún aula";
            }
            return $cadena;
        }

        public function BuscarPersonaPorAula($apellido)
        {
            $personasEncontradas = array();
            $cadenaRetorno = "";
            foreach ($this->_aulas as $aula)
            {
                if (strtolower($aula->GetProfesor()->GetApellido()) == strtolower($apellido))
                {
                    if ($personasEncontradas == null)
                    {
                        array_push($personasEncontradas, $aula->GetProfesor());
                    }
                    else
                    {
                        $estaEncontrada = false;
                        foreach ($personasEncontradas as $persona)
                        {
                            if (is_a($persona, "Profesor"))
                            {
                                if ($persona == $aula->GetProfesor())
                                {
                                    $estaEncontrada = true;
                                }
                            }
                        }
                        if ($estaEncontrada)
                        {
                        }
                        else
                        {
                            array_push($personasEncontradas, $aula->GetProfesor());
                        }
                    }
                }
                foreach ($aula->GetAlumnos() as $alumno)
                {
                    if (strtolower($alumno->GetApellido()) == strtolower($apellido))
                    {
                        if ($personasEncontradas == null)
                        {
                            array_push($personasEncontradas, $aula->GetAlumnos());
                        }
                        else
                        {
                            $estaEncontrada = false;
                            foreach ($personasEncontradas as $persona)
                            {
                                if (is_a($persona, "Alumno"))
                                {
                                    foreach ($aula->GetAlumnos() as $alu)
                                    {
                                        if ($persona == $alu)
                                        {
                                            $estaEncontrada = true;
                                        }
                                    }
                                }
                            }
                            if ($estaEncontrada)
                            {
                            }
                            else
                            {
                                array_push($personasEncontradas, $alumno);
                            }
                        }
                    }
                }
            }
            
            if ($personasEncontradas != null)
            {
                //var_dump($personasEncontradas);
                foreach ($personasEncontradas as $persona)
                {
                    if (is_a($persona, "Profesor"))
                    {
                        $cadenaRetorno .= "PROFESOR<br/>";
                        $cadenaRetorno .= $persona->MostrarDatos()."<br/>";
                        $cadenaRetorno .= $this->BuscarAulasPorProfesor($persona)."<br/><br/>";
                    }
                    if (is_a($persona, "Alumno"))
                    {
                        $cadenaRetorno .= "ALUMNO<br/>";
                        $cadenaRetorno .= $persona->MostrarDatos()."<br/>";
                        $cadenaRetorno .= $this->BuscarAulasPorAlumno($persona)."<br/><br/>";
                    }
                }
            }
            else
            {
                $cadenaRetorno = "No se encontro ninguna persona en ningún aula";
            }
            return $cadenaRetorno;
        }

        private function BuscarAulasPorProfesor($profesor)
        {
            $cadenaRetorno = "AULAS: ";
            $aulasEncontradas = array();
            foreach ($this->_aulas as $aula)
            {
                if ($aula->GetProfesor() == $profesor)
                {
                    array_push($aulasEncontradas, $aula->GetNombre());
                }
            }
            if ($aulasEncontradas != null)
            {
                foreach ($aulasEncontradas as $nombreAula)
                {
                    $cadenaRetorno .= $nombreAula."&nbsp;";
                }
            }
            else
            {
                $cadenaRetorno .= "Ningún aula";
            }
            return $cadenaRetorno;
        }

        public function BuscarAulasPorAlumno($alumno)
        {
            $cadenaRetorno = "AULAS: ";
            $aulasEncontradas = array();
            foreach ($this->_aulas as $aula)
            {
                foreach ($aula->GetAlumnos() as $alu)
                {
                    if ($alu == $alumno)
                    {
                        array_push($aulasEncontradas, $aula->GetNombre());
                    }
                }
            }
            if ($aulasEncontradas != null)
            {
                foreach ($aulasEncontradas as $nombreAula)
                {
                    $cadenaRetorno .= $nombreAula."&nbsp;";
                }
            }
            else
            {
                $cadenaRetorno .= "Ningún aula";
            }
            return $cadenaRetorno;
        }
    }
?>