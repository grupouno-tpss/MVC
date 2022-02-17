<?php
class usuarioModel extends Model
{
    private $_p_nombre;
    private $_s_nombre;
    private $_p_apellido;
    private $_s_apellido;
    private $_email;
    private $_telefono;
    private $_tel_celular;
    private $contraseña;

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        //consultar usuario
        $usuario = "SELECT id_users, p_nombre, s_nombre, p_apellido, s_apellido, 
        password, email, rol, num_telefono, num_celular FROM users U INNER JOIN roles 
        ON roles.id_rol = U.roles_id_rol INNER JOIN contactos C ON C.id_contacto =U.id_users
        WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($this->db, $usuario);

        // while ($row = mysqli_fetch_assoc($result)) {

        // }

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row) {
                $_SESSION['user_pNombre'] = $row['p_nombre'];
                $_SESSION['user_sNombre'] = $row['s_nombre'];
                $_SESSION['user_pApellido'] = $row['p_apellido'];
                $_SESSION['user_sApellido'] = $row['s_apelldio'];
                $_SESSION['user_id'] = $row['id_users'];
                $_SESSION['user_password'] = $row['password'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_rol'] = $row['rol'];
                $_SESSION['user_celular'] = $row['num_celular'];
                $_SESSION['user_telefono'] = $row['num_telefono'];
                echo $row['email'];
                echo "<script>location.href ='" . constant('URL') . "/options'</script>";
            } else {
                session_destroy();
                echo "no hay usuario";
                echo "<script>location.href ='" . constant('URL') . "/login'</script>";
            }
        }
    }

    public function insertar(
        $id,
        $rol,
        $_p_nombre,
        $_s_nombre,
        $_p_apellido,
        $_s_apellido,
        $_email,
        $_telefono,
        $_tel_celular,
        $contraseña,
    ) {

        echo "Hey, el modelo de usuario esta presente jsjs" . "<br>";
        echo $id . "<br>";
        echo $rol . "<br>";
        echo $_p_nombre . "<br>";
        echo $_s_nombre . "<br>";
        echo $_p_apellido . "<br>";
        echo $_s_apellido . "<br>";
        echo $_email . "<br>";
        echo $_telefono . "<br>";
        echo $_tel_celular . "<br>";
        echo $contraseña . "<br>";

        $contacto = "INSERT INTO `contactos`(`id_contacto`, `num_telefono`, 
        `num_celular`) VALUES ($id, $_telefono, $_tel_celular)";

        $usuario = "INSERT INTO `users`(`id_users`, `email`, `password`, 
        `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `roles_id_rol`, 
        `contactos_id_contacto`) VALUES ($id, '$_email','$contraseña',
        '$_p_nombre','$_s_nombre','$_p_apellido','$_s_apellido', $rol, $id)";

        mysqli_query($this->db, $contacto);
        mysqli_query($this->db, $usuario);

        echo "<script>alert('Se ha registrado el usuario')</script>";
        if ($rol == 1) {
            header('Location: ' . constant('URL') . '/login');
        } else {
            header('Location: ' . constant('URL') . '/admint');
        }
    }

    public function delete($id)
    {
        $queryReserve = "DELETE FROM `reservations` WHERE users_id_users = $id";
        $queryUser = "DELETE FROM `users` WHERE id_users = $id";
        mysqli_query($this->db, $queryReserve);
        mysqli_query($this->db, $queryUser);
        echo "Se ha eliminado el usuario";
    }
    public function actualizar()
    {
    }

    public function users($rol)
    {
        $query = "SELECT id_users, p_nombre, s_nombre, p_apellido, email, 
        num_celular, num_telefono, rol FROM users U INNER JOIN roles R 
        ON R.id_rol = U.roles_id_rol INNER JOIN contactos C 
        ON U.contactos_id_contacto = C.id_contacto AND U.roles_id_rol = U.roles_id_rol";

        $resultado = mysqli_query($this->db, $query);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $dataUsers[] = $row;
        }
        return $dataUsers;
    }
}
