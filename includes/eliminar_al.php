<?php


$id = $_GET['id'];
require_once("db.php");
$query = mysqli_query($conexion, "DELETE FROM aspirantes WHERE idAspirante = '$id'");

header('Location: ../views/alumnos.php?m=1');///?m=1<<<<----
