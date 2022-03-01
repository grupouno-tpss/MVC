<?php
class report extends Controller
{
    public function reservations()
    {
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=reservaciones.xls');

        $this->loadModel('reserva');
        $reservas = $this->nameClass->reservations();

        echo '

            <table style="border:solid black 1px">
            <tr>
            <th scope="col">ID reserva</th>
            <th scope="col">Titular reserva</th>
            <th scope="col">Cantidad de personas</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Detalle</th>
            <th scope="col">Menus</th>
            <th scope="col">Email</th>
            </tr>
            <tr>
        ';

        foreach ($reservas as $reserva) {
            echo '<tr>
                        <th scope="row">' . $reserva['id_reservation'] . '</th>
                        <td>' . $reserva['p_nombre'] . ' ' . $reserva['p_apellido'] . '</td>
                        <td>' . $reserva['amount_people'] . '</td>
                        <td>' . $reserva['date'] . '</td>
                        <td>' . $reserva['schedule'] . '</td>
                        <td>' . $reserva['detail'] . '</td>
                        <td id="' . $reserva['id_reservation'] . '"></td>
                        <td>' . $reserva['email'] . '</td>
                        <td>
                        </td>
                    </tr>';
        }

        echo '
            </tr>
            </table>
            ';
    }
}
