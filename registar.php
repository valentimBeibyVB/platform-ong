<?php
    if(!empty($_POST))
    {
        $alerta = '';
        if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) ||
            empty($_POST['nomeC'])  || empty($_POST['BI']) || empty($_POST['Telefone']) || empty($_POST['Endereco']))
        {
            $alerta = '<div class="alert alert-warning alert-dismissible fade show">
            <strong>Todos os campos devem ser preechindos!</strong> 
          </div>';
        }else{
            include "conn.php";

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $nomeC = $_POST['nomeC'];
            $BI = $_POST['BI'];
            $Telefone = $_POST['Telefone'];
            $Enderenco = $_POST['Endereco'];
            
            

            $query = mysqli_query($conexao,"SELECT * FROM t_usuario WHERE  Email = '$email'");
            $resultado = mysqli_fetch_array($query);

            if($resultado >0){
                $alerta = '<div class="alert alert-warning alert-dismissible fade show">
                <strong>Email já cadastrado</strong> 
              </div>';
            }else{
                $query_ensirir = mysqli_query($conexao,"call PdCadastrar_Doador('$nome','$email','$senha','$nomeC','$BI','$Telefone','$Enderenco')");
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

    <title>Admin-login</title>
    <link rel="stylesheet" href="css/admin.css">
</head>


<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                  
                        <div class="row">
                            <!-- <div class="col-lg-6 .d-lg-block"><img src="img/remar2.jpg"  width="100%" alt="Logo da remar"></div> -->
                            
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Dadas para usuario</h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control form-control-user" name="nome" id="nome"
                                                            placeholder="Nome">
                                                    </div>
                                                    <div class="col-sm-6" class="form-group">
                                                    <input type="email" class="form-control form-control-user" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="password" class="form-control form-control-user"
                                                            name="senha" id="exampleInputPassword" placeholder="Senha">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Dados Pessoais</h1>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="nome" class="form-control form-control-user"
                                                            name="nomeC" id="exampleInputPassword" placeholder="Nome completo">
                                                    </div>   
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control form-control-user" name="BI" id="BI"
                                                            placeholder="Número do Bilhete">
                                                    </div>                                 
                                                </div>
                                                    
                                                <div class="form-group row">
                                                    
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="Telefone" class="form-control form-control-user"
                                                            name="Telefone" id="exampleInputPassword" placeholder="Telefone">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="Enderenço" class="form-control form-control-user" name="Endereno" id="Enderenço"
                                                            placeholder="Enderenço">
                                                    </div>
                                                </div>
                                                <input type="submit"  class="btn btn-primary btn-user btn-block" value="Criar Usuario">           
                                                <hr>
                            
                                            </form>
                                            <div><?php echo isset($alerta) ? $alerta : '';?></div>
                                    
                            <hr>
                            <div class="text-center">
                                <a class="small" href="logar.php">Já enho uma conta</a>
                            </div>
                            <div class="text-center">
                                        <a class="small" href="index.php">Voltar a página inicial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>