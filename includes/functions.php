<?php
if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        case 'insert_prof':
            insert_prof();
            break;

        case 'insert_alumno':
            insert_alumno();
            break;

        case 'editar_profe':
            editar_profe();
            break;

        case 'editar_alum':
            editar_alum();
            break;

        case 'editar_user':
            editar_user();
            break;

            /*case 'delete':
            delete();
            break;

        case 'delete_s':
            delete_s();
            break;*/
    }
}



function insert_prof()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO reclutadores (NombreCompleto,NombreUsuario,Password) 
    VALUES ('$NombreCompleto','$NombreUsuario','$Password')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}

function insert_alumno()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO aspirantes (nombres, apellidos) 
    VALUES ('$nombre','$apellido')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}


function editar_profe()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE reclutadores SET NombreCompleto = '$NombreCompleto', NombreUsuario = '$NombreUsuario',
    Password = '$Password' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_alum()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE aspirantes SET nombres = '$nombre', apellidos = '$apellido', estatus ='$estatus' 
    WHERE idAspirante = '$id'  ";
    $resultado = mysqli_query($conexion, $consulta);



    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}


function editar_user()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo', id_rol='$id_rol' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}
/*function delete()
{
    $id = $_POST['id'];
    require_once("db.php");


    $consulta = "DELETE FROM materias WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo 'success';
    } else {
        echo 'error';
    }
}

function delete_s()
{
    $id = $_POST['id'];
    require_once("db.php");


    $consulta = "DELETE FROM grados WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo 'success';
    } else {
        echo 'error';
    }
}
*/