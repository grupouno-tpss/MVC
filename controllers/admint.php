<?php
class admint extends Controller
{
    public function __construct()
    {
        session_start();
        //$this->verify_session();
        //$this->AuthAdmin();
    }

    public function render()
    {
        parent::__construct();
        $this->view->value5 = $this->getServices();
        $this->loadModel('usuario');
        $this->view->value3 = $this->users(1);
        $users = $this->users(2);
        $dates = $this->getDatesNotAvailable();
        $this->view->value2 = $dates;
        $this->view->value4 = $this->getHours();
        $this->view->menus = $this->getMenus();
        $this->view->categories = $this->getCategories();
        $this->view->render('admint', $users);
    }

    public function getMenus()
    {
        $this->loadModel('menus');
        return $this->nameClass->getMenus();
    }

    public function users($rol)
    {
        $data = $this->nameClass->users($rol);
        return $data;
    }

    public function deleteUser()
    {
        $this->loadModel('usuario');
        $this->nameClass->delete($_GET['user']);
    }

    public function date()
    {
        extract($_REQUEST);
        $explodeDate = explode('-', $_REQUEST['date']);
        $date = $explodeDate[0] . '/' . $explodeDate[1] . '/' . $explodeDate[2];


        $this->nameClass->insertDate($explodeDate, $date);

        echo "<script>alert('" . $date . "')</script>";
    }

    public function getDatesNotAvailable()
    {
        $this->loadModel('dates');
        return $this->nameClass->dateNotAvailable();
    }

    public function deleteDateNotAvailable()
    {
        extract($_REQUEST);

        $this->loadModel('dates');

        $this->nameClass->deleteDateNotAvailable($_REQUEST['IDdate']);
    }

    public function addDateNotAvailable()
    {
        extract($_REQUEST);
        $this->loadModel('dates');
        $this->nameClass->addDateNotAvailable($_REQUEST['date']);
    }

    public function getHours()
    {
        $this->loadModel('schedule');
        return $this->nameClass->getHour();
    }

    public function deleteHour()
    {
        extract($_REQUEST);
        $this->loadModel('schedule');
        $this->nameClass->deleteHour($_REQUEST['IDhour']);
    }

    public function addHour()
    {
        extract($_REQUEST);
        $this->loadModel('schedule');
        $this->nameClass->addHour($_REQUEST['hour']);
    }
    public function getCategories()
    {
        return $this->nameClass->getCategories();
    }

    public function getServices () {
        $this->loadModel('services');
        return $this->nameClass->getServices();
    }

    public function deleteService () {
        $id_service = $_GET['service'];
        $this->loadModel('services');
        $this->nameClass->deleteService($id_service);
    }

    public function addService () {
        extract($_REQUEST);

        $this->loadModel('services');

        $this->nameClass->addService(
            $_REQUEST['title_service'],
            $_REQUEST['description_service']
        );
    }
}
