<?php
class menusModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMenus () {
        $query = "SELECT * FROM menus ";
        $result = mysqli_query($this->db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $menus[] = $row;
        }
        return $menus;
    }

    public function getMenusUser () {
        $query = "SELECT id_menu, title_menu, description_menu, price_menu, 
        id_menu, id_reservation FROM menus M INNER JOIN reservations R 
        ON R.users_id_users = ".$_SESSION['user_id']." INNER JOIN reservations_has_menus RM 
        ON RM.reservations_id_reservation = R.id_reservation 
        WHERE M.id_menu = RM.menus_id_menu";
        $result = mysqli_query($this->db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $menus[] = $row;
        }
        return $menus;
    }

    public function getMenusReservations () {
        $query = "SELECT id_menu, title_menu, description_menu, price_menu, 
        id_menu, id_reservation FROM menus M INNER JOIN reservations R 
        ON R.users_id_users = R.users_id_users INNER JOIN reservations_has_menus RM 
        ON RM.reservations_id_reservation = R.id_reservation 
        WHERE M.id_menu = RM.menus_id_menu";
        $result = mysqli_query($this->db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $menus[] = $row;
        }
        return $menus;
    }

    public function addMenu ($title, $desc,$price, $url) {
        $queryMenu = "INSERT INTO `menus`(`id_menu`, `title_menu`, 
        `description_menu`, `price_menu`, `img_menu`) 
        VALUES (".rand().",'$title','$desc',
        '$price','$url')";
        echo $queryMenu;

        if ($title == "") {
            echo "No se recibieron datos";
        }else{
            mysqli_query($this->db, $queryMenu);
        }
    }

    public function updateMenu($id, $title, $description, $price, $url) {

        $query = "UPDATE `menus` SET 
        `title_menu`='$title',`description_menu`='$description',
        `price_menu`=$price,`img_menu`='$url' 
        WHERE id_menu = $id";

        mysqli_query($this->db, $query);
        echo $query. "<br>";
        echo "<br> <p class='bg-success'>Menú actualizado</p>";
        echo "<script>location.href='".constant('URL')."/menus'</script>";
    }

    public function delete ($id) {
        $query = "DELETE FROM `menus` WHERE id_menu = $id";
        mysqli_query($this->db, $query);
        echo "Menu eliminado";
        echo "<script>location.href='".constant('URL')."/menus'</script>";
    }
}