<?php
error_reporting(0);
session_start();
$usuario = $_SESSION['usuario'];
$permiso = $_SESSION['type'];
// if ($usuario == null || $usuario == ''  && $permiso == null || $permiso == '') {

//     echo "<script language='JavaScript'>
//     alert('Error: Debes iniciar sesion primero ');
//     location.assign('../includes/sesion/login.php');
//     </script>";

//     die();
// } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

    <title>VINCULANDO VIDAS/MEJORANDO VIDAS</title>

    <!-- usuario fonts template-->
     <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="../css/sb-admin-2.min.css" rel="stylesheet">


    <script src="../js/jquery.min.js"></script>

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                <div class=" sidebar-brand-text mx-3">REGISTROS<sup></sup>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="../views/index.php">
                    <span>Menu</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                BASES DE DATOS
            </div>
            <!-- Menu Base de datos Chicago-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Chicago</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ver Registros</h6>
                        <a class="collapse-item" href="../views/alumnos.php">Aspirantes</a>
                        <a class="collapse-item" href="../views/profesores.php">Reclutadores</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Menu Base de datos Mexico-->
            <li class=" nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-folder"></i>
                    <span>Mexico</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ver Registros</h6>
                        <a class="collapse-item" href="../views/alumnos.php">Aspirantes</a>
                        <a class="collapse-item" href="../views/profesores.php">Reclutadores</a> 

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Menu Base de datos Los Angeles-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>L.A.</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ver Registros</h6>
                        <a class="collapse-item" href="../views/alumnos.php">Aspirantes</a>
                        <a class="collapse-item" href="../views/profesores.php">Reclutadores</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <?php if ($_SESSION["type"] == 1) { ?>
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="../views/usuarios.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>UsuarisssssssssssssssSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSssADDSDASDos</span></a>
                </li>
            <?php }
            ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- boton para ocultar menu -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        

        <!-- Contenedor Externo -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- contenedor princip -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        


                        <?php
                        include "db.php";

                        $id = $_GET['id'];
                        $sql = "SELECT  u.id, u.usuario, u.correo, u.password, u.fecha, p.rol FROM users u
                        LEFT JOIN permisos p ON u.id_rol= p.id  WHERE usuario ='$usuario'";
                        $usuarios = mysqli_query($conexion, $sql);
                       
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img class="img-profile rounded-circle" src="../img/usua.png">
                            </a>
                        </li>

                    </ul>

                </nav>
                

                <?php include "../views/salir.php"; ?>