<?php
    include 'misfunciones.php';
    $mysqli = conectaBBDD();

    //Leo los parámetros de index.php
    $usuario_nombre = $_POST['usuario_nombre'];
    $usuario_clave = $_POST['usuario_clave'];

    //Hago la consulta a la base de datos
    $resultado_consulta = $mysqli->query("SELECT * FROM Usuario where DNI = '$usuario_nombre' ");
    //Solicitamos a la base de datos que nos devuelva el numero de filas de la consulta
    $numero_dnis = $resultado_consulta->num_rows;

    //Como sólamente se puede obtener un DNI, ya que es clave primaria
    //Gracias a este if tratamos el resultado, si no sería recorrido con un bucle for
    if ($numero_dnis > 0) {
        //Aquí habríamos obtenido un resultado al menos
        //Mostraremos el menú normal
        //Leo el campo Usuario(DNI) y Password de la Base de Datos
        $r = $resultado_consulta->fetch_array();
        $dni = $r['dni'];
        $password = $r['password'];
        $nombre = $r['nombre'];
        $apellido = $r['apellido'];

        if ($usuario_clave == $password) {
            //Inicio la sesión
            session_start();
            //Guardo los datos del usuario que ha accedido
            $_SESSION['dni'] = $dni;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido'] = $apellido;
            require 'menu_inicio.php';
        } else {
            require 'mensaje_error.php';
        }
    } 
    else {
        require 'mensaje_error.php';
    }
?>