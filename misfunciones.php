<?php

function conectaBBDD(){
    require('configuracion.php');
    $mysqli = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $mysqli -> query("SET NAMES UTF8");
    return $mysqli;
}

?>