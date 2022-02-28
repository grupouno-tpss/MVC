<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contentProfile {
            display: grid;
            grid-template-columns: 30% 70%;
        }
    </style>
</head>

<body>

    <?php
    require "layouts/nav.php";

    ?>
    <div class="contentProfile container">
        <div>
            <img src="<?php echo constant('URL') ?>/public/multimedia/profile.png" class="w-100" alt="">
            <?php echo $_SESSION['user_pNombre'] ?>
        </div>
        <div>
            <div>
                <button class="btn btn-primary">Actualizar datos</button>
            </div>
            <hr><br>
            <form action="<?php echo constant('URL') ?>/profile/updateUser" method="post">
                <?php
                foreach ($this->value2 as $user) {
                    echo $user['p_nombre'];
                    echo '
                    <label for="">ID usuario</label>
                    <input type="text" class="form-control" value="'.$user['id_users'].'" id="" name="id_usuario">
                    <label for="">Primer nombre</label>
                    <input type="text" class="form-control" value="'.$user['p_nombre'].'" id="" name="p_nombre">
                    <label for="">Segundo nombre</label>
                    <input type="text" class="form-control" value="'.$user['s_nombre'].'" id="" name="s_nombre">
                    <label for="">Primer apellido</label>
                    <input type="text" class="form-control" value="'.$user['p_apellido'].'" id="" name="p_apellido">
                    <label for="">Segundo apellido</label>
                    <input type="text" class="form-control" value="'.$user['s_apellido'].'" id="" name="s_apellido">
    
                    <label for="">Correo electónico</label>
                    <input type="text" class="form-control" value="'.$user['email'].'" id="" name="email">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" value="'.$user['password'].'" id="" name="password">
                    <label for="">Rol</label>
                    <input type="text" class="form-control" value="'.$user['rol'].'" id="" name="rol">
                    <label for="">Numero Celular</label>
                    <input type="text" class="form-control" value="'.$user['num_celular'].'" id="" name="num_celular">
                    <label for="">Numero telefonico</label>
                    <input type="text" class="form-control value="'.$user['num_telefono'].'" id="" name="num_telefono">
                    ';
                }
                ?>
                

                <br>
                <input type="submit" class="btn btn-primary" value="Actualizar perfil">
            </form>
        </div>
    </div>
    <?php
        require "layouts/footer.php";
    ?>
</body>

</html>