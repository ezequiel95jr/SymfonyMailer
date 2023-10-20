<?php
    require_once '../vendor/autoload.php';
    include_once '../Util/utiles.php';
    use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
    use Symfony\Component\Mailer\Transport;
    use Symfony\Component\Mailer\Mailer;
    use Symfony\Component\Mime\Email;
    use Symfony\Component\Mime\Part\DataPart;


    function email_enviado(){

    //CREAMOS EL OBJETO TRANSPORTE
    $transport = Transport::fromDsn('smtp://example@gmail.com:password@smtp.gmail.com:587');

    //Creamos el objeto Mailer y le pasamos como parametro el obj transport
    $mailer_obj = new Mailer($transport);

    //Creamos el objeto Email
    $email = (new Email());

    //From adress
    $email->from('example@gmail.com');

    $datos = data_submitted();
    $email_destino = $datos['email'];
    $texto_email = $datos['message'];
    $asunto = $datos['subject'];
    $archivo = $_FILES['archivo'];
    //$archivo_prueba = "Archivos/prueba.txt";
    if(isset($archivo)){
        $nombre_archivo = $_FILES['archivo']['name'];
        $archivo_tmp = $_FILES['archivo']['tmp_name'];

        $direccion_archivo = "../Archivos/".$nombre_archivo;

        if (move_uploaded_file($archivo_tmp, $direccion_archivo)) {
            $email->attachFromPath($direccion_archivo);
        }
    }
    //To Adress
    $email->to(
        $email_destino
    );
    //Set a subjet
    $email->subject($asunto);
    //Set a text body
    $email->text('The plain text version of the message.');

    //Set the HTML body
    $email->html('
    <h1 style = text-align: "center">'.$texto_email.' </h1> 
    ');
    // enviar el mail

        if(!($mailer_obj -> send($email))){
            $message = "su correo electrónico se envió correctamente." ;
        }
        else{
            $message = "hubo un error al enviar su correo electrónico.";
        }
        return $message;
    }
