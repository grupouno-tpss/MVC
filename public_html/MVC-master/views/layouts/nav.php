<style>
    .user::after {
        content: "<?php echo $_SESSION['user_email'] ?>";
        color: #ffffff;
        transition-duration: 2s;
    }

    .editProfile:hover::after {
        content: "Editar perfil";
        color: #ffffff;
        transition-duration: 2s;
    }

    .close:hover::after {
        content: "Cerrar sesión";
        color: #ffffff;
        transition-duration: 2s;
    }
</style>

<nav class="navbar navbar-dark fixed-top" style="background-color: rgba(0,0,0,0.7);">
    <div class="container-fluid">
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </a>
        <a class="navbar-brand">Restaurante Ichiraku Ramen</a>

        <div class="d-flex bg-primary rounded">
            <button class="btn user">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </button>
            <button class="btn editProfile" title="Editar perfil">
                <a href="profile" class="link-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                    </svg>
                </a>
            </button>
            <button class="btn close">
                <a href="<?php echo constant('URL') ?>/login/close_session" class="link-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                </a>
            </button>
        </div>
    </div>
</nav>
<br><br><br>

<!--//offcanvas-->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><?php echo $_SESSION['user_pNombre'] . " (" . $_SESSION['user_rol'] . ")"; ?> </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex justify-content-around">
            <div>
                <img src="https://definicion.de/wp-content/uploads/2019/06/perfildeusuario.jpg" alt="">
            </div>
            <div>
                <?php echo $_SESSION['user_pNombre'] ?>
            </div>
        </div>
        <hr><br>
        <div>
            <div class="list-group">
                <a href="<?php echo constant('URL') ?>/reserva" class="list-group-item list-group-item-action active" aria-current="true">
                    Reservar
                </a>
                <a href="<?php echo constant('URL') ?>/reservaciones" class="list-group-item list-group-item-action">Cancelar / Modificar reserva</a>
                <a href="<?php echo constant('URL') ?>/menus" class="list-group-item list-group-item-action">Ver menús</a>
                <a href="<?php echo constant('URL') ?>/profile" class="list-group-item list-group-item-action">Actualizar perfil / cambiar contraseña</a>
                <a class="list-group-item list-group-item-action disabled">Atención al cliente</a>
            </div>
        </div>
    </div>
</div>