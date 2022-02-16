<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "layouts/nav.php"; ?>

    <div class="container">
        <h2>Actualizar reservación <?php echo $_GET['update'] ?></h2>
        <hr><br>

        <div class="">
            <form action="">
                <label for="">Fecha</label>
                <input type="text" class="form-control" id="" name="">
                <label for="">Hora</label>
                <input type="text" class="form-control" id="" name="">
                <label for="">Cantidad de personas</label>
                <input type="text" class="form-control" id="" name="">
                <label for="">Detalle de la reserva</label>
                <input type="text" class="form-control" id="" name="">
                <label for="">Titular de la reserva</label>
                <input type="text" class="form-control" id="" name="">
                <label for="">Correo electrónico</label>
                <input type="text" class="form-control" id="" name="">
                <label for="">Menus escogidos (opcional)</label>
                <input type="text" class="form-control" id="" name="">
            </form>
        </div>
    </div>

    <!--

    id_reservation, amount_people, date, 
        schedule, p_nombre, p_apellido, email, detail
    -->
</body>

</html>