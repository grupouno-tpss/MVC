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

            <table>
            <caption style="margin:15px; text-align: center; background: teal; color: white;">Reservaciones activas (Ichiraku Ramen)</caption>
            <tr>
            <th scope="col">ID reserva</th>
            <th scope="col">Titular reserva</th>
            <th scope="col">Cantidad de personas</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Detalle</th>
            <th scope="col">Menus</th>
            <th scope="col">Email</th>
            <th scope="col">Estado</th>
            </tr>
            <tr>
        ';

        foreach ($reservas as $reserva) {
            echo '<tr>
                        <th scope="row" style="border: solid black 1px;">' . $reserva['id_reservation'] . '</th>
                        <td style="border: solid black 1px;">' . $reserva['p_nombre'] . ' ' . $reserva['p_apellido'] . '</td>
                        <td style="border: solid black 1px;">' . $reserva['amount_people'] . '</td>
                        <td style="border: solid black 1px;">' . $reserva['date'] . '</td>
                        <td style="border: solid black 1px;">' . $reserva['schedule'] . '</td>
                        <td style="border: solid black 1px;">' . $reserva['detail'] . '</td>
                        <td id="' . $reserva['id_reservation'] . '" style="border: solid black 1px;"></td>
                        <td style="border: solid black 1px;">' . $reserva['email'] . '</td>
                        <td style="border: solid black 1px;">Activa</td>
                    </tr>';
        }

        echo '
            </tr>
            </table>
            ';
    }
}
