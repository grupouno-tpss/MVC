<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
    <style>
        body {
            background-image: url(https://fondosmil.com/fondo/11825.jpg);
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include "layouts/nav.php";
    ?>

    <div class="content">
        <div class="section">
            <h2>Reservaciones</h2>
            <hr><br>
            <table class="table table-dark table-bordered overflow-auto">
                <thead>
                    <tr>
                        <th scope="col">ID reserva</th>
                        <th scope="col">Titular reserva</th>
                        <th scope="col">Cantidad de personas</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Email</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($value as $reserve) {
                        echo '<tr>
                                <th scope="row">' . $reserve['id_reservation'] . '</th>
                                <td>' . $reserve['p_nombre'] . ' ' . $reserve['p_apellido'] . '</td>
                                <td>' . $reserve['amount_people'] . '</td>
                                <td>' . $reserve['date'] . '</td>
                                <td>' . $reserve['schedule'] . '</td>
                                <td>' . $reserve['detail'] . '</td>
                                <td>' . $reserve['email'] . '</td>
                                <td>
                                <button class="btn btn-primary">Actualizar</button>
                                <button class="btn btn-danger">Cancelar reserva</button>
                                <button class="btn btn-secondary">Archivar</button>
                                </td>
                            </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br>
        <!--CALENDARIO-->

        <div class="section">
            <br><br><br>
            <h4>Calendario</h4>
            <i class="bi bi-calendar-event">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg>
            </i>
            <div class="infoCalendar">
                <div id="year"></div>
                <div class="btn-light" id="nameMonth"></div>
                <div>
                    <button class="btn btn-primary" onclick="backMonth()">
                        Atras
                        <i class="bi bi-chevron-compact-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z" />
                            </svg>
                        </i>
                    </button>
                    <button class="btn btn-primary" onclick="nextMonth()">
                        Adelante
                        <i class="bi bi-chevron-compact-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                            </svg>
                        </i>
                    </button>
                </div>
            </div>
            <br>
            <div class="calendar" id="calendar">
                <div>Lunes</div>
                <div>Martes</div>
                <div>Miercoles</div>
                <div>Jueves</div>
                <div>Viernes</div>
                <div>Sabado</div>
                <div>Domingo</div>
            </div>
        </div>
    </div>

    <?php

    foreach ($value as $date) {
        $explodeDate = explode('-', $date['date']);
        if ($explodeDate == null) {
            
        } else {
            echo "<script>
            console.log('" . $explodeDate[2] . "/" . $explodeDate[1] . "/" . $explodeDate[0] . "');
            console.log(document.getElementById('" . $explodeDate[2] . "/" . $explodeDate[1] . "/" . $explodeDate[0] . "'));
        </script>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?php echo constant('URL') ?>/public/js/calendar.js"></script>
</body>

</html>