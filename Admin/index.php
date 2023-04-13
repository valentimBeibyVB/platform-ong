<?php 
    $alerta = '';
    session_start();
    if(!empty($_SESSION['active']))
    {
        header('location: Dashboard/');
    }else{
        if(!empty($_POST))
        {
            if(empty($_POST['email']) || empty($_POST['senha'])) 
            {
            $alerta = '<div class="alert alert-warning alert-dismissible fade show">
                    <strong>Ensira o seu Email e a sua Senha!</strong> 
                </div>';
            }else{

                require_once "conn.php";

                $email= $_POST['email'];
                $senha= $_POST['senha'];
                $query = mysqli_query($conexao,"SELECT * FROM t_usuario WHERE Email='$email' AND senha='$senha' AND     FkTipoUser=1");
                $resultado = mysqli_num_rows($query);

                if($resultado >0)
                {
                    $dados = mysqli_fetch_array($query);
                    session_start();
                    $_SESSION['active'] = true;
                    $_SESSION['IdUsuario'] = $dados['idusuario'];
                    $_SESSION['Nome'] = $dados['Nome'];
                    $_SESSION['Email'] = $dados['email'];
                    $_SESSION['FkTipoUser'] = $dados['TipoUser'];

                    header('location: Dashboard/');
                }else{
                    $alerta = '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Email ou senha erradas!</strong>
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
    <?php include "include/script.php";?>
</head>


<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                  
                        <div class="row">
                            <div class="col-lg-6 .d-lg-block"><img src="img/remar2.jpg"  width="100%" alt="Logo da remar"></div>
                            
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem-Vindo à area do Administrador!</h1>
                                    </div>
                                    <form  class="user" action="" method="post">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ensira o teu Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="senha" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div > <?php echo $alerta;?></div>
                                        <input type="submit"  name="logar" value="Login" class="btn btn-primary btn-user btn-block">
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php include "include/scripJS.php"; ?>
</body>

</html>