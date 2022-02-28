<?php
class reservaModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function insertReserve(
        $id,
        $fecha,
        $hora,
        $cantPersonas,
        $tipoServicio,
        $especificacion,
        $menu
    ) {
        echo "Jpñaflaksdlñfkasd";

        $menuExplode = explode(',', $menu);

        echo $id . "<br>";
        echo $fecha . "<br>";
        echo $hora . "<br>";
        echo $cantPersonas . "<br>";
        echo $tipoServicio . "<br>";
        echo $especificacion . "<br>";

        echo $menuExplode[0];
        $date = "INSERT INTO `dates`(`id_date`, `date`, `status`) 
        VALUES ($id ,'$fecha','AVAILABLE')";

        $detail = "INSERT INTO `details`(`id_detail`, `detail`) 
        VALUES ($id,'$especificacion')";

        $reserve = "INSERT INTO `reservations`(`id_reservation`, `amount_people`,
        `status`,
         `dates_id_date`, `schedules_id_schedule`, `users_id_users`, 
         `details_id_detail`, `services_id_service`) VALUES ($id, $cantPersonas, 'ACTIVE', $id,
         $hora, " . $_SESSION['user_id'] . ", $id, $tipoServicio)";

        mysqli_query($this->db, $date);

        mysqli_query($this->db, $detail);
        mysqli_query($this->db, $reserve);

        if ($menu == "") {
            echo "no hay menus escogidos";
        } else {
            foreach ($menuExplode as $menus) {
                $query = "INSERT INTO `reservations_has_menus`(`reservations_id_reservation`, `menus_id_menu`, `user_id`)
            VALUES ($id, $menus, " . $_SESSION['user_id'] . ")";
                echo "<br>" . $query . "<br>";
                mysqli_query($this->db, $query);
            }
        }
        echo "Reservación hecha";

        echo "<script>location.href ='" . constant('URL') . "/reservaciones'</script>";
    }

    public function statusReserve($id)
    {
        $query = "UPDATE `reservations` SET `status`='NOT ACTIVE' 
        WHERE id_reservation = $id";

        mysqli_query($this->db, $query);
        echo "<script>alert('Estado cambiado')</script>";
        echo "<script>location.href ='" . constant('URL') . "/worker'</script>";
    }

    public function dates()
    {
        $schedule = "SELECT * FROM schedules";
        $resultado = mysqli_query($this->db, $schedule);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $this->hours[] = $row;
        }
        return $this->hours;
    }

    public function datesNotAvailable()
    {
        $schedule = "SELECT * FROM dates WHERE status = 'NOT AVAILABLE'";
        $resultado = mysqli_query($this->db, $schedule);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $this->hours[] = $row;
        }
        return $this->hours;
    }

    public function insertDate($explodeDate, $date)
    {
        $query = "INSERT INTO `dates`(`id_date`, `date`, `status`) 
        VALUES ($explodeDate[0].$explodeDate[2],'$date','NOT AVAILABLE')";

        mysqli_query($this->db, $query);
        echo "<script>alert('Se ha agregado una fecha no disponible')</script>";
    }
    public function reservationsUser()
    {
        $reservations = "SELECT id_reservation, amount_people, date, 
        schedule, p_nombre, p_apellido, email, detail FROM reservations R 
        INNER JOIN users U ON U.id_users = " . $_SESSION['user_id'] . " INNER JOIN dates D 
        ON D.id_date = R.dates_id_date INNER JOIN schedules S 
        ON S.id_schedule = R.schedules_id_schedule INNER JOIN details E 
        ON E.id_detail = R.details_id_detail WHERE R.users_id_users = " . $_SESSION['user_id'] . " AND R.status = 'ACTIVE'";

        $result = mysqli_query($this->db, $reservations);

        while ($row = mysqli_fetch_assoc($result)) {
            $reservation[] = $row;
        }
        return $reservation;
    }
    public function reservations()
    {
        $reservations = "SELECT id_reservation, amount_people, date, 
        schedule, p_nombre, p_apellido, email, detail FROM reservations R 
        INNER JOIN users U ON U.id_users = U.id_users INNER JOIN dates D 
        ON D.id_date = R.dates_id_date INNER JOIN schedules S 
        ON S.id_schedule = R.schedules_id_schedule INNER JOIN details E 
        ON E.id_detail = R.details_id_detail  WHERE R.users_id_users = U.id_users 
        AND R.status = 'ACTIVE'";

        $result = mysqli_query($this->db, $reservations);

        while ($row = mysqli_fetch_assoc($result)) {
            $this->reserve[] = $row;
        }
        return $this->reserve;
    }

    public function updateReservation($id, $date, $amount_people, $hour, $detail, $menu)
    {
        $dateExplode = explode('-', $date);
        echo $dateExplode[2] . '/' . $dateExplode[1] . '/' . $dateExplode[0];
        $dates = "UPDATE `dates` SET `date`='" . $dateExplode[0] . '/' . $dateExplode[1] . '/' . $dateExplode[2] . "' 
        WHERE id_date = $id";

        $details = "UPDATE `details` SET `detail`='$detail'
        WHERE id_detail = $id";
        $explodeMenu = explode(',', $menu);

        $deleteMenus = "DELETE FROM `reservations_has_menus` 
        WHERE reservations_id_reservation = $id";

        // foreach ($explodeMenu as $itemMenu) {
        //     $menu = "UPDATE `reservations_has_menus` 
        //     SET `reservations_id_reservation`=$id,
        //     `menus_id_menu`=$itemMenu 
        //     WHERE 1";

        //     mysqli_query($this->db, $menu);
        // }

        $queryUpdate = "UPDATE `reservations` 
        SET `amount_people`=$amount_people,
        `status`='ACTIVE',`dates_id_date`=$id,
        `schedules_id_schedule`=$hour,`users_id_users`=" . $_SESSION['user_id'] . " WHERE id_reservation = $id";

        mysqli_query($this->db, $dates);

        mysqli_query($this->db, $deleteMenus);

        foreach ($explodeMenu as $insertMenu) {
            $queryMenu = "INSERT INTO 
            `reservations_has_menus`(`reservations_id_reservation`, 
            `menus_id_menu`) 
            VALUES ($id, $insertMenu)";

            mysqli_query($this->db, $queryMenu);
        }
        mysqli_query($this->db, $details);
        mysqli_query($this->db, $queryUpdate);
        echo "<script>location.href = '" . constant('URL') . "/reservaciones'</script>";
    }

    public function changeStatus($id)
    {
        $query = "UPDATE `reservations` SET `status`='NOT ACTIVE' WHERE id_reservation = $id";
        mysqli_query($this->db, $query);
        echo "<script>location.href ='" . constant('URL') . "/reservaciones'</script>";
    }

    public function getDatesNotAvailables()
    {
        $query = "SELECT * FROM `dates` WHERE status = 'NOT AVAILABLE'";
        $result = mysqli_query($this->db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $dateNotAvailable[] = $row;
        }
        return $dateNotAvailable;
    }
}


// public function dates()
//     {
//         $schedule = "SELECT * FROM schedules";
//         $resultado = mysqli_query($this->db, $schedule);

//         while ($row = mysqli_fetch_assoc($resultado)) {
//             $this->hours[] = $row;
//         }
//         return $this->hours;
//     }
