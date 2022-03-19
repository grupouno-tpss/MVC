<?php
    $customer_service_plant = '
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
          body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background: #c94b4b;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4b134f, #c94b4b);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          }
    
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
    
      <body style="margin: 0px; font-family: Helvetica;">
        <nav
          style="
            background-color: rgb(60 60 60);
            display: flex;
            align-items: center;
            justify-content: center;
          "
        >
          <span style="padding: 10px;">
            <img
              src="https://ichirakuramenco.com/wp-content/uploads/2020/05/cropped-Logo1-1-1-4.png"
              alt="Logo ichiraku"
              width="100px"
              style="display: block; margin: auto;"
            />
          </span>
          <div>
            <h3 style="font-size: 200%; color: white;">Ichiraku Ramen</h3>
          </div>
        </nav>
        <div>
          <h3>Atención al usuario</h3>
        </div>
        <hr><br>
        <div>
          <div
            style="
              background-color: #bcbebf;
              padding: 15px;
              margin: 15px;
              border-radius: 2px;
              color: #141619;
            "
          >
            '.$message_service.'
        </div>
        <br /><br />
        <a href="#">Terminos y condiciones</a>
    
        <footer
          style="color: white; padding: 30px; background-color: rgba(0, 0, 0, 0.9);"
        >
          Ichiraku Ramen
    
          <hr />
          <br />
          Lineas de atención: Telefono: 432342 <br />
          Celular: 3227519202
        </footer>
      </body>
    </html>
    
    ';
?>