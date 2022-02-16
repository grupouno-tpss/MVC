<section>
    <div class="container">
        <h2>3. Seleccione el menú</h2>
        <hr><br>
    </div>
    <div class="d-flex container" style="overflow-x: auto;">
        <?php
        foreach ($this->value2 as $menu) {
            echo '
            <div class="card w-75 h-50">
            <img src="' . $menu['img_menu'] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $menu['title_menu'] . '</h5>
                <p class="card-text">' . $menu['description_menu'] . '</p>
                <button class="btn btn-primary" onclick="addMenu('.$menu['id_menu'].')">Añadir al carrito</button>
            </div>
        </div>
            
            ';
        }
        ?>
    </div>
</section>