<!DOCTYPE html>
<?php
  $tituloPagina = "Symfony Mailer Demo";
  include_once("encabezado.php");
?>
<html>
  <head>
    <title>Envio de Mail</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
  </head>
  <body>
    <div class="container">
      <hr>
        <div class="row justify-content-center">
        <div class="col-md-9"><br>

          <form role="form" method="post" enctype="multipart/form-data" action = "../vista.php" class = "row g-3 needs-validation" novalidate>
            <div class="row">
              <div class="col-sm-9 form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder = "ejemplo@gmail.com" maxlength="50" required>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-9 form-group">
                <label for="email">Asunto</label>
                <input type="text" class="form-control" id="subject" name="subject" value="" maxlength="50" required>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-9 form-group">
                <label for="email">Mensaje:</label>
                <textarea type="textarea" class="form-control" id="message" name="message"
                placeholder="Tu mensaje aquí" maxlength="50" rows="4"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-9 form-group">
                <label for="name">Archivo:</label>
                <input type="file" class="form-control" id="archivo" name="archivo">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-9 form-group">
                <button type="submit" class="btn btn-lg btn-success btn-block" 
                id="sendmail" name="sendmail" onsubmited >Enviar</button>
              </div>
            </div>
          </form>
        </div>
        </div>
    </div>
    <script>
          (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
    </script>
  </body>
</html>
<?php
      include_once("pie.php");
?>

