<?php
    if(!empty($_POST))
    {
        $alerta = '';
        if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) ||
            empty($_POST['nomeC']) || empty($_POST['sexo']) || empty($_POST['BI']) || empty($_POST['Telefone']) || empty($_POST['Enderenco']))
        {
            $alerta = '<div class="alert alert-warning alert-dismissible fade show">
            <strong>Todos os campos devem ser preechindos!</strong> 
          </div>';
        }else{
            include "../conn.php";

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $nomeC = $_POST['nomeC'];
            $sexo = $_POST['sexo'];
            $BI = $_POST['BI'];
            $Telefone = $_POST['Telefone'];
            $Enderenco = $_POST['Enderenco'];
            
            

            $query = mysqli_query($conexao,"SELECT * FROM t_user WHERE  Email = '$email'");
            $resultado = mysqli_fetch_array($query);

            if($resultado >0){
                $alerta = '<div class="alert alert-warning alert-dismissible fade show">
                <strong>Email já cadastrado</strong> 
              </div>';
            }else{
                $query_ensirir = mysqli_query($conexao,"call PdCadastrar_Doador('$nome','$email','$senha','$nomeC','$sexo','$BI','$Telefone','$Enderenco')");
                if($query_ensirir){
                    $alerta = '<div class="alert alert-success alert-dismissible fade show">
                    <strong>Usuario cadastrado com sucesso</strong> 
                  </div>';
                }else{
                    $alerta = '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Erro ao cadastrar o usuario!</strong> 
                  </div>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Remar - Doar</title>
    <?php include "../include/script.php";?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Content Row -->
                        <div class="row">

                            <!-- cards -->
                        <!-- Content Row -->
                        </div>
                        <div class="container">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Criar Usuario</h1>
                                        </div>
                                        <form class="user" action="" method="post">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" name="nome" id="nome"
                                                        placeholder="Nome">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                        
                                            </div>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">A sua Localização</h1>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="nome" class="form-control form-control-user"
                                                        name="nomeC" id="exampleInputPassword" placeholder="Nome completo">
                                                </div>
                                
                                                <div class="col-sm-6">
                                                    <select class="form-control " id="doador" name="sexo" class="form-select">
                                                    <option value="1">Masculino</option>
                                                    <option value="2">Femenino</option>
                                                    </select>
                                                </div>

                                                <!-- <div class="col-sm-5" class="form-group">
                                                <label for="">Foto</label>
                                                <input type="file"  name="telefone" id="telefone"
                                                    placeholder="Enderenço">
                                                </div> -->
                                            </div>
                                                
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" name="BI" id="BI"
                                                        placeholder="Número do Bilhete">
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="Telefone" class="form-control form-control-user"
                                                        name="Telefone" id="exampleInputPassword" placeholder="Telefone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <input type="Enderenço" class="form-control form-control-user" name="Enderenco" id="Enderenço"
                                                        placeholder="Enderenço">
                                                </div>
                                            </div>
                                            <input type="submit"  class="btn btn-primary btn-user btn-block" value="">           
                                            <hr>
                        
                                        </form>
                                        <div><?php echo isset($alerta) ? $alerta : '';?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- fim do main -->
                <!-- Footer -->
                <!-- End of Footer -->
            </div>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    
</body>
</html>