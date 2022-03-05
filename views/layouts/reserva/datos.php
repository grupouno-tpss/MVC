<section class="container">
    <h2>2. Datos adicionales</h2>
    <div>
        <form id="datosAdicionales">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad de personas *</label>
                <input type="number" class="form-control" id="cantidadPersonas" aria-describedby="emailHelp">
            </div>
            <br>
            <label for="servicioTipo">Seleccione el tipo de servicio</label>
            <select id="servicioTipo" class="form-select" aria-label="Default select example">
                <?php
                foreach ($this->value3 as $service) {
                    echo '<option value="' . $service['id_service'] . '">' . $service['service'] . '</option>';
                }
                ?>
            </select>
            <br>
            <div class="mb-3">
                <label for="comentario">Ingrese las indicaciones de su resevación</label>
                <textarea class="form-control" id="comentario" aria-label="With textarea"></textarea>
            </div>
            <input type="submit" id="next2" value="Siguiente">
        </form>

        <!-- <button id="reservar"><a href="#cargarReserva">Reservar</a></button> -->
    </div>
    <br>

    <script>
        document.getElementById("next2").addEventListener("click", () => {
            asignar();
            document.getElementById('info_reservation').innerHTML = "";
            dataInformation();
            location.href = "#menus"
        });
        document.getElementById("datosAdicionales").addEventListener("submit", (e) => {
            e.preventDefault();
            dataReserva[2] = document.getElementById("cantidadPersonas").value;
            dataReserva[3] = document.getElementById("servicioTipo").value;
            dataReserva[4] = document.getElementById("comentario").value;
        });
    </script>
</section>