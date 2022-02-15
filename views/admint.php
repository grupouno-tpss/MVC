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
                    <form action="<?php echo constant('URL')?>/admint/date">
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
                                    <button class="btn btn-danger"><a href="'.constant('URL').'/admint/deleteUser?user=' . $user['id_users'] . '" class="link-light">Eliminar</a></button>
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
                            if ($user['rol'] == "TRABAJADOR") {
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
                                    <button class="btn btn-danger"><a href="'.constant('URL').'/admint/deleteUser?user=' . $user['id_users'] . '" class="link-light">Eliminar</a></button>
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

        <!--Fechas no disponibles-->
        <div class="section">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fecha">
                Crear fechas
            </button>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>