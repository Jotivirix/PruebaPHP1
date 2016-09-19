<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>      
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php           
            
            $usuario_nombre = $_POST['usuario_nombre'];
            $usuario_pass = $_POST['usuario_pass'];
            
        ?>
        <div class="container">
            
            <!-- Div que contiene el título de la página -->
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <h1 class="text-center">Ejemplo de Inicio de Sesión en PHP</h1>
                </div>
                <div class="col-lg-1"></div>
            </div>
            
            <br> <!-- Salto entre los div -->
            
            <!-- Div que contiene el formulario de acceso -->
            <div class="row">                
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <?php
                        echo '<h2 class="text-center"> Tu Nombre de Usuario Es: '.$usuario_nombre.'</h1>';
                        echo '<h3 class="text-center"> Tu Contraseña Es: '.$usuario_nombre.'</h1>';
                    ?>
                    <a href="./index.php" style="text-decoration: none">
                        <button class="btn btn-block btn-warning">Volver a Inicio</button>
                    </a>
                </div>
                <div class="col-lg-3"></div>                
            </div>
            
        </div>
        <?php
        
            
        
        ?>
    </body>

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js.js"></script>
    
</html>