<?php
class datesModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dateNotAvailable()
    {
        $query = "SELECT * FROM dates WHERE status = 'NOT AVAILABLE'";
        $result = mysqli_query($this->db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $dates[] = $row;
        }
        return $dates;
    }

    public function deleteDateNotAvailable($id)
    {
        $query = "UPDATE `dates` SET 
        `status`='AVAILABLE' 
        WHERE id_date = $id";

        mysqli_query($this->db, $query);
        echo $id;
    }

    public function addDateNotAvailable ($date) {
        $query = "INSERT INTO `dates`(`id_date`, `date`, `status`) 
        VALUES (rand(),'$date','NOT AVAILABLE')";
        if ($date == "") {
            echo "No se recibió una hora";
        }else{
            mysqli_query($this->db, $query);
        }
        echo $date;
    }
}
