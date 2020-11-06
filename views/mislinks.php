<?php

use models\LinksModel as LinksModel;

session_start();
require_once("../models/LinksModel.php");
if(isset($_SESSION['usuario'])){
$model = new LinksModel();
$links = $model->getAllLinksByEmail($_SESSION['usuario']['email']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="#cfd8dc blue-grey lighten-4">

    <?php
    
        if(isset($_SESSION['usuario'])){?>
            <nav class="#37474f blue-grey darken-3">
                <div class="nav-wrapper">
                <a href="#" class="brand-logo">Bienvenido <?= $_SESSION['usuario']['nombre'] ?></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="nuevo_link.php">Nuevo Link</a></li>
                        <li><a href="mislinks.php">Mis Links</a></li>
                        <li><a href="salir.php">Salir</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <?php foreach($links as $link){?>
                        <div class="col l4 m4 s12">
                            <div class="card">
                                <div class="card-image">
                                <img src="https://tecnologia-informatica.com/wp-content/uploads/2018/08/que-es-url-como-acortar-url-1.jpeg">
                                <span class="card-title"><?= $link['nombre'] ?></span>
                                </div>
                                <div class="card-content">
                                
                                </div>
                                <div class="card-action">
                                <a target="_BLANK" href="<?= $link['link']?>">Ir a la pagina</a>
                                </div>
                            </div>

                        </div>
                    <?php } ?>  

                </div>
            </div>
            
            
            


        
    <?php } else{ ?>
        <h3 class="red-text">Error de acceso</h3>
        <p>Usted no tiene permiso para estar aqui
            <a href="../index.php">Home</a>
        </p>


    <?php } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>