<?php
$tituloPagina = "Symfony Mailer Demo";
include_once("Estructura/encabezado.php");
include_once ("../Control/control.php");
$mensaje = email_enviado();
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="alert alert-light" role="alert" align = "center">
            <?php
            echo $mensaje;
            ?>
        <button type="button" class="btn btn-outline-primary"><a href="http://localhost/SymfonyMailerFinal/Vista/Estructura/index.php">Back</a></button>
    </div>
    </body>
</html> 
<?php
      include_once("Estructura/pie.php");
?>
