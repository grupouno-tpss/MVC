<?php
    class password_reset extends Controller {
        public function render () {
            parent::__construct();
            $this->view->render('password_reset', null);
        }

        public function send () {
            extract($_REQUEST);
            $this->loadModel('usuario');

            $this->nameClass->verify_email($_REQUEST['email']);
            //echo "<script>location.href = '".constant('URL')."/password_reset'</script>";
        }

        public function verify () {
            extract($_REQUEST);

            $this->loadModel('usuario');

            $v = $this->nameClass->verify_token($_REQUEST['t']);

            if ($v) {
                parent::__construct();
                $this->view->render('password_reset_auth', null);
            }
        }

        public function change () {
            echo "Cambiar contraseña";

            $this->loadModel('usuario');

            $this->nameClass->change_password($_POST['token'], $_POST['password']);
            echo "<script>location.href = '".constant('URL')."/login'</script>";
        }
    }
?>