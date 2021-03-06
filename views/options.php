<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué desea hacer?</title>
    <?php require 'views/layouts/resources/styles.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        * {
            font-family: cursive;
        }

        h1 {
            text-align: center;
        }

        .options {
            height: 70vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .options div {
            padding: 5%;
            background: antiquewhite;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }

        .options div:hover {
            background: blanchedalmond;
            border: solid rgba(0, 0, 0, 0.9) 3px;
            border-radius: 5px;
        }

        body {
            background-image: url(https://fondosmil.com/fondo/11825.jpg);
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php
    include "layouts/loading.php";
    include "layouts/nav.php";
    ?>
    <div class="content">
        <div class="container">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['user_pNombre'] . " , bienvenid@. Nos alegra que estes aqui." ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <br>
        <h1 class="text-white">¿Qué desea hacer?</h1>
        <div class="options">
            <div class="item"><a href="<?php echo constant('URL') ?>/reserva">Reservar</a></div>
            <div class="item"><a href="<?php echo constant('URL') ?>/reservaciones">Cancelar/modificar reserva</a></div>
            <div class="item"><a href="<?php echo constant('URL') ?>/menus">Menús</a></div>
            <div class="item"><a href="<?php echo constant('URL') ?>/profile">Actualizar perfil</a></div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body bg-success text-white">
                Inicio de sesión exitoso
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            var toastTrigger = document.getElementById('liveToastBtn')
            var toastLiveExample = document.getElementById('liveToast')
            document.getElementById("loading").hidden = true;
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()
        }
    </script>
    <script src="<?php echo constant('URL') ?>/public/js/animations_gsap.js"></script>
    <?php
    require "layouts/footer.php";
    ?>

</body>

</html>