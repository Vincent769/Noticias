<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: solid 5px black;">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Contrasenia</th>
        </tr>

        <?php
            foreach ($usuarios as $key) {
                echo '<tr>';
                echo '<td> ' . $key['nombre'];
                echo '<td> ' . $key['apellido'];
                echo '<td> ' . $key['correo'];
                echo '<td> ' . $key['telefono'];
                echo '<td> ' . $key['contrasenia'];
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>