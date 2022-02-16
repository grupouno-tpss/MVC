<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .center {
            display: flex;
            justify-content: center;
        }

        .estado {
            color: red;
            font-weight: bold;
        }

        td,
        th {
            border: solid 1px black;
            text-align: center;
        }

        .tab {
            overflow-x: auto;
            height: 80vh;
        }
    </style>
</head>

<body>
    <?php
    include "layouts/nav.php";
    ?>

    <!--Ventanas modales-->


    <!--Modal de "modificar reserva"-->
    <form action="" method="post">
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateTitle"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="">Fecha</label>
                        <input type="date" class="form-control" id="date" name="">
                        <label for="">Hora</label>
                        <input type="time" class="form-control" id="schedule" name="">
                        <label for="">Cantidad de personas</label>
                        <input type="text" class="form-control" id="amount_people" name="">
                        <label for="">Detalle de la reserva</label>
                        <input type="text" class="form-control" id="detail" name="">
                        <label for="">Titular de la reserva</label>
                        <input type="text" class="form-control" id="name" name="" disabled>
                        <label for="">Correo electrónico</label>
                        <input type="text" class="form-control" id="email" name="">
                        <br>
                        <label for="">Menus escogidos (opcional)</label>
                        <div class="bg-secondary p-3 text-white" id="menu"></div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Seleccionar nuevos menús</button>
                        <input type="submit" class="btn btn-primary" name="" id="" value="Actualizar reserva">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Escoger menús</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex">
                            <?php
                            foreach ($this->value3 as $menu) {
                                echo '
                            <div class="card w-75 h-50">
                                <img src="' . $menu['img_menu'] . '" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">' . $menu['title_menu'] . '</h5>
                                <p class="card-text">' . $menu['description_menu'] . '</p>
                            <button class="btn btn-primary" onclick="addMenu(' . $menu['id_menu'] . '); asignar(); alert(`Se ha agregado el menú al carrito de compras`);">Añadir al carrito</button>
                             </div>
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="" id="" value="Actualizar reserva">

                    </div>
                </div>
            </div>
        </div>
    </form>


    <!--RESERVACIONES-->

    <div class="container">
        <h2>Reservaciones</h2>
        <hr><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" onclick="alert('Hola')">ID reserva</th>
                    <th scope="col">Titular reserva</th>
                    <th scope="col">Cantidad de personas</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Menus</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($value as $reserve) {

                    echo '<tr>
                        <th scope="row">' . $reserve['id_reservation'] . '</th>
                        <td>' . $reserve['p_nombre'] . ' ' . $reserve['p_apellido'] . '</td>
                        <td>' . $reserve['amount_people'] . '</td>
                        <td>' . $reserve['date'] . '</td>
                        <td>' . $reserve['schedule'] . '</td>
                        <td>' . $reserve['detail'] . '</td>
                        <td id="' . $reserve['id_reservation'] . '"></td>
                        <td>' . $reserve['email'] . '</td>
                        <td>
                        <button type="button" onclick="udpateReservation(' . $reserve['id_reservation'] . ', `' . $reserve['p_nombre'] .  $reserve['p_apellido'] . '`, ' . $reserve['amount_people'] . ', `' . $reserve['date'] . '`, `' . $reserve['schedule'] . '`,`' . $reserve['email'] . '`)" 
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Actualizar reservación</button>
                        
                        <button class="btn btn-danger"><a href="' . constant('URL') . '/update_reservation?cancel=' . $reserve['id_reservation'] . '" class="link-light">Cancelar reserva</a></button>
                        </td>
                    </tr>';
                }

                foreach ($this->value2 as $menu) {
                    echo "<script>
                            console.log(document.getElementById('" . $menu['id_reservation'] . "'));
                            document.getElementById('" . $menu['id_reservation'] . "').append('" . $menu['title_menu'] . "', '  -  ');     
                            document.getElementById('menu').append('" . $menu['title_menu'] . "', '  -  ');                   
                        </script>";
                }
                ?>
            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function udpateReservation(id, name, amount_people, date, schedule, email) {

            document.getElementById('updateTitle').innerHTML = "Actualizar reservación " + id;
            document.getElementById('name').value = name;
            document.getElementById('amount_people').value = amount_people;
            document.getElementById('date').value = date;
            document.getElementById('schedule').value = schedule;
            document.getElementById('email').value = email;
        }
    </script>
</body>

</html>