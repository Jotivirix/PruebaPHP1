<?php
    include 'misfunciones.php';
    $mysqli = conectaBBDD();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>           
        </style>
    </head>
    <body>
        <div class="container">
            <!--Div que contiene el título de la página 
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <h1 class="text-center">Ejemplo de Inicio de Sesión en PHP</h1>
                </div>
                <div class="col-lg-1"></div>
            </div>-->
        
            <?php 
            //Guardamos el usuario y la contraseña ingresada anteriormente
            $usuario_nombre = $_POST['usuario_nombre'];
            $usuario_clave = $_POST['usuario_clave'];
            //Hacemos una consulta en funcion del usuario introducido
            //$resultado_consulta = $mysqli -> query("SELECT * FROM Usuario WHERE nombre_usuario = '$usuario_nombre' OR email = '$usuario_nombre' ");
            $resultado_consulta = $mysqli -> query("SELECT * FROM Usuario where DNI = '$usuario_nombre' ");
            //Solicitamos a la base de datos que nos devuelva el numero de filas de la consulta
            $numero_dnis = $resultado_consulta -> num_rows;
                                   
            if($numero_dnis > 0){
                //Aquí habríamos obtenido un resultado al menos
                //Mostraremos el menú normal
                //Leo el campo Usuario(DNI) y Password de la Base de Datos
                $r = $resultado_consulta -> fetch_array();
                $DNI = $r['DNI'];
                $password = $r['password'];
                //$nombre = $r['nombre'];
                //$apellido = $r['apellido'];
    
                if($usuario_clave == $password){
            ?>
            
            <div class="row">                
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <?php echo '<h2 class="text-center">Bienvenido ' . $DNI . '</h2>'; ?>
                </div>
                <div class="col-lg-3"></div>                
            </div>
            
            <div class="row">                
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    
                </div>
                <div class="col-lg-3"></div>                
            </div>
            
            <?php
            }
            else {   
            ?>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h3 class="text-center">El Usuario Y/O La Contraseña Son Incorrectos</h3>
                </div>
                <div class="col-lg-2"></div>
            </div>
            
            <?php
                }
            }
            ?>
        </div>
    </body>

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js.js"></script>
    
</html>