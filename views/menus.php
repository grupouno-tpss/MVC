<body>
    <!--Ventana modal menus-->

    <!-- Modal -->
    <div class="modal fade" style="color: black;" id="menuAdmint" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir menù</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo constant('URL') ?>/menus/addMenu" method="post">
                        <label for="">Ingrese el titulo del menù</label>
                        <input type="text" class="form-control" name="title">
                        <label for="">Ingrese la descripciòn del menù</label>
                        <input type="text" class="form-control" name="desc">



                        <label for="">Ingrese el precio del menù</label>
                        <input type="text" class="form-control" name="price">
                        <label for="">Ingrese la URL de la imagen del menù</label>
                        <input type="text" class="form-control" name="url">
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Ventana modal de menus-->

    <!-- Modal -->
    <div class="modal fade" style="color: black;" id="updateMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar menu con id: <div id="idMenu"></div>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo constant('URL') ?>/menus/updateMenu" method="post">
                        <input type="text" id="idMenuInput" name="id" hidden>
                        <label for="">Ingrese el titulo del menú</label>
                        <input type="text" class="form-control" id="titleMenu" name="title">
                        <label for="">Ingrese la descripción del menú</label>
                        <input type="text" class="form-control" id="descriptionMenu" name="description">
                        <label for="">Ingrese el precio del menú</label>
                        <input type="text" class="form-control" id="priceMenu" name="price">
                        <label for="">Ingrese la url de la imagen del menú</label>
                        <input type="text" class="form-control" id="urlMenu" name="url">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <h1>Menus</h1>
            <div class="d-flex" style="flex-wrap: wrap;" id="selectedMenu"></div>
        </div>
        <hr>
        <br>
        <div>
            <?php
            if ($_SESSION['user_rol'] == "ADMINISTRADOR") {
                echo '
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#menuAdmint">
                    Añadir menù
                </button>
                ';
            }
            ?>
        </div>
        <div class="d-flex" style="flex-wrap: wrap; color:black">
            <?php
            foreach ($this->menus as $menu) {
                echo '
                    
                    <div class="card m-3 h-50%" style="width: 15rem; height: 500px;">
                    <img src="' . $menu['img_menu'] . '" class="card-img-top" style="height: 180px;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">' . $menu['title_menu'] . '</h5>
                      <p class="card-text h-10" style="overflow: auto; height: 150px;">' . $menu['description_menu'] . '</p>
                      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                      <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg>' . $menu['price_menu'] . ' unidad</p>

                    <!--Añadir menu-->
                      <button class="btn btn-primary" id="' . $menu['id_menu'] . '" onclick="addMenu(' . $menu['id_menu'] . ', `' . $menu['title_menu'] . '`)">Añadir al carrito</button>
                      
                      <!--Eliminar-->
                      <button class="btn btn-primary">
                      <a href="' . constant('URL') . "/menus/delete?id=" . $menu['id_menu'] . '" class="link-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                    </a>
                      </button>

                    <!--Actualizar-->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateMenu" onclick="dataMenu(`' . $menu['id_menu'] . '`, `' . $menu['title_menu'] . '`, `' . $menu['description_menu'] . '`, ' . $menu['price_menu'] . ', `' . $menu['img_menu'] . '`)">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                    ';
                //hidden
                if ($_SESSION['user_rol'] == "ADMINISTRADOR") {
                    echo '<script>
                    document.getElementById("' . $menu['id_menu'] . '").hidden=true;
                </script>';
                }
            }
            ?>
        </div>
    </div>

    <script>
        let menus = [];

        function dataMenu(id, title, description, price, img) {
            document.getElementById('idMenu').innerHTML = id;
            document.getElementById('idMenuInput').value = id;
            document.getElementById('titleMenu').value = title;
            document.getElementById('descriptionMenu').value = description;
            document.getElementById('priceMenu').value = price;
            document.getElementById('urlMenu').value = img;
        }

        //carrito menu

        function addMenu(id, title) {
            menus.push(id);
            console.log(menus);
            asignar();
            // let div = document.createElement('div');
            // div.innerHTML = '<div class="btn btn-success">'+title+'    <button class="btn">X</button> </div>';
            // document.getElementById('selectedMenu').appendChild(div);
            document.getElementById(id).classList.add('btn-success');
        }
    </script>
</body>