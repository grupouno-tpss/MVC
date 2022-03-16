<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            padding: 7%;
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
            /*//!tomado de Fondos mil*/ 
            background-image: url(https://fondosmil.com/fondo/11825.jpg); /*//!Tomado de Ichirakuramenco*/
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php
    include "layouts/loading.php";
    include "layouts/nav.php";
    ?>
    <div class="container">
    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['user_pNombre'] . " , bienvenid@. Nos alegra que estes aqui." ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <br>
    <h1>¿Qué desea hacer?</h1>
    <div class="options">
        <div><a href="<?php echo constant('URL') ?>/reserva">Reservar</a></div>
        <div><a href="<?php echo constant('URL') ?>/reservaciones">Cancelar/modificar reserva</a></div>
        <div><a href="<?php echo constant('URL') ?>/menus">Menús</a></div>
        <div><a href="<?php echo constant('URL') ?>/profile">Actualizar perfil</a></div>
    </div>
    <script>
        window.onload = function() {
            document.getElementById("loading").hidden = true;
        }
    </script>
    <?php
    require "layouts/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
    </script>
</body>

</html>