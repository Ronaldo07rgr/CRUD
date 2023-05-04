<?php
// Incluimos el archivo conectar.php que contiene la función para conectarnos a la base de datos
include ('conectar.php');
// Llamamos a la función conecta() para establecer la conexión con la base de datos
$conecta=conecta();

// Obtenemos los valores de los campos del formulario enviados por POST
$idproducto = $_POST["idproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

// Preparamos la sentencia SQL para insertar un nuevo registro en la tabla "producto"
$sentencia = "INSERT INTO producto (idproducto, nombre, descripcion) VALUES (:idproducto, :nombre, :descripcion)";
$stmt = $conecta->prepare($sentencia);

// Ligamos los parámetros de la sentencia con los valores obtenidos del formulario
$stmt->bindParam(':idproducto', $idproducto);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':descripcion', $descripcion);

// Ejecutamos la sentencia preparada y verificamos si se insertó el registro
if($stmt->execute()){
    // Si se insertó el registro, mostramos un mensaje de éxito
    echo "REGISTRO EXITOSO";
} else {
    // Si no se insertó el registro, mostramos un mensaje de error con la información del error
    echo "NO SE LOGRA INSERTAR REGISTRO". $stmt->errorInfo()[2];
}

// Redireccionamos al usuario a la página anterior
header('Location:' . getenv('HTTP_REFERER'));
?>

