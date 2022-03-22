<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/reserva.css">
    <title>Reservar</title>
    <style>
        .sect_reservation {
            padding-top: 5%;
        }

        .r_calendar {
            background-color: powderblue;
        }

        .r_info {
            background-color: teal;
            color: white;
        }

        .r_menu {
            background-color: rosybrown;
            color: white;
        }

        .r_data {
            text-align: center;
        }

        .r_data div {
            padding: 30px;
        }

        .r_send{
            background-color: teal;
        }
    </style>
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
</head>

<body onfocus="asignar(); dataInformation()">

    <?php
    include "layouts/loading.php";
    include "layouts/nav.php";
    ?>

    <div class="data" id="data" hidden>
        <div id="dataReserva"></div>
        <button id="closeData" class="btn btn-warning">X</button>
    </div>
    <button id="verDatos" class="btn btn-secondary" autofocus>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
        </svg>
    </button>
    <section class="sect_reservation r_calendar">
        <?php

        include "layouts/reserva/calendario.php";
        ?>
    </section>
    <section class="sect_reservation r_info">
        <?php

        include "layouts/reserva/datos.php";
        ?>
    </section>
    <section class="sect_reservation r_menu">
        <?php

        include "layouts/reserva/menu.php";
        ?>
    </section>
    <br>

    <!-- Modal de hora fecha -->

    <div class="modalCalendar" id="modalCalendar" hidden>
        <div class="contentCalendarModal">
            <div>
                <div class="modalTitle">
                    <h2>Seleccionar hora</h2>
                </div>
            </div>
            <hr>
            <div class="modalContent">
                <label for="">Fecha seleccionada</label>
                <input type="text" disabled id="dateModal">
                <br>
                <label for="">Seleccione la hora</label>
                <select class="form-select" id="hourR" multiple aria-label="multiple select example">
                    <?php
                    foreach ($value as $horas) {
                        echo '<option value="' . $horas['id_schedule'] . '">' . $horas['schedule'] . '</option>';
                    }
                    ?>
                </select>
                <br>
                <button class="btn btn-secondary" id="closeModal">Cancelar</button>
                <button class="btn btn-success" id="selectModal">Seleccionar fecha</button>
            </div>
        </div>
    </div>


    <section id="cargarReserva" class="container spinners" hidden>
        <div class="container">

            <h3 style="display: block;">reservando</h3><br>
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-info" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

    </section>
    </div>
    <!-- FORMULARIO RESERVA -->
    <section class="sect_reservation r_send">
        <div class="container">
            <center>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/2048px-Yes_Check_Circle.svg.png" alt="" width="200px" </center>
                <br><br>
                <div class="alert alert-primary" role="alert">
                    Señor(a), si ha llegado a esta sesión, significa que ya ha ingresado los valores requeridos para hacer la reservación. Por favor verifique la información.
                </div>
        </div>
        <br>
        <div class="d-flex container r_data" id="info_reservation" style="flex-wrap: wrap;"></div>
        <form action="<?php echo constant('URL') ?>/reserva/addReserve" method="post" id="sendReserve">
            <input hidden type="text" id="fechaSend" name="fecha">
            <input hidden type="text" id="horaSend" name="hora">
            <input hidden type="text" id="cantPersonas" name="cantPersonas">
            <input hidden type="text" id="tipoServicioSend" name="tipoServicio">
            <input hidden type="text" id="especificacion" name="especificacion">
            <input hidden type="text" id="menuS" name="menu">
            <input onclick="asignar()" class="btn btn-success" style="display: block; margin: auto" type="submit" value="Reservar" name="sendR">
            <br>
            <br>
        </form>
    </section>
    <script>
        /*
    [0] = fecha
    [1] = hora
    [2] = Cantidad de personas
    [3] = tipo de servicio
    [4] = especificacion de reserva
*/
        let dataReserva = ["No seleccionada", "No seleccionada", "No seleccionada", "No seleccionada", "No seleccionada", "No seleccionada"];

        function asignar() {
            // document.getElementById('sendReserve').addEventListener("click", (e) =>{
            //     e.preventDefault();
            // });
            console.log(dataReserva[0]);
            document.getElementById("fechaSend").value = dataReserva[0];
            document.getElementById("horaSend").value = dataReserva[1];
            document.getElementById("cantPersonas").value = dataReserva[2];
            document.getElementById("tipoServicioSend").value = dataReserva[3];
            document.getElementById("especificacion").value = dataReserva[4];

            $menusText = menus.toString();
            console.log($menusText);
            document.getElementById("menuS").value = $menusText;
            dataReserva[5] = $menusText;
        }


        document.getElementById("verDatos").addEventListener("click", (e) => {
            mostrarDatos();
        });

        function mostrarDatos() {
            document.getElementById("data").hidden = false;

            document.getElementById("closeData").addEventListener("click", (e) => {
                document.getElementById("data").hidden = true;

            });
            document.getElementById("dataReserva").innerHTML = `
            Fecha seleccionada: <strong>${dataReserva[0]}</strong>
            <br>
            Hora seleccionada: <strong>${dataReserva[1]}</strong>
            <br>
            Cantidad de personas: <strong>${dataReserva[2]}</strong>
            <br>
            Tipo de servicio: <strong>${dataReserva[3]}</strong>
            <br>
            Especificación de reserva: <strong>${dataReserva[4]}</strong>
            <br>
            Menú escogido: <strong>${dataReserva[5]}</strong>
        `;
        }
    </script>

    <script>
        window.onload = function() {
            document.getElementById("loading").hidden = true;
        }
    </script>
    <script src="<?php echo constant('URL') ?>/public/js/calendar.js"></script>

    <?php
    foreach ($this->value2 as $date) {
        $dateExplode = explode('-', $date['date']);
        $dateID = $dateExplode[0] . "/" . intval($dateExplode[1]) . "/" . intval($dateExplode[2]);
        echo '
            <script>
                function blockDates () {
                if(document.getElementById("' . $dateID . '")) {
                document.getElementById("' . $dateID . '").style.background= "gray";
                document.getElementById("' . $dateID . '").id = "not";
                }
                }
                blockDates();
            </script>
        ';
    }
    ?>
    <?php
    require "layouts/footer.php";
    ?>


    <!--RESERVACIONES-->

    <script>
        function dataInformation() {
            let items = ['Fecha seleccionada', 'Hora seleccionada', 'Cantidad de personas', 'Servicio', ' Indicaciones', 'Menús escogidos'];

            for (let index = 0; index < items.length; index++) {
                console.log(items[index] + " " + dataReserva[index]);
                let div = document.createElement('div');
                div.innerHTML = items[index] + " : " + dataReserva[index];
                div.style.width = "50%";
                document.getElementById('info_reservation').appendChild(div);
            }
        }
    </script>
</body>

</html>