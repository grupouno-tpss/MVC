<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
    <style>
        body {
            background-image: url(https://fondosmil.com/fondo/11825.jpg);
            color: white;
        }

        .divCalendar {
            background-color: black;
            padding: 30px;
            border-radius: 5px;
        }

        .menuAdmint {
            display: flex;
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
    </style>
</head>

<body>
    <?php
    require "layouts/nav.php";
    ?>

    <!--Ventana modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar un nuevo usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo constant('URL') ?>/registrarse/addUser" method="post">
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

    <div class="content">
        <div class="section">
            <div>
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
                    <img src="<?php echo constant('URL') ?>/public/multimedia/workers.png" class="imgAdmintMenu" alt="">
                    <div class="text">Empleados</div>
                    <div></div>
                </div>
                <div>
                    <img src="<?php echo constant('URL') ?>/public/multimedia/menus.png" class="imgAdmintMenu" alt="">
                    <div class="text">Menus</div>
                    <div></div>

                </div>
                <div>
                    <img src="<?php echo constant('URL') ?>/public/multimedia/dates.png" class="imgAdmintMenu" alt="">
                    <div class="text">Administrar fechas</div>
                    <div></div>

                </div>
                <div>
                    <img src="<?php echo constant('URL') ?>/public/multimedia/hours.png" class="imgAdmintMenu" alt="">
                    <div class="text">Administrar horas</div>
                    <div></div>

                </div>
            </div>
        </div>
        <div class="section">
            <h2>Empleados</h2>
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
                        <td>' . $user['p_nombre'] . " ". $user['p_apellido'].'</td>
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
            <h2>Clientes</h2>
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
                        <td>' . $user['p_nombre'] . " ". $user['p_apellido'].'</td>
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
            <a href="<?php echo constant('URL')?>/worker" class="btn btn-primary">Vista de empleado</a>
        </div>
    </div>
</body>

</html>