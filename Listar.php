<?php
// Conexión a la base de datos
$mysqli = new mysqli("nombre_de_host", "nombre_de_usuario", "contraseña", "nombre_de_base_de_datos");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

// Consulta SQL para obtener los registros de la base de datos
$query = "SELECT * FROM nombre_de_tabla";
$result = $mysqli->query($query);

// Mostrar los registros en una tabla
echo "<table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido"] . "</td>
        </tr>";
}
echo "</table>";

// Cerrar la conexión
$mysqli->close();
?>
