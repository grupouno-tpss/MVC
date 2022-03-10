<?php
class scheduleModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getHour()
    {
        $query = "SELECT `id_schedule`, `schedule`, `status` FROM `schedules` WHERE 1";
        $result = mysqli_query($this->db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $hours[] = $row;
        }
        return $hours;
    }

    public function deleteHour($id)
    {
        $query = "DELETE FROM `schedules` WHERE id_schedule = $id";
        mysqli_query($this->db, $query);
        echo "Se ha eliminado la hora";
    }

    public function addHour($hour)
    {
        echo $hour;
        $query = "INSERT INTO `schedules`(`id_schedule`, `schedule`, `status`) 
        VALUES (" . rand() . ",'$hour','AVAILABLE')";

        if ($hour == "" || null) {
            echo "No se recibió la hora";
        } else {
            mysqli_query($this->db, $query);
            echo "Se ha agregado una hora";
        }
    }
}
