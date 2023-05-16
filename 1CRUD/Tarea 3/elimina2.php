<?php
// Incluye el archivo "conectar.php", que contiene la función "conecta()" para conectarse a la base de datos.
include 'conectar.php';

// Llama a la función "conecta()" y almacena la conexión en la variable "$con".
$con = conecta();

// Verifica si se ha enviado un formulario con el campo "no" definido.
if (isset($_POST['no'])) {
    // Obtiene el valor del campo "no" del formulario.
    $no = $_POST['no'];

    // Define una consulta SQL para eliminar el registro con el ID especificado de la tabla "producto".
    $query = "DELETE FROM producto WHERE idproducto = :idproducto";

    // Prepara la consulta utilizando el objeto "$con" y almacena el resultado en la variable "$stmt".
    $stmt = $con->prepare($query);

    // Vincula el valor del campo "no" a la variable ":idproducto" en la consulta.
    $stmt->bindParam(':idproducto', $no);

    // Ejecuta la consulta utilizando el método "execute()" del objeto "$stmt".
    if ($stmt->execute()) {
        // Redirige al usuario a la página "elimina.php" si se eliminó correctamente el registro.
        header("Location: elimina.php");
    } else {
        // se imprime un mensaje en pantalla indicando que hubo un error al eliminar el registro.
        echo "Error al eliminar el registro";
    }
}
?>