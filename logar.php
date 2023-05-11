<?php 
    //$alerta = '';
    $message = ['success' => false, 'message' => 'E-mail already exists.'];
    session_start();
    if(!empty($_SESSION['active']))
    {
        header('location: doador/');
    }else{
        if(!empty($_POST['logar']))
        {
            if(empty($_POST['email']) || empty($_POST['senha'])) 
            {
                $message = ['success'=> false, 'message'=>'Todos os dados deve ser preechindo'];
                echo json_encode($message);
                
            // $alerta = '<div class="alert alert-warning alert-dismissible fade show">
            //         <strong>Ensira o seu Email e a sua Senha!</strong> 
            //     </div>';
            }else{

                require_once "conn.php";

                $email= $_POST['email'];
                $senha= $_POST['senha'];
                $query = mysqli_query($conexao,"SELECT * FROM t_usuario WHERE Email='$email' AND senha='$senha' AND     FkTipoUser=2");
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

                    header('location: doador/');
                }else{
                //     $alerta = '<div class="alert alert-danger alert-dismissible fade show">
                //     <strong>Email ou senha erradas!</strong>
                // </div>';
                
                }
            }
    
        }   
    }
?>
