<?php
// Incluye el archivo "conectar.php" que contiene la función "conecta()"
include('conectar.php');
// Establece una conexión a la base de datos y almacena el objeto de conexión en la variable "$con"
$con = conecta();

// Comprueba si se ha enviado una solicitud POST con el nombre de la base de datos que se desea eliminar y lo almacena en la variable "$nombredb"
if (isset($_POST['nombredb'])) {
    $nombredb = trim($_POST['nombredb']);

    // Prepara una declaración preparada con la cadena "DROP DATABASE {$nombredb}" y almacena el objeto de declaración preparada en la variable "$stmt"
    $stmt = $con->prepare("DROP DATABASE {$nombredb}");

    // Ejecuta la declaración preparada con el método "execute()" y comprueba si se ha eliminado correctamente la base de datos
    if ($stmt->execute()) {
        // Si se ha eliminado correctamente, muestra un mensaje de alerta que indica que la base de datos ha sido eliminada con éxito y redirige al usuario a la página "index.html"
        echo "<script>alert('LA BASE DE DATOS EXISTE Y FUE ELIMINADA CON EXITO PERDIENDO TODO REGISTRO');window.location='index.html'</script>";
    } else {
        // Si no se ha eliminado correctamente, muestra un mensaje de alerta que indica que la base de datos no existe
        echo "<script>alert('NO SE LOGRA ELIMINAR LA BASE DE DATOS {$nombredb}');</script>";
    }
}
?>

<html>
<head>
<title>ELIMINAR UNA BASE DE DATOS EN EL SGBD</title>
</head>
<body>
    <form name="form1" method="post" action="eliminadb.php">
        <table>
            <tr>
                <td>DIGITE EL NOMBRE DE LA BASE DE DATOS A ELIMINAR:</td>
                <td><input type="text" class="field" name="nombredb" required> <br/></td>
                <td><input type="submit" class="btn btn-green" value="Eliminar DB"></td>
            </tr>
        </table>
    </form>
    <table>
        <tr>
            <td>BASES DE DATOS EN EL SGBD</td>
        </tr>
        <?php
        $stmt = $con->query("SHOW DATABASES");

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>			
            <td><?php echo $fila['Database'] . "\n";?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>
