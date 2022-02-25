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
        $this->view->menus = $this->getMenus();
        $this->view->categories = $this->getCategories();
        $this->view->render('menus', null);
    }

    public function getMenus()
    {
        $this->loadModel('menus');
        return $this->nameClass->getMenus();
    }

    public function getCategories () {
        return $this->nameClass->getCategories();
    }

    public function addMenu () {
        extract($_REQUEST);

        $this->loadModel('menus');

        $this->nameClass->addMenu(
            $_REQUEST['title'],
            $_REQUEST['desc'],
            $_REQUEST['price'],
            $_REQUEST['url'],
            $_REQUEST['categories']
        );
        echo "Añadir menú";
    }

    public function updateMenu (){
        extract($_REQUEST);

        $this->loadModel('menus');
        $this->nameClass->updateMenu(
            $_REQUEST['id'],
            $_REQUEST['title'],
            $_REQUEST['description'],
            $_REQUEST['price'],
            $_REQUEST['url']
        );
    }
    public function delete () {
        extract($_REQUEST);
        $this->loadModel('menus');
        $this->nameClass->delete(
            $_REQUEST['id']
        );
    }

    public function deleteCategory () {
        extract($_REQUEST);
        $this->loadModel('menus');
        $this->nameClass->deleteCategory($_REQUEST['category']);
    }
    public function addCategory () {
        extract($_REQUEST);
        $this->loadModel('menus');
        $this->nameClass->addCategory($_REQUEST['category']);
    }
}
