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
}