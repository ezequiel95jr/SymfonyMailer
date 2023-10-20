<!DOCTYPE html>
<?php
  $tituloPagina = "Symfony Mailer Demo";
  include_once("Estructura/encabezado.php");
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
    <div class="row">
    <div class="col-4">
        <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Inicio de Symfony Mailer</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Problemas con SwiftMailer</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Resolución con Symfony Mailer</a>
        </div>
    </div>
    <div class="col-8">
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <button><h4 id="list-item-1" style = "text-decoration: underline">Inicio de Symfony Mailer</h4></button> <br><br>
        <p>
        El componente Symfony Mailer se lanzó por primera vez en Symfony 4.3, lanzado en mayo de 2019. Desde entonces, se ha trabajado para mejorarlo agregando más proveedores
        externos y agregando algunas funciones faltantes que ya estaban disponibles en Swiftmailer, como la compatibilidad con DKIM y firma de correo electrónico.
        A partir de Symfony 5.3, todas las excelentes funciones de Swiftmailer y más están disponibles en Symfony Mailer.
        Por lo tanto, finaliza oficialmente el mantenimiento de Swiftmailer en favor de Symfony Mailer, a finales de noviembre de 2021 , al mismo tiempo que el lanzamiento de Symfony 5.4 LTS y 6.0.
        Symfony Mailer en realidad iba a llamarse Swiftmailer versión 7 y el trabajo comenzó exactamente como la siguiente versión principal de Swiftmailer.
        </p>
       <br>
        <button><h4 id="list-item-2" style = "text-decoration: underline">Problemas con SwiftMailer</h4></button> <br><br>
        <p>
        Durante años, se ha intentado trabajar en la modernización de la base del código de Swiftmailer paso a paso, intentando introducir espacios de nombres, pasar
        al cargador automático de Composer, intentar eliminar la "secuencia de inicio" especial, intentar cambiar a los componentes de inyección de dependencia
        y despachador de eventos de Symfony. El tema es que Swiftmailer sufre muchos más problemas conceptuales: tiene una herencia de clases extraña y compleja y 
        las instancias de mensajes no son objetos de datos. También carece de algunas características modernas como soporte para Twig (motor de plantillas desarrollado para el lenguaje de
        programación PHP y que nace con el objetivo de facilitar a los desarrolladores de aplicaciones web que
        utilizan la arquitectura MVC el trabajo con la parte de las vistas) para
        redactar correos electrónicos y soporte para proveedores externos. Ambas características podrían haberse agregado al código base actual, pero no habría sido ideal. 
        Otro problema es la forma en que Swiftmailer utiliza un mecanismo de "spool" para admitir correos electrónicos asincrónicos; apenas funciona y no es muy flexible. <br><br>
        <button><h4 id="list-item-3" style = "text-decoration: underline">Resolución con Symfony Mailer</h4></button> <br>
        <p>
        En lugar de intentar modernizar el código paso a paso, se copió y se comenzó a trabajar primero en aislar un componente Symfony Mime. Luego, refactorizar el resto del código base tanto como fue posible para crear Symfony Mailer.
        El resultado es Symfony Mailer. Symfony Mailer tiene bastante código en común con Swiftmailer, sacando todas las imperfecciones.

        Migrar de Swiftmailer a Symfony Mailer fue una tarea relativamente sencilla ya que los conceptos son los mismos entre los dos proyectos.
        </p>
        <h6>Objetos propios de SwiftMailer sin soporte. Ej: Swift Mailer, Swift Attachment ...</h6>
        <img src="../SymfonyMailerTutorial/SwiftMailer.png" alt="obj-transport"><br><br>
        <h6>Reemplazo por el objeto Mailer e Email mejorados de SwiftMailer</h6>
        <img src="../SymfonyMailerTutorial/SymfonyMailer.png" alt="obj-transport"> <br><br>
        </p>
        </div>
        <button><a href="#list-item-1">Back to the top</a></button>
    </div>
    </div>
    </body>
</html>
<?php
      include_once("Estructura/pie.php");
?>