<?php
// Se incluye el archivo que contiene la función de conexión a la base de datos
include('conectar.php');
// Se establece la conexión con la base de datos utilizando la función conecta()
$con = conecta();

// Se define la consulta a realizar
$consulta = "SELECT * FROM producto";
// Se ejecuta la consulta en la conexión establecida anteriormente y se obtiene un objeto "PDOStatement"
$stmt = $con->query($consulta);
// Se obtienen todas las filas resultantes de la consulta en un arreglo asociativo mediante el método "fetchAll"
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head><title>Buscar</title></head>
<body>
  <h1>Buscar Productos</h1>
  <table>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Descripción</th>
    </tr>
    <?php foreach ($resultado as $fila): ?>
    <tr>
      <td><?php echo $fila['idproducto']; ?></td>
      <td><?php echo $fila['nombre']; ?></td>
      <td><?php echo $fila['descripcion']; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
