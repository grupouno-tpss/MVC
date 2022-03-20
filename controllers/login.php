<?php
class login extends Controller
{
    public function __construct()
    {
        session_start();
    }
    public function render()
    {
        parent::__construct();
        $this->session();
        $this->view->render('login', null);
    }
    public function consultUser()
    {
        extract($_REQUEST);
        echo "<br>" . $_REQUEST['password'] . "<br>";
        //echo "<script>alert('funcion consultar usuario')</script>";
        $this->loadModel('usuario');
        $this->nameClass->login(
            $_REQUEST['user'],
            $_REQUEST['password']
        );

        if (isset($_SESSION['user_rolID'])) {
            $this->redirect();
        } else {
            echo "<script>alert('No se ha encontrado el usuario con esas credenciales')</script>";
            //header('Location: ' . constant('URL') . '/login');
            echo '<script>location.href = "' . constant('URL') . '/login"</script>';
        }
    }

    public function redirect()
    {
        $rol = $_SESSION['user_rolID'];

        switch ($rol) {
            case 3:
                # code...
                //header('Location: ' . constant('URL') . '/admint');
                echo '<script>location.href = "' . constant('URL') . '/admint"</script>';
                break;
            case 2:
                //header('Location: ' . constant('URL') . '/worker');
                echo '<script>location.href = "' . constant('URL') . '/worker"</script>';
                break;
            case 1:
                //header('Location: ' . constant('URL') . '/options');
                echo '<script>location.href = "' . constant('URL') . '/options"</script>';
                break;

            default:
                # code...
                break;
        }
    }

    public function session()
    { //Confirmar si existe una session con un usuario
        if (isset($_SESSION['user_rolID'])) {
            $this->redirect();
        }
    }

    public function close_session()
    {
        session_destroy();
        //header('Location: ' . constant('URL') . '/login');
        echo '<script>location.href = "'.constant('URL').'/login"</script>';
    }
}
