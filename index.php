<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Links</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="#cfd8dc blue-grey lighten-4">
    
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12">
                
            </div>
            <div class="col l4 m4 s12">
                <h3 class="center"> App Links</h3>
                <h5 class="center">Guarda tus páginas web</h5>
           
                <p class="red-text">
                    <?php 
                        session_start();
                        if(isset($_SESSION['error'])) {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    
                    ?>
                </p>
            <form action="controllers/LoginController.php" method="POST">
                <div class="input-field">
                    <input id="email" type="email" name="email">
                    <label for="email">Ingrese su email</label>
                </div>
                <div class="input-field">
                    <input id="clave" type="password" name="clave">
                    <label for="clave">Ingrese su clave</label>
                </div>
                <button class="btn black ancho-100">Iniciar sesion</button>
                <p class="center">
                    <a href="registro.php">Registrate aquí</a>
                </p>    

            </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>