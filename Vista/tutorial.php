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
        <a class="list-group-item list-group-item-action" href="#list-item-1">Instalación de SymfonyMailer</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Configuración</a>
        <a class="list-group-item list-group-item-action" href="#list-item-5">Seguridad de Google</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Envío controlado</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Encapsulaminto de datos y formulario</a>
        </div>
    </div>
    <div class="col-8">
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

        <!-- INSTALACIÓN -->
        <button><h4 id="list-item-1" style = "text-decoration: underline">Instalación de SymfonyMailer</h4></button> <br><br>
        <p>
            <a href="https://getcomposer.org/">Composer</a> es necesaria para la instalación de nuestra librería. Una vez descargada
            podemos instalar SymfonyMailer atravez de la terminal en VisualStudio o en nuestra CMD ubicandonose en la carpeta en donde necesitemos los archivos necesarios
            para su posterior uso.
            Usando "composer require symfony/mailer" nos instalará todos lo que necesitamos.
        </p>
        <img src="../SymfonyMailerTutorial/composer1.jpg"alt="composer">
        <br>
        <p>Una vez creadas todas las carpetas, necesitaremos crear el archivo de control donde procedemos a configurar nuestro servicio.</p>

        <!-- CONFIGURACION -->
        <button><h4 id="list-item-2" style = "text-decoration: underline">Configuración</h4></button> <br><br>

        <p>Creamos un archivo control.php donde vamos a requerir todas estas referencias: <br><br>
            require_once './vendor/autoload.php';<br>
            include_once 'utiles.php'; <br>
            use Symfony\Component\Mailer\Exception\TransportExceptionInterface;<br>
            use Symfony\Component\Mailer\Transport;<br>
            use Symfony\Component\Mailer\Mailer;<br>
            use Symfony\Component\Mime\Email;<br>
            use Symfony\Component\Mime\Part\DataPart;<br><br>
            Creamos nuestro objeto Transport: <br>
            <img src="../SymfonyMailerTutorial/transport-obj.png" alt="obj-transport"> <br>
            Acá tendremos que poner nuestro correo electrónico administrador desde donde se van a enviar los mails. Separados por <strong>":"</strong> le sigue la contraseña autogenerada
            por Google en este caso. <br>
            Luego tenemos "@smpt.gmail.com:587" que es el servicio elegido para este proyecto. <br><br>
            Creamos las demas clases necesarias: 
            <img src="../SymfonyMailerTutorial/objs.png" alt=""> <br>
            Por último vamos a setear los parametros necesarios para el envío: <br>
                //From adress <br>
                <strong>$email->from('ejemplo@gmail.com');</strong>
        </p>
        <br><br>
        <!-- Seguridad de Google -->
        <button><h4 id="list-item-5" style = "text-decoration: underline">Seguridad de Google</h4></button> <br><br>
        <p>
           Lo primero que tenemos que hacer es darle permiso a nuestra cuenta de gmail para que aplicaciones de terceros (PHP) puedan mandar correos.
           Vamos a ir a la configuración y luego a Seguridad.
           <img src="../SymfonyMailerTutorial/Google-Seguridad.png" alt="seguridad"> <br>
        Ahora vamos a "Verificación en dos pasos".
        <img src="../SymfonyMailerTutorial/Verificacion.png" alt=""> <br><br>
        Le damos a "Empezar" para continuar y nos pedirá un celular para verificación.
        <img src="../SymfonyMailerTutorial/Telefono.png" alt=""> <br>
        Le damos a "Continuar", ingresamos nuestro número celular, nos enviará un codigo a nuestro celular y lo colocamos en el fomulario de Google.
        Vamos a "Contraseña de aplicaciones" para agregar una nueva aplicación donde se generará una nueva contraseña para poder usarla en nuestro SMTP.
        <hr>
        <img src="../SymfonyMailerTutorial/App.png" alt=""> <br> <br>
        Luego creamos una App Name (SymfonyMailer en este caso) y nos otorgará nuestra contraseña.
        <img src="../SymfonyMailerTutorial/app2.png" alt=""> <br> <hr>
        </p>
        <!-- Mail controlado -->
        <button><h4 id="list-item-3" style = "text-decoration: underline">Envío de mail controlado por nosotros: </h4></button> <br><br>
        <img src="../SymfonyMailerTutorial/ejemplos.png" alt="ejemplos">
        <p><br><br>
            Por último llamamos al metodo <strong style = "color: red">send</strong> del objeto Mailer y le enviamos como parámetro nuestro objeto "$email". <br>
            <strong>$mailer_obj -> send($email);</strong> <br><br>
            Al abrir nuestro localhost con dirección a este archivo, se enviará automaticamente el correo cargado. 

        </p>

        <!-- Encapsulamiento -->
            <button><h4 id="list-item-4" style = "text-decoration: underline">Encapsulamiento de datos y formulario</h4></button> <br><br>
        <p>
            Para obtener datos y enviar mails a un correo solicitado, basta con crear un formulario y enviarnos através de <strong>method = "post"</strong> a nuestro
            archivo control.php. <br> <br>
            <img src="../SymfonyMailerTutorial/data_submitted.png" alt="data"> <br> <br>
            En caso de que el email que vayamos a enviar contenga un archivo, copiamos el archivo a una carpeta temporal <br>
            <strong>archivo_temp = $_FILES['miarchivo']['name'];</strong> <br>
            Usamos $_FILES porque de la otra forma no leía ni reconocia el archivo. Una vez tengamos el $archivo_temp y su respectivo nombre ($nombre_archivo), movemos nuestro archivo 
            temporal a nuestra carpeta donde guardamos los archivos adjuntos. 
            Si todo sale bien y la condicion se cumple, enviamos el archivo con el metodo <br>
            <strong>$email->attachFromPath($direccion_archivo)</strong> <br>
            de la clase <strong>Email</strong> y le mandamos por parámetro la dirección en donde lo guardamos. <br> <br>
            El resto del procedimiento es igual al paso anterior.
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