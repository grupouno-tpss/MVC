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

    <!--Ventanas modales-->
    <!--Modal "registrar usuario"-->

    <div class="modal fade" id="registerUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="<?php echo constant('URL') ?>/registrarse/addUserRol" method="post">
                            <label for="p_nombre">Primer nombre *</label>
                            <input type="text" class="form-control" id="" name="p_nombre" required>
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
                            <label for="rol">Rol del usuario a registrar</label>
                            <select class="form-select" aria-label="Default select example" id="rol" name="rol">
                                <option value="2">Trabajador</option>
                                <option value="1">Cliente</option>
                                <option value="3">Administrador</option>
                            </select>
                            <label for="Contraseña">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                            <br>
                            <center><input type="submit" value="Registrar" class="btn btn-primary" name="registrar"></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal de fecha-->
    <div class="modal fade" id="fecha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar una fecha no disponible</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo constant('URL') ?>/admint/date">
                        <label for="">Ingrese la fecha a cambiar de estado a "NO DISPONIBLE"</label>
                        <input type="date" class="form-control" name="date">
                        <br>
                        <input type="submit" class="btn btn-primary">
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
            <div class="d-flex">
                <button class="btn btn-primary text-white text-wrap">Registrar usuario</button>
                <button class="btn btn-secondary text-white text-wrap">Ver reservaciones<button>
                        <button class="btn btn-warning text-dark text-wrap">Administrar fechas</button>
                        <button class="btn btn-warning text-dark text-wrap">Administrar horas</button>
            </div>
            <hr>
            <br><br>
            <div class="d-flex justify-content-around">
                <div>
                    <button class="btn btn-primary fs-3 p-3">Usuarios registrados</button>
                </div>
                <div>
                    <button class="btn btn-primary fs-3 p-3">Trabajadores registrados</button>
                </div>
                <div>
                    <button class="btn btn-primary fs-3 p-3">Fechas</button>
                </div>
                <div>
                    <button class="btn btn-primary fs-3 p-3">horas</button>
                </div>
            </div>
        </div>
        <div class="section">
            <h2>Usuarios registrados</h2>
            <hr><br>
            <div>
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo electrónico</th>
                            <th scope="col">Numero celular</th>
                            <th scope="col">Numero telefonico</th>
                            <th scope="col">rol</th>
                            <th scope="col">Operación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($value as $user) {
                            if ($user['rol'] == "CLIENTE") {
                                echo '
                            <tr>
                            <th scope="row">' . $user['id_users'] . '</th>
                                <td>' . $user['p_nombre'] . ' ' . $user['s_nombre'] . ' ' . $user['p_apellido'] . '</td>
                                <td>' . $user['email'] . '</td>
                                <td>' . $user['num_celular'] . '</td>
                                <td>' . $user['num_telefono'] . '</td>
                                <td>' . $user['rol'] . '</td>
                                <td>
                                    <button class="btn btn-primary"><a href="?user=' . $user['id_users'] . '" class="link-light">Actualizar</a></button>
                                    <button class="btn btn-danger"><a href="' . constant('URL') . '/admint/deleteUser?user=' . $user['id_users'] . '" class="link-light">Eliminar</a></button>
                                </td>
                            </tr>
                            ';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerUser">
                Registrar usuario
            </button>
        </div>
        <div class="section">
            <h2>Trabajadores registrados</h2>
            <hr><br>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" onclick="alert('Hola')">ID reserva</th>
                            <th scope="col">Titular reserva</th>
                            <th scope="col">Cantidad de personas</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Menus</th>
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
                        <td id="' . $reserve['id_reservation'] . '"></td>
                        <td>' . $reserve['email'] . '</td>
                        <td>
                        <button type="button" onclick="udpateReservation(' . $reserve['id_reservation'] . ', `' . $reserve['p_nombre'] .  $reserve['p_apellido'] . '`, ' . $reserve['amount_people'] . ', `' . $reserve['date'] . '`, `' . $reserve['schedule'] . '`,`' . $reserve['email'] . '`)" 
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Actualizar reservación</button>
                        
                        <button class="btn btn-danger"><a href="' . constant('URL') . '/reservaciones/changeStatus?cancel=' . $reserve['id_reservation'] . '" class="link-light">Cancelar reserva</a></button>
                        </td>
                    </tr>';
                        }

                        foreach ($this->value2 as $menu) {
                            echo "<script>
                            console.log(document.getElementById('" . $menu['id_reservation'] . "'));
                            document.getElementById('" . $menu['id_reservation'] . "').append('" . $menu['title_menu'] . "', '  -  ');     
                            document.getElementById('menu').append('" . $menu['title_menu'] . "', '  -  ');                   
                        </script>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerUser">
                Registrar usuario
            </button>
        </div>

        <!--Fechas no disponibles-->
        <div class="section">
            <h2>Fechas</h2>
            <hr><br>
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    En esta sección encontrará las fechas que no se encuentran disponibles respecto al servicio de reservación que se quiere prestar.
                    Solo se debe utilizar la función "agregar fecha" en caso de que se quiera restringir una o mas fechas a los usuarios que quieran hacer reservaciones.
                </div>
            </div>
            <?php
            foreach ($this->value2 as $date) {
                echo '
                        <div class="d-flex">
                            <div>' . $date['date'] . '</div>
                            <div>X</div>
                        </div>
                    ';
            }
            ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fecha">
                Crear fechas
            </button>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>