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
                    foreach ($value as $user) {
                        echo '
                    <tr>
                        <th scope="row">' . $user['id_users'] . '</th>
                        <td>' . $user['rol'] . '</td>
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
                        <td>' . $user['rol'] . '</td>
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
        </div>
    </div>
</body>

</html>