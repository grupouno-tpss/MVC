<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer service</title>
    <?php require 'views/layouts/resources/styles.php'?>
</head>
<body>
    <div class="container content">
        <br>
        <h3>Atención al cliente</h3>
        <hr><br>
        <form action="<?php echo constant('URL')?>/email/customer_service" method="POST">

            <!-- <label for="id">Ingrese su nombre</label>
            <input type="text" class="form-control" id="id" name="id">
            <label for="email">Ingrese su correo electrónico</label>
            <input type="text" class="form-control" id="email" name="email">
            <label for="message">Ingrese su mensaje</label>
            <textarea name="message" id="message" class="form-control"></textarea> -->
           <?php
            if(isset($_SESSION['user_rol'])) {
                echo '
                <label for="id">Ingrese su nombre</label>
                <input type="text" class="form-control" id="id" name="id">
                <label for="email">Ingrese su correo electrónico</label>
                <input type="text" class="form-control" id="email" name="email">
                <label for="message">Ingrese su mensaje</label>
                <textarea name="message-service" id="message" class="form-control"></textarea>
                ';
            }else{
                echo '
                <label for="id">Ingrese su nombre</label>
                <input type="text" class="form-control" id="id" name="id">
                <label for="email">Ingrese su correo electrónico</label>
                <input type="text" class="form-control" id="email" name="email">
                <label for="message">Ingrese su mensaje</label>
                <textarea name="message-service" id="message" class="form-control"></textarea>
                ';
            }
           ?>
           <br>
           <input type="submit" class="btn btn-primary" name="customer_service">
        </form>
    </div>
</body>
</html>