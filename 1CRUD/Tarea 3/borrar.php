<?php
// Incluye el archivo "conectar.php", que contiene la función "conecta()" para conectarse a la base de datos.
include ("conectar.php");

// Llama a la función "conecta()" y almacena la conexión en la variable "$con".
$con = conecta();

// Define una consulta SQL para eliminar todos los registros de la tabla "producto" utilizando el comando "TRUNCATE".
$query = "TRUNCATE TABLE producto";

// Prepara la consulta utilizando el objeto "$con" y almacena el resultado en la variable "$stmt".
$stmt = $con->prepare($query);

// Ejecuta la consulta utilizando el método "execute()" del objeto "$stmt".
if($stmt->execute()) {
    // Imprime un mensaje en pantalla indicando que los registros se eliminaron correctamente.
    echo "<p>LOS REGISTROS SE ELIMINARON CON EXITO.</p><p><a href='elimina.php'>VOLVER ATRÁS</a></p>";
} else {
    // Imprime un mensaje en pantalla indicando que hubo un error al eliminar los registros.
    echo "Error al eliminar los registros";
}
?>