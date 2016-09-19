<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>      
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
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
                    <!-- Formulario -->
                    <form action="index2.php" method="post">
                        <p>Introduzca Su Nombre De Usuario</p>
                        <!-- Caja de texto donde introduciremos el nombre de usuario -->
                        <input name="usuario_nombre" class="form-control" type="text" placeholder="Introduzca Su Usuario">
                        <br>
                        <p>Introduzca Su Contraseña</p>
                        <!-- Caja de texto donde introduciremos la contraseña -->
                        <input name="usuario_pass" class="form-control" type="password" placeholder="Introduzca Su Contraseña">
                        <br>
                        <button class="btn btn-block btn-success" type="submit">ENVIAR</button>
                    </form>                    
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