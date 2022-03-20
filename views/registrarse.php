<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
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
                    <img src="https://ichirakuramenco.com/wp-content/uploads/2020/05/cropped-Logo1-1-1-4.png" width="100px" / class="logo">
                    <img src="https://ichirakuramenco.com/wp-content/uploads/elementor/thumbs/LOGO-CHI-GRAN-p9tyk7dshpshzgdlw2r1j5budzbjvxszg3avmoxhu0.png" alt="" width="100px" / class="logo">
                </ul>
                <span class="navbar-text">
                    <button class="btn btn-dark">
                        <img class="dlc" src="https://aux.iconspalace.com/uploads/209736328409232067.png" alt="">
                        <a href="<?php echo constant('URL') ?>/login">Iniciar sesión</a>
                    </button>
                </span>
            </div>
        </div>
    </nav>
    <div class="ichi">
        <div class="container">
            <br>
            <div class="moon w-50 mx-auto p-4 rounded item">
                <form action="<?php echo constant('URL') ?>/registrarse/addUser" method="post" id="register">
                    <h1 class="text-center">
                        Registrarse
                    </h1>
                    <label for="p_nombre">Primer nombre *</label>
                    <input type="text" class="lut form-control" id="p_nombre" name="p_nombre" placeholder="Ingrese su primer nombre" required>
                    <label for="s_nombre">Segundo nombre</label>
                    <input type="text" class="lut form-control" id="s_nombre" name="s_nombre" placeholder="Ingrese su primer nombre">
                    <label for="p_apellido">Primer apellido *</label>
                    <input type="text" class="lut form-control" id="p_apellido" name="p_apellido" placeholder="Ingrese su primer apellido" required>
                    <label for="s_apellido">Segundo apellido</label>
                    <input type="text" class="lut form-control" id="s_apellido" name="s_apellido" placeholder="Ingrese su segundo apellido">
                    <label for="email">Correo electrónico *</label>
                    <input type="email" class="lut form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
                    <label for="telcelular">Numero celular *</label>
                    <input type="text" class="lut form-control" id="telcelular" name="telcelular" placeholder="Ingrese su numero celular" required>
                    <label for="telefono">Numero telefonico</label>
                    <input type="text" class="lut form-control" id="telefono" name="telefono" placeholder="Ingrese su numero telefónico">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" class="lut form-control" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" minlength="8" required>
                    <span id="passwordHelpInline" class="form-text">
                        Debe tener entre 8 y 20 caracteres.
                    </span>
                    <br>
                    <input type="password" id="comfirm_password" class="lut form-control" placeholder="Confirme su contraseña" required>
                    <br>
                    <center><input type="submit" class="btn btn-primary" name="registrar"></center>
                </form>
            </div>
        </div>
    </div>
    <?php
    require "layouts/footer.php";
    ?>
    <script src="<?php echo constant('URL') ?>/public/js/animations_gsap.js"></script>

    <script>
        let logo = new animations();
        logo.logo();

        //verify password

        let v = document.getElementById('register');

        v.addEventListener('submit', (e) => {
            if (v.contraseña.value !== v.comfirm_password.value) {
                alert('Las contraseñas no coinciden');
                e.preventDefault();
            }
        });
        
    </script>
</body>

</html>