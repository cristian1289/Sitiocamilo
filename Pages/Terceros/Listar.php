<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>IDENTIFICACION TERCERO</th>
                <th>NOMBRE TERCERO</th>
                <th>EMAIL TERCERO</th>
                <th>CELULAR TERCERO</th>
                <th>TELEFONO TERCERO</th>
                <th>DIRECCION TERCERO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../../Datos/Conexion.php");

            $consulta = mysqli_query($conexion, "SELECT * FROM terceros");
            while ($fila = mysqli_fetch_array($consulta)) {
                printf('
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>
                    ', $fila["identificacionTercero"], $fila["nombreTercero"], $fila["emailTercero"], $fila["celularTercero"], $fila["telefonTercero"], $fila["direccionTercero"]);
            }


            ?>


        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>