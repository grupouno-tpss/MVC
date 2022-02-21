<?php
if (isset($_SESSION['user_rol'])) {
    echo "Su sessión está iniciada";
} else {
    session_start();
}
class menus extends Controller
{
    public function __construct()
    {
    }
    public function render()
    {
        parent::__construct();
        $menus = $this->getMenus();
        $this->view->render('menus', $menus);
    }

    public function getMenus()
    {
        $this->loadModel('menus');
        return $this->nameClass->getMenus();
    }

    public function addMenu () {
        extract($_REQUEST);

        $this->loadModel('menus');

        $this->nameClass->addMenu(
            $_REQUEST['title'],
            $_REQUEST['desc'],
            $_REQUEST['price'],
            $_REQUEST['url']
        );
        echo "Añadir menú";
    }
}
