<?php
class Controller
{
    public $value2;
    public $value3;
    public $value4;
    public $value5;
    public $menus;
    public $categories;
    public function __construct()
    {
        $this->permissions();
        $this->view = new View();
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
        $this->value2;
        $this->value3;
        $this->value4;
        $this->value5;
        $this->menus;
        $this->categories;
    }

    public function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';

        require $url;

        $urlName = $model . 'Model';

        $this->nameClass = new $urlName();
    }

    public function permissions()
    {
        $href_get = $_GET['url'];
        $error_404 = "<center><h1>No tiene acceso</h1></center>";

        if (isset($_SESSION['user_rolID'])) {

            if ($_SESSION['user_rolID'] == 3) {
                echo '
                    <script>
                        console.log("Administrador");
                    </script>
                ';
            } else if ($_SESSION['user_rolID'] == 2) {
                if ($href_get == "reserva"  || $href_get == "worker" || $href_get == "options" || $href_get == "reservaciones" || $href_get == "profile" || $href_get == "menus" || $href_get == "login" || $href_get == "registrarse") {
                    echo '
                        <script>
                            console.log("Empleado");
                        </script>
                    ';
                } else {
                    echo $error_404;
                    die();
                }
            } else if ($_SESSION['user_rolID'] == 1) {
                if ($href_get == "reserva"  || $href_get == "options" || $href_get == "profile" || $href_get == "menus" || $href_get == "reservaciones" || $href_get == "login" || $href_get == "registrarse") {
                    echo '
                        <script>
                            console.log("Cliente");
                        </script>
                    ';
                } else {
                    echo $error_404;
                    die();
                }
            }
        }
    }

    public function verify_session()
    {
        if (isset($_SESSION['user_rolID'])) {
            echo "<script>console.log('Sesion iniciada')</script>";
        } else {
            header("Location: " . constant('URL') . "/login");
        }
    }
}
