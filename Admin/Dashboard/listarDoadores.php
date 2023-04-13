<?php 

include "../conn.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
    tbody>tr:nth-child(odd){background:#8cb63aa9;color:#fff;}
    .linkEdit{
        color:#0ca4ce;
    }
    .linkDelete{
        color:#f2b6b6b6;
    }
    </style>

    <title>SB Admin 2 - Tables</title>
    <?php include "include/script.php";?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "include/sidebar.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include "include/navbartop.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                            
                                            <td style="border:none;"><a class="btn btn-primary" href="cadastraDoador.php">Cadastrar</a></td>
                                        
                                        <tr style=" color:#fff; background-color:#8cb63a; border-color: #8cb63a;">
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>BI</th>
                                            <th>Telefone</th>
                                            <th>Enderenco</th>
                                            <th>Acção</th>
                                        </tr>

                                        <?php 
                                             
                                             $query = mysqli_query($conexao," select t_doador.IdDoador, t_doador.Nome, t_usuario.Email,
                                             t_doador.BI,t_doador.Telefone,t_doador.Endereno from t_usuario,t_doador
                                             where t_doador.FkUsuario=t_usuario.IdUsuario;;");

                                             $resultado = mysqli_num_rows($query);
                                             if($resultado > 0){

                                                while($dados = mysqli_fetch_array($query)){
                                        ?>
                                                </thead>
                                            
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $dados["IdDoador"]?></td>
                                                        <td><?php echo $dados["Nome"]?></td>
                                                        <td><?php echo $dados["Email"]?></td>
                                                        <td><?php echo $dados["BI"]?></td>
                                                        <td><?php echo $dados["Telefone"]?></td>
                                                        <td><?php echo $dados["Endereno"]?></td>
                                                        <td><a class="linkEdit" href="">Editar</a>
                                                        <a  class="linkDelete" href="">Eliminar</a></td>
                                                    </tr>
                                                </tbody>
                                            <?php
                                                }
                                             }
                                        ?>
                                      <!-- <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Tipo de Usuario</th>
                                            <th>Acção</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include "include/modal.php";?>
    <?php include "include/scripJS.php";?>
</body>

</html>