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

        echo $id . "<br>";
        echo $fecha . "<br>";
        echo $hora . "<br>";
        echo $cantPersonas . "<br>";
        echo $tipoServicio . "<br>";
        echo $especificacion . "<br>";
        echo $menu;
        $date = "INSERT INTO `dates`(`id_date`, `date`, `status`) 
        VALUES ($id ,'$fecha','DISPONIBLE')";

        $detail = "INSERT INTO `details`(`id_detail`, `detail`) 
        VALUES ($id,'$especificacion')";

        $reserve = "INSERT INTO `reservations`(`id_reservation`, `amount_people`,
        `status`,
         `dates_id_date`, `schedules_id_schedule`, `users_id_users`, 
         `details_id_detail`) VALUES ($id, $cantPersonas, 'AVAILABLE', $id,
         $hora, " . $_SESSION['user_id'] . ", $id)";

        mysqli_query($this->db, $date);
        echo "Reservación hecha";

        mysqli_query($this->db, $detail);
        mysqli_query($this->db, $reserve);
        echo "<script>location.href ='" . constant('URL') . "/reservaciones'</script>";
    }

    public function statusReserve($id){
        $query = "UPDATE `reservations` SET `status`='NOT AVAILABLE' 
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
        ON E.id_detail = R.details_id_detail WHERE R.users_id_users = " . $_SESSION['user_id'] . "";

        $result = mysqli_query($this->db, $reservations);

        while ($row = mysqli_fetch_assoc($result)) {
            $this->reserve[] = $row;
        }
        return $this->reserve;
    }
    public function reservations()
    {
        $reservations = "SELECT id_reservation, amount_people, date, 
        schedule, p_nombre, p_apellido, email, detail FROM reservations R 
        INNER JOIN users U ON U.id_users = U.id_users INNER JOIN dates D 
        ON D.id_date = R.dates_id_date INNER JOIN schedules S 
        ON S.id_schedule = R.schedules_id_schedule INNER JOIN details E 
        ON E.id_detail = R.details_id_detail WHERE R.users_id_users = U.id_users AND R.status = 'AVAILABLE'";

        $result = mysqli_query($this->db, $reservations);

        while ($row = mysqli_fetch_assoc($result)) {
            $this->reserve[] = $row;
        }
        return $this->reserve;
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
