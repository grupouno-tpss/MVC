<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
</body>

</html>