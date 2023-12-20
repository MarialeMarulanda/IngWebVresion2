<?php include "../includes/header.php"; ?>


<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Aspirantes</h6>
                <br>

                </div>
            

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>nacionalidad</th>
                                <th>domicilio</th>
                                <th>fecha_registro</th>
                                <th>correo_electronico</th>
                                <th>num_telefono</th>
                                <th>edad</th>
                                <th>escolaridad</th>
                                <th>idiomas</th>
                                <th>certificaciones_diplomados_cursos</th>
                                <th>experiencia_laboral</th>
                                <th>practicas_profesionales</th>
                                <th>habilidades</th>
                                <th>actividades_extracurriculares</th>
                                <th>rol_empresa</th>
                                <th>puesto_de_interes</th>
                                <th>nombre_empresa</th>
                           
                                <th>estatus</th>
                                <th>Acciones.</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once("../includes/db.php");
                            $result = mysqli_query($conexion, "SELECT * FROM aspirantes ");
                            while ($fila = mysqli_fetch_assoc($result)) :

                            ?>
                                <tr>
                                    <td><?php echo $fila['nombres']; ?></td>
                                    <td><?php echo $fila['apellidos']; ?></td>
                                    <td><?php echo $fila['nacionalidad']; ?></td>
                                    <td><?php echo $fila['domicilio']; ?></td>
                                    <td><?php echo $fila['fecha_registro']; ?></td>
                                    <td><?php echo $fila['correo_electronico']; ?></td>
                                    <td><?php echo $fila['num_telefono']; ?></td>
                                    <td><?php echo $fila['edad']; ?></td>
                                    <td><?php echo $fila['escolaridad']; ?></td>
                                    <td><?php echo $fila['idiomas']; ?></td>
                                    <td><?php echo $fila['certificaciones_diplomados_cursos']; ?></td>
                                    <td><?php echo $fila['experiencia_laboral']; ?></td>
                                    <td><?php echo $fila['practicas_profesionales']; ?></td>
                                    <td><?php echo $fila['habilidades']; ?></td>
                                    <td><?php echo $fila['actividades_extracurriculares']; ?></td>
                                    <td><?php echo $fila['rol_empresa']; ?></td>
                                    <td><?php echo $fila['puesto_de_interes']; ?></td>
                                    <td><?php echo $fila['nombre_empresa']; ?></td>
                                    <td><?php echo $fila['estatus']; ?></td> 
                                    

                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo $fila['idAspirante']; ?>">
                                            <i class="fa fa-edit "></i>
                                        </button>
                                        <a href="../includes/eliminar_al.php?id=<?php echo $fila['idAspirante'] ?>" class="btn btn-danger btn-del">
                                            <i class="fa fa-trash "></i></a>
                                    </td>
                                </tr>
                                <?php include "editar_alumno.php"; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                    </script>


                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->






    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




</body>


<?php include "../includes/footer.php"; ?>

</html>