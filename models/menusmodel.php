<?php
class menusModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMenus () {
        $query = "SELECT * FROM menus";
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
}