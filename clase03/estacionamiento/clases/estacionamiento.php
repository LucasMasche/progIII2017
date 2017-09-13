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
            $renglon = $unAuto->patente."_".$unAuto->fechaIngreso."\n";
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
            $estacionados = self::LeerEstacionados();
            //var_dump($estacionados);
            //verifico que esté en el estacionamiento por la patente
            if (self::EstaEstacionado($estacionados, $unAuto))
            {
                $costo = self::CalcularCosto($unAuto);
                self::QuitarDeEstacionados($estacionados, $unAuto);
                self::GuardarFacturados($unAuto, $costo);
                return true;
            }
            return false;
        }

        private static function LeerEstacionados()
        {
            $arrayVehiculos = array();
            $archivo = fopen("./archivos/estacionados.txt", "r");
            while (!feof($archivo))
            {
                $renglon = fgets($archivo);
                //evito que agregue al array el último renglón vacío
                if ($renglon != null)
                {
                    $vehiculo = explode("_", $renglon);
                    array_push($arrayVehiculos, $vehiculo);
                }
            }
            return $arrayVehiculos;
        }

        private static function EstaEstacionado($arrayEstacionados, $unAuto)
        {
            foreach ($arrayEstacionados as $autoEstacionado)
            {
                if ($unAuto->patente == $autoEstacionado[0])
                    return true;
            }
            return false;
        }

        private static function CalcularCosto($unAuto)
        {
            $unixIngreso = strtotime($unAuto->fechaIngreso);
            $unixEgreso = strtotime(date("Y-m-d H:i:s"));
            $segundosEstacionado = $unixEgreso - $unixIngreso;
            $costo = $segundosEstacionado * $unAuto->importe;
            return $costo;
        }

        private static function QuitarDeEstacionados($arrayEstacionados, $unAuto)
        {
            $archivo = fopen("./archivos/estacionados.txt", "w");
            foreach ($arrayEstacionados as $autoEstacionado)
            {
                if ($autoEstacionado[0] != $unAuto->patente)
                {
                    $renglon = $autoEstacionado[0]."_".$autoEstacionado[1];
                    fwrite($archivo, $renglon);
                }
            }
            return null;
        }

        private static function GuardarFacturados($unAuto, $costo)
        {
            $archivo = fopen("./archivos/facturados.txt", "a");
            $renglon = $unAuto->patente."_".$unAuto->fechaIngreso."_".date("Y-m-d H:i:s")."_".$costo."\n";
            fwrite($archivo, $renglon);
            return null;
        }
    }
?>