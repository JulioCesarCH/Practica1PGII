<?php
// conexion Julio Cesar Cueva
$conmy = new mysqli("104.248.76.18", "hans", '$xHPtv42PfqTkcbE2', "san_pio");
if ($conmy->connect_errno) {
    echo "Fallo al conectar a Base de Datos: (" . $conmy->connect_errno . ") " . $conmy->connect_error;
}
//echo $conmy->host_info . "\n";

?>