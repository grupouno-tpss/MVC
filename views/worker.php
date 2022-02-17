<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
    <style>
        body {
            background-image: url(https://fondosmil.com/fondo/11825.jpg);
            color: white;
        }
        .divCalendar{
            background-color: black;
            padding: 30px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    include "layouts/nav.php";
    ?>
    <div class="content">
        <div class="section">
            <?php
            require "layouts/reservaciones.php";
            ?>
        </div>
    </div>

    <script>
        document.getElementById('reservationsTable').classList.add('table-dark');
    </script>
</body>

</html>