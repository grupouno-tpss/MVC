<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">

    <title>Registrarse</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText navLogin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <img src="https://ichirakuramenco.com/wp-content/uploads/2020/05/cropped-Logo1-1-1-4.png" width="100px" />
                    <!-- /!tomado de Ichirakuramenco-->
                    <img src="https://ichirakuramenco.com/wp-content/uploads/elementor/thumbs/LOGO-CHI-GRAN-p9tyk7dshpshzgdlw2r1j5budzbjvxszg3avmoxhu0.png" alt="" width="100px" />
                    <!--/!tomado de Ichirakuramenco-->
                </ul>
                <span class="navbar-text">
                    <button class="btn btn-dark">
                        <img class="dlc" src="https://aux.iconspalace.com/uploads/209736328409232067.png" alt="">
                        <!-- /!tomado de icons palace -->
                        <a href="<?php echo constant('URL') ?>/registrarse">Iniciar sesión</a>
                    </button>
                </span>
            </div>
        </div>
    </nav>
    <div class="ichi">
        <div class="container">
            <br>
            <div class="moon w-50 mx-auto p-4 rounded">
                <form action="<?php echo constant('URL') ?>/registrarse/addUser" method="post">
                    <h1 class="text-center">
                        Registrarse
                    </h1>
                    <label for="p_nombre">Primer nombre *</label>
                    <input type="text" class="lut form-control" id="" name="p_nombre" required>
                    <label for="s_nombre">Segundo nombre</label>
                    <input type="text" class="lut form-control" id="s_nombre" name="s_nombre">
                    <label for="p_apellido">Primer apellido *</label>
                    <input type="text" class="lut form-control" id="p_apellido" name="p_apellido" required>
                    <label for="s_apellido">Segundo apellido</label>
                    <input type="text" class="lut form-control" id="s_apellido" name="s_apellido">
                    <label for="email">Correo electrónico *</label>
                    <input type="text" class="lut form-control" id="email" name="email" required>
                    <label for="telcelular">Numero celular *</label>
                    <input type="text" class="lut form-control" id="telcelular" name="telcelular" required>
                    <label for="telefono">Numero telefonico</label>
                    <input type="text" class="lut form-control" id="telefono" name="telefono">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" class="lut form-control" id="contraseña" name="contraseña" required>
                    <br>
                    <center><input type="submit" class="btn btn-primary" name="registrar"></center>
                </form>
            </div>
        </div>
    </div>
    <?php
    require "layouts/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>