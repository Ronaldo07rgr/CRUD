<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
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
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include ('conectar.php');
$con=conecta();


$id = $_GET['id'];
$sql = "SELECT * FROM producto WHERE idproducto = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_OBJ);
?>
<form action="" method="post">
    <input type="text" value="<?php echo $row->nombre;?>" name="nombre">
    <input type="text" value="<?php echo $row->descripcion;?>" name="descripcion">
    <input type="submit" name="submit">
</form>

<?php
    
    if(isset($_POST['submit'])){
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $tbl = "producto";
        $sql = "UPDATE $tbl SET nombre = ?, descripcion = ? WHERE idproducto = ?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$nombre, $descripcion, $id]);
        echo "REGISTRO ACTUALIZADO CON EXITO";
        header("Location: index.html");
    }
?>
</div>
</body>
</html>
