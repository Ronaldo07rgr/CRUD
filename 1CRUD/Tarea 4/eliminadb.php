<?php
// Incluye el archivo "conectar.php" que contiene la función "conecta()"
include ('conectar.php');
// Establece una conexión a la base de datos y almacena el objeto de conexión en la variable "$con"
$con=conecta();
// Recupera el nombre de la base de datos que se desea eliminar a través de una solicitud POST y lo almacena en la variable "$nombredb"
$nombredb=$_POST['nombredb'];
// Elimina cualquier espacio en blanco al principio o al final del nombre de la base de datos y lo almacena en la variable "$cadena"
$cadena=trim($nombredb);

// Crea una cadena que contiene la instrucción "DROP DATABASE" seguida del nombre de la base de datos que se desea eliminar y lo almacena en la variable "$eliminardbsql"
$eliminardbsql = "DROP DATABASE ".$cadena."";
// se prepara una declaración preparada con la cadena "$eliminardbsql" y almacena el objeto de declaración preparada en la variable "$stmt"
$stmt = $con->prepare($eliminardbsql);
// Ejecuta la declaración preparada con el método "execute()" y comprueba si se ha eliminado correctamente la base de datos
if($stmt->execute()){
    // Si se ha eliminado correctamente, muestra un mensaje de alerta que indica que la base de datos ha sido eliminada con éxito y redirige al usuario a la página "index.php"
    echo "<script>alert('LA BASE DE DATOS EXISTE Y FUE ELIMINADO CON EXITO PERDIO TODO REGISTRO');window.location='index.php'</script>";
    //header("Location: index.html");
}else{
    // Si no se ha eliminado correctamente, muestra un mensaje de alerta que indica que la base de datos no existe y redirige al usuario a la página "elimina2db.php"
    echo "<script>alert('LA BASE DE DATOS NO EXISTE');window.location='elimina2db.php'</script>";
    //header('Location:' . getenv('HTTP_REFERER'));
}
?>