<?php
    $reservation = '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            th,
            td {
                width: 50%;
                padding: 10px;
                background-color: #302b2b;
                color: white;
                border-radius: 5px;
            }
            
            caption {
                color: white;
                margin-bottom: 15px;
            }
            
            a {
                color: white;
            }
            
            table {
                overflow-x: auto;
            }
        </style>
    </head>
    
    <body style="margin: 0px; font-family: Helvetica; background-image: url(`https://jhojann-triana.000webhostapp.com/public/multimedia/emailB.jpg`);">
        <nav style="background-color: rgb(60 60 60); display: flex; align-items: center; justify-content:center;">
            <span style="padding: 10px;">
               <img src="https://ichirakuramenco.com/wp-content/uploads/2020/05/cropped-Logo1-1-1-4.png"
                alt="Logo ichiraku"
                width="100px"
                style="display: block; margin: auto;">
           </span>
            <div>
                <h3 style="font-size: 200%; color: white;">Ichiraku Ramen</h3>
            </div>
        </nav>
    
        <div>
            <div style="background-color: #bcbebf; padding: 15px; margin: 15px; border-radius: 2px; color: #141619">
                <strong>Confirmación de reserva. </strong> <br> Señor (a) usuario, hemos recibido su solicitud de reservación, lo invitamos a que revise los datos que nuestra plataforma ha recopilado para que podamos prestarle correctamente nuestros servicios
                y sin inconvenientes.
            </div>
        </div>
    
        <div style="padding: 15px;">
            <div style="background-color: rgb(46, 129, 60);
            padding: 15px; border-radius:5px; color: white;
            text-align: center; font-weight: bold;">
                Reservación para el 28/02/2022
            </div>
            <br>
            <div style="background-color: rgba(0,0,0,0.5); padding: 10px; border-radius:5px; padding-bottom: 30px;">
                <center>
                    <table style="width: 80%;  border-radius: 5px;">
                        <caption>Datos de usuario</caption>
                        <br>
                        <tr>
                            <td>Titular de la reserva <br> '.$_SESSION['user_pNombre']. " " . $_SESSION['user_pApellido'].'</td>
                            <td>Correo electrónico <br> jhostriana11@misena.edu.co</td>
                        </tr>
                        <tr>
                            <td>Numero Celular <br> 3227519202</td>
                            <td>Numero Telefónico <br> 6328202</td>
                        </tr>
                    </table>
                    <br>
                    <table style="width: 80%;  border-radius: 5px;">
                        <caption>Datos de reservación</caption>
                        <br>
                        <tr>
                            <td>ID de la reserva <br> '.$id.'</td>
                            <td>Cantidad de personas <br> '.$cantPersonas.'</td>
                        </tr>
                        <tr>
                            <td>Fecha seleccionada: <br> '.$fecha.'</td>
                            <td>Hora seleccionada: <br> '.$hora.' (formato militar)</td>
                        </tr>
                        <tr>
                            <td>Servicio seleccionado: <br> '.$tipoServicio.'</td>
                            <td>Menús seleccionados <br> '.$menu.' <a href="#">Ver menús</a></td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
        <div>
            <div style="background-color: #bcbebf; padding: 15px; margin: 15px; border-radius: 2px; color: #141619">
                <strong>¡Atención! </strong>Por favor revise detalladamente cada item de la sección anterior, si hay algun problema por favor comunicarlo a las lineas de atención o por la nuestra plataforma <a href="#">SRI</a>
            </div>
        </div>
        <br><br>
        <div style="margin-bottom: 30px;">
            <center>
                <img style="border-radius: 5px; width: 65%;" src="https://jhojann-triana.000webhostapp.com/public/multimedia/back.gif" alt="">
                <h3 style="color: white;">Gracias por utilizar nuestros servicios 😄</h3>
            </center>
        </div>
        <br><br>
        <a href="#">Terminos y condiciones</a>
    
        <footer style="color: white; padding: 30px; background-color: rgba(0,0,0,0.9);">
            Ichiraku Ramen
    
            <hr><br> Lineas de atención: Telefono: 432342 <br> Celular: 3227519202
        </footer>
    </body>
    
    </html>
    ';
?>