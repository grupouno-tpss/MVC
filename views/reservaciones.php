<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <?php require 'views/layouts/resources/styles.php'?>

    <style>
        .center {
            display: flex;
            justify-content: center;
        }

        .estado {
            color: red;
            font-weight: bold;
        }

        td,
        th {
            border: solid 1px black;
            text-align: center;
        }

        .tab {
            overflow-x: auto;
            height: 80vh;
        }
    </style>
</head>

<body>
    <?php
    include "layouts/nav.php";
    ?>
    <div class="container">
        <?php
        require "layouts/reservaciones.php";
        ?>
    </div>
    <div class="container">
        <center>
            <br>

            <hr> <a href="<?php echo constant('URL') ?>/reserva" class="btn btn-primary link-light">Hacer una reservación</a>
        </center>
    </div>
    <?php
        require "layouts/footer.php";
    ?>
</body>

</html>