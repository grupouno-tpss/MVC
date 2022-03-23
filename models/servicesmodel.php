<?php
class servicesModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addService($title, $description)
    {
        $query = "INSERT INTO `services`(`id_service`, `service`, `description_service`)
            VALUES (" . rand() . ",'$title','$description')";

        if ($title == "") {
            echo "No se recibieron los datos para agregar el servicio";
        } else {
            mysqli_query($this->db, $query);
            echo '<script>location.href = "' . constant('URL') . '/admint"</script>';
        }
    }

    public function getServices()
    {
        $query = "SELECT * FROM `services` WHERE 1";

        $result = mysqli_query($this->db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $services[] = $row;
        }

        return $services;
    }
    public function updateServices()
    {
    }
    public function deleteService($id)
    {
        $query = "DELETE FROM `services` WHERE id_service = $id";
        $result = mysqli_query($this->db, $query);

        if ($result) {
            echo '<script>alert("Se ha elimida correctamente el servicio")</script>';
        } else {
            echo '<script>alert("ha ocurrido un problema al eliminar el servicio")</script>';
        }
        echo '<script>location.href = "' . constant('URL') . '/admint"</script>';
    }
}
