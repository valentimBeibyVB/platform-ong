<?php

if (isset($_POST)) {
    $message = ['success' => false, 'message' => 'Error on server.'];
    if (
        empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) ||
        empty($_POST['nomeC']) || empty($_POST['BI']) || empty($_POST['Telefone']) || empty($_POST['Endereco'])
    ) {
        $message = ['success'=> false, 'message'=>'Todos os dados deve ser preechindo'];
        echo json_encode($message);
    } else {
        include "conn.php";

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $nomeC = $_POST['nomeC'];
        $BI = $_POST['BI'];
        $Telefone = $_POST['Telefone'];
        $Enderenco = $_POST['Endereco'];



        $query = mysqli_query($conexao, "SELECT * FROM t_usuario WHERE  Email = '$email'");
        $resultado = mysqli_fetch_array($query);

        if ($resultado > 0) {
            $message = ['success' => false, 'message' => 'E-mail already exists.'];
        } else {
            $query_ensirir = mysqli_query($conexao, "call PdCadastrar_Doador('$nome','$email','$senha','$nomeC','$BI','$Telefone','$Enderenco','2')");
            if ($query_ensirir) {
                $message = ['success' => true, 'message' => 'Usuário cadastrado com sucesso.'];
            } else {
                $message = ['success' => false, 'message' => 'Error on server.'];
            }
        }

        echo json_encode($message);
    }
}