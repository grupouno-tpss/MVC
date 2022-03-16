<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
    <style>
        body {
            background-image: url("https://fondosmil.com/fondo/11825.jpg"); /*//!tomado de Fondos mil*/ 
            color: white;
            scroll-margin: 100px;
        }

        .divCalendar {
            background-color: black;
            padding: 30px;
            border-radius: 5px;
        }

        .menuAdmint {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-around;
        }

        .imgAdmintMenu {
            width: 250px;
            height: 250px;
            opacity: 70%;
            border-radius: 5px;
        }

        .imgAdmintMenu:hover {
            cursor: pointer;
            opacity: 45%;
            color: black;
        }

        .text {
            position: relative;
            top: -25vh;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .date {
            width: 15%;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    require "layouts/nav.php";
    ?>

    <!--//*Ventana modal "añadir usuario"-->

    <div class="modal fade" style="color: black;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar un nuevo usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <form action="<?php echo constant('URL') ?>/registrarse/addUser" method="post">
                        <label for="p_nombre">Primer nombre *</label>
                        <input type="text" class="form-control" placeholder="Jhojann" id="" name="p_nombre" required>
                        <label for="s_nombre">Segundo nombre</label>
                        <input type="text" class="form-control" id="s_nombre" name="s_nombre">
                        <label for="p_apellido">Primer apellido *</label>
                        <input type="text" class="form-control" id="p_apellido" name="p_apellido" required>
                        <label for="s_apellido">Segundo apellido</label>
                        <input type="text" class="form-control" id="s_apellido" name="s_apellido">
                        <label for="email">Correo electrónico *</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                        <label for="telcelular">Numero celular *</label>
                        <input type="text" class="form-control" id="telcelular" name="telcelular" required>
                        <label for="telefono">Numero telefonico</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                        <label for="">Rol del usuario</label>
                        <select class="form-select" aria-label="Default select example" name="rol">
                            <option value="2">Empleado</option>
                            <option value="1">Cliente</option>
                            <option value="3">Administrador</option>
                        </select>
                        <br>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary" name="registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--endModal-->

    <!--Ventana modal "añadir fecha no disponible"-->

    <div class="modal fade" id="date" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir fecha (No disponible)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div>
                            <p><?php echo $_SESSION['user_pNombre'] ?>, esta sección está pensada para que usted como administrador pueda agregar fechas en las cuales <strong>no se va a prestar el servicio de reservaciones en la página.</strong></p>
                        </div>
                    </div>
                    <br>
                    <form action="<?php echo constant('URL') ?>/admint/addDateNotAvailable" method="post">
                        <label for="date">Ingrese la hora</label>
                        <input type="date" class="form-control" name="date">
                        <br>
                        <input type="submit">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--Ventana modal "añadir hora disponible"-->

    <!-- Modal -->
    <div class="modal fade" id="hour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir hora</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div>
                            <p><?php echo $_SESSION['user_pNombre'] ?>, esta sección está pensada para que usted como administrador pueda agregar horas en las cuales <strong>se va a prestar el servicio de reservaciones en la página.</strong></p>
                        </div>
                    </div>
                    <form action="<?php echo constant('URL') ?>/admint/addHour">
                        <label for="">Ingrese la hora</label>
                        <input type="time" class="form-control" name="hour">
                        <br>
                        <input type="submit">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="section">
            <div>
                <button class="btn btn-primary">
                    <a class="link-light" href="<?php echo constant('URL') ?>/report/reservations">Descargar informe de reservas (.xml)</a>
                </button>
                <button class="btn btn-primary">Reservaciones</button>
                <button class="btn btn-primary">Empleados</button>
                <button class="btn btn-primary">Usuarios (clientes)</button>
                <button class="btn btn-primary">Menus</button>
                <button class="btn btn-primary">Fechas (no disponibles)</button>
                <button class="btn btn-primary">Horas (no disponibles)</button>
            </div>
            <hr><br>
            <div>
                <center>
                    <h2>Bienvenid@, <?php echo $_SESSION['user_pNombre'] ?></h2>
                    <br><br>
                </center>
            </div>
            <div class="menuAdmint">
                <div>
                    <a href="#empleados">
                        <img src="<?php echo constant('URL') ?>/public/multimedia/workers.png" class="imgAdmintMenu" alt="">
                        <div class="text">Empleados</div>
                        <div></div>
                    </a>
                </div>
                <div>
                    <a href="#menus">
                        <img src="<?php echo constant('URL') ?>/public/multimedia/menus.png" class="imgAdmintMenu" alt="">
                        <div class="text">Menus</div>
                        <div></div>
                    </a>

                </div>
                <div>
                    <a href="#fechas">
                        <img src="<?php echo constant('URL') ?>/public/multimedia/dates.png" class="imgAdmintMenu" alt="">
                        <div class="text">Administrar fechas</div>
                        <div></div>
                    </a>

                </div>
                <div>
                    <a href="#horas">
                        <img src="<?php echo constant('URL') ?>/public/multimedia/hours.png" class="imgAdmintMenu" alt="">
                        <div class="text">Administrar horas</div>
                        <div></div>
                    </a>

                </div>
            </div>
        </div>
        <div class="section">
            <h2 id="empleados">Empleados</h2>
            <hr><br>
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Numero celular</th>
                        <th scope="col">Numero telefonico</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($value as $user) {
                        echo '
                    <tr>
                        <th scope="row">' . $user['id_users'] . '</th>
                        <td>' . $user['p_nombre'] . " " . $user['p_apellido'] . '</td>
                        <td>' . $user['email'] . '</td>
                        <td>' . $user['rol'] . '</td>
                        <td>' . $user['num_celular'] . '</td>
                        <td>' . $user['num_telefono'] . '</td>
                        <td>
                            <button class="btn btn-danger"><a href="' . constant('URL') . '/admint/deleteUser?user=' . $user['id_users'] . '" class="link-light">Eliminar usuario</button>
                        </td>
                    </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar usuario
            </button>
        </div>
        <div class="section">
            <h2 id="clientes">Clientes</h2>
            <hr><br>
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Numero celular</th>
                        <th scope="col">Numero telefonico</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($this->value3 as $user) {
                        echo '
                    <tr>
                        <th scope="row">' . $user['id_users'] . '</th>
                        <td>' . $user['p_nombre'] . " " . $user['p_apellido'] . '</td>
                        <td>' . $user['email'] . '</td>
                        <td>' . $user['rol'] . '</td>
                        <td>' . $user['num_celular'] . '</td>
                        <td>' . $user['num_telefono'] . '</td>
                        <td>
                        <button class="btn btn-danger"><a href="' . constant('URL') . '/admint/deleteUser?user=' . $user['id_users'] . '" class="link-light">Eliminar usuario</button>
                            
                        </td>
                    </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <a href="<?php echo constant('URL') ?>/worker" class="btn btn-primary">Vista de empleado</a>
        </div>

        <div class="section">
            <h2 id="fechas">Administrar fechas</h2>
            <hr><br>
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    <p><?php echo $_SESSION['user_pNombre'] ?>, esta sección está pensada para que usted como administrador pueda agregar fechas en las cuales <strong>no se va a prestar el servicio de reservaciones en la página.</strong></p>
                </div>
            </div>
            <div class="badge text-wrap" style="width: 15%;">
                Formato de fecha: año/mes/dia
            </div>
            <br>

            <div style="display: flex; flex-wrap:wrap;">
                <?php
                foreach ($this->value2 as $date) {
                    echo '
                        <div class="d-flex justify-content-around date">
                            <div>' . $date['date'] . '</div>
                            <div>
                                <button class="btn btn-warning" title="Si da click, esta fecha volverá a estar disponible en el servicio de reserva"><strong><a href="' . constant('URL') . '/admint/deleteDateNotAvailable?IDdate=' . $date['id_date'] . '">X</a></strong></button>
                            </div>
                        </div>
                    ';
                }
                ?>
                <br>
            </div>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#date">
                Añadir fecha
            </button>
        </div>

        <div class="section">
            <h2 id="horas">Administrar horas</h2>
            <hr><br>
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    <p><?php echo $_SESSION['user_pNombre'] ?>, esta sección está pensada para que usted como administrador pueda agregar horas en las cuales <strong>se va a prestar el servicio de reservaciones en la página.</strong></p>
                </div>
            </div>

            <br>

            <div style="display: flex; flex-wrap:wrap;">
                <?php
                foreach ($this->value4 as $hour) {
                    echo '
                        <div class="d-flex justify-content-around date">
                            <div>' . $hour['schedule'] . '</div>
                            <div>
                                <button class="btn btn-warning" title="Si da click, esta fecha volverá a estar disponible en el servicio de reserva"><strong><a href="' . constant('URL') . '/admint/deleteHour?IDhour=' . $hour['id_schedule'] . '">X</a></strong></button>
                            </div>
                        </div>
                    ';
                }
                ?>
                <br>
            </div>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hour">
                Añadir hora
            </button>
        </div>
        <div class="section" style="overflow: auto;" id="menus">
            <?php
            require "views/menus.php";
            ?>
        </div>
    </div>
    <?php
    require "layouts/footer.php";
    ?>
</body>

</html>