<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'views/layouts/resources/styles.php'?>
</head>

<body class="root">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText navLogin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <img src="https://ichirakuramenco.com/wp-content/uploads/2020/05/cropped-Logo1-1-1-4.png" width="100px" />
                    <img src="https://ichirakuramenco.com/wp-content/uploads/elementor/thumbs/LOGO-CHI-GRAN-p9tyk7dshpshzgdlw2r1j5budzbjvxszg3avmoxhu0.png" alt="" width="100px" />
                </ul>
                <span class="navbar-text">
                    <button class="btn btn-dark">
                        <img class="dlc" src="https://aux.iconspalace.com/uploads/209736328409232067.png" alt="">
                        <a href="<?php echo constant('URL') ?>/registrarse">Registrarse</a>
                    </button>
                </span>
            </div>
        </div>
    </nav>
    <br>
    <div class="content" style="height: 70vh;">
        <h1>¿Olvidaste tu contraseña?</h1>
        <hr><br>
        <p>No te preocupes, para recuperar tu contraseña nada mas ingresa el correo electrónico que esta asociado a tu cuenta y te enviaremos un mensaje al correo para que puedas reestablecer tu contraseña.</p>

        <br>

        <form action="<?php echo constant('URL')?>/password_reset/send" method="post">
            <input type="text" class="form-control" placeholder="Ingrese su correo electrónico" name="email">
            <br>
            <center>
                <input type="submit" class="btn btn-primary" value="Restablecer contraseña">
            </center>
        </form>
    </div>

    <?php require "views/layouts/footer.php"?>
</body>

</html>