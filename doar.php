<?php
    $message = ['success' => false, 'message' => 'Error on server.'];
    session_start();
    if(!empty($_SESSION['active']))
    {
        header('location: doador/');
    }else{
        if(!empty($_POST))
        {
            if(empty($_POST['email']) || empty($_POST['senha']))
            {   
                $message = ['success'=> false, 'message'=>'Todos os dados deve ser preechindo'];
                echo json_encode($message);    
            //     $alerta = '<div class="alert alert-warning alert-dismissible fade show">
            //     <strong>Ensira o seu Email e a sua Senha!</strong> 
            //   </div>';
            }else{
                require_once "conn.php";

                $email = mysqli_real_escape_string($conexao,$_POST['email']);
                $senha = md5(mysqli_real_escape_string($conexao,$_POST['senha']));
               
                $query = mysqli_query($conexao,"SELECT * FROM t_user WHERE Email='$email' AND senha='$senha'");
                $resultado = mysqli_num_rows($query);

                if($resultado >0)
                {
                    $dados = mysqli_fetch_array($query);
                    $_SESSION['active'] = true;
                    $_SESSION['IdUser'] = $dados['idusuario'];
                    $_SESSION['Nome'] = $dados['Nome'];
                    $_SESSION['Email'] = $dados['email'];
                    $_SESSION['DataCadatro'] = $dados['DataCadatro'];
                    $_SESSION['FkTipoUser'] = $dados['TipoUser'];

                    header('location: doador/');
                }else{
                    $alerta = '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Email ou senha erradas!</strong>
                   </div>';
                    session_destroy();
                    
                }
            }
         
        }
    }
    
?> 