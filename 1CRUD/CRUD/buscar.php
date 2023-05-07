<?php
include('conectar.php');
$con = conecta();

// Obtener el término de búsqueda del formulario
if(isset($_POST['buscar'])) {
    $buscar = $_POST['buscar'];
    // Consulta SQL para buscar registros que coincidan con el término de búsqueda
    $sql = "SELECT * FROM producto WHERE nombre LIKE :buscar OR descripcion LIKE :buscar";
    $stmt = $con->prepare($sql);
    $stmt->bindValue(':buscar', "%$buscar%", PDO::PARAM_STR);
} else {
    // Preparar la consulta
    $stmt = $con->prepare("SELECT * FROM producto");
}

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados como un array de objetos
$productos = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar y buscar registros con PDO</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
    width:50%;
    background:#E0E4E5;
    border:1px solid #292929;
    padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
    <h1>Editar y buscar registros con PDO </h1>
    <br><br>

    <form method="POST" action="">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar por nombre o descripción" name="buscar">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Buscar</button>
            </span>
        </div>
    </form>
    <br>
    <table border="1" width="100%">
        <tr>
            <th width="41%">nombre</th>
            <th width="47%">descripcion</th>
            <th width="12%">idproducto</th>
        </tr>
        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?= $producto->nombre ?></td>
                <td><?= $producto->descripcion ?></td>
                <td>
                    <a class="btn btn-primary" href="editar.php?id=<?= $producto->idproducto ?>">
                        <i class="fa fa-pencil fa-lg" aria-hidden="true"><?= $producto->idproducto ?></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>
