<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker</title>
    <?php require 'views/layouts/resources/styles.php'?>
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
    </style>
</head>

<body>
    <?php
    include "layouts/nav.php";
    ?>
    <div class="content">
        <div class="section overflow-auto">
            <a href="<?php echo constant('URL') ?>/report/reservations" class="btn btn-primary">Descargar informe (.xml)</a>
            <?php
            require "layouts/reservaciones.php";
            ?>
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
                    foreach ($this->value5 as $user) {
                        echo '
                    <tr>
                        <th scope="row">' . $user['id_users'] . '</th>
                        <td>' . $user['p_nombre'] . " " . $user['p_apellido'] . '</td>
                        <td>' . $user['email'] . '</td>
                        <td>' . $user['rol'] . '</td>
                        <td>' . $user['num_celular'] . '</td>
                        <td>' . $user['num_telefono'] . '</td>
                        <td>
                        <button class="btn btn-danger"><a href="' . constant('URL') . '/admint/deleteUser?user=' . $user['id_users'] . '" class="link-light" Disabled>Eliminar usuario</button>
                            
                        </td>
                    </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    require "layouts/footer.php";
    ?>

    <script>
        document.getElementById('reservationsTable').classList.add('table-dark');
    </script>
</body>

</html>