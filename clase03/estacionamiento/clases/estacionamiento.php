<?php
    require_once "./clases/vehiculo.php";
    class Estacionamiento
    {
        public static function Guardar($unAuto)
        {
            /*
            guardar toma el vehiculo y lo guarda en un archivo
            */
            //var_dump($unAuto);    //para saber si llega el objeto
            $archivo = fopen("./archivos/estacionados.txt", "a");
            $renglon = $unAuto->patente."-".$unAuto->fechaIngreso."\n";
            fwrite($archivo, $renglon);
        }

        public static function Sacar($unAuto)
        {
            /*
            1-Leer con explode
            2-Verificar que este en estacionados.txt
            3-Calcular costo strtotime
            4-Sacar array de estacionados.txt
            5-Guardar estacionados.txt
            6-Guardar facturados
            */
            $estacionados = Estacionamiento::LeerEstacionados();
            var_dump($estacionados);
        }

        private static function LeerEstacionados()
        {
            $arrayVehiculos = array();
            $archivo = fopen("./archivos/estacionados.txt", "r");
            while (!feof($archivo))
            {
                $renglon = fgets($archivo);
                $vehiculo = explode("-", $renglon);
                array_push($arrayVehiculos, $vehiculo);
            }
            return $arrayVehiculos;
        }
    }
?>