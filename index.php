
<?php 
    $alerta = '';
    session_start();
    if(!empty($_SESSION['active']))
    {
        header('location: doador/');
    }else{
        if(!empty($_POST['logar']))
        {
            if(empty($_POST['email']) || empty($_POST['senha'])) 
            {
            $alerta = '<div class="alert alert-warning alert-dismissible fade show">
                    <strong>Ensira o seu Email e a sua Senha!</strong> 
                </div>';
            }else{

                require_once "conn.php";

                $email= $_POST['email'];
                $senha= md5(mysqli_real_escape_string($conexao,$_POST['senha']));
                $query = mysqli_query($conexao,"SELECT * FROM t_usuario WHERE Email='$email' AND senha='$senha'");
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
                    $alerta = '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Email ou senha erradas!</strong>
                </div>';
                
                }
            }
    
        }   
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Remar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="css/admin.css" rel="stylesheet">
    <?php include "include/script.php";?>
</head>

<body>
    <!-- ======= Inicio do Header ======= -->
    <?php include "include/Header.php";?>
    <!-- fim do Header -->
    <!-- ======= sesão do carrosel ======= -->
    <?php include "include/Carrosel.php";?>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Doações realizadas ======= -->
        <section id="titulos" class="titulos">
            <h2 style="text-align: center;">O que o seu Donativos pode fazer ao outros!</h2>
            <h5 style="text-align: center;">Vem ajudar como o que pode ou seja um voluntario</h5>
        </section>
        <section id="realizada" class="realizada">
            <div class="container">
                <div class="row" role="listbox">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="doacao">
                            <img src="public/assets/img/team/2.jpg" alt="">
                            <span>Voluntarios oferecem ajuda medica</span>
                            <p>
                                Uma comunidades recebe ajuda de voluntario medico da Remar
                            </p>
                            <a href="doacaoD.php" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch"> 
                        <div class="doacao">
                            <img src="public/assets/img/team/afrianos.jpg" alt="">
                            <span>Voluntarios da remar leciona em comunidades desfavorecida</span>
                            <p>
                                Professores Jovem senti-se motivado a ajudar o proximo, ensinado a que mais necessita
                            </p>
                            <a href="doacaoD.php" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="doacao">
                            <img src="public/assets/img/portfolio/portfolio-1.jpg" alt="">
                            <h4>Doador</h4>
                            <span>Desponivel para doar sem beniciario</span>
                            <p>
                                Doador doar conjuntos de produtos para Higine pessoal
                            </p>
                            <a href="doacaoD.php" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Doações realizadas -->

        <!-- ======= Quem somos ======= -->
        <section id="Sobre" class="Sobre">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="public/assets/img/slide/remarSobre.jpg" class="img-fluid" alt=""> <br>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Porque usar o site <em>remar</em> para doar?</h3>
                        <p class="fst-italic">
                            As ONG`S encontram muitas dificuldades no se refere a recolha de doações, isso porque na maioria das vezes os doadores particulares vivem distantes do local de entrega dos donativos e também pela falta de informação um doador pode doar bens que na verdade
                            não é o que se precisa num momento, a dificuldade que muitos voluntários tem caso queriam fazer parte de uma ONG´s em pensando em sí que quero ajuda e aquem precisa de ajuda troixemos ate você o <strong><a href="sobre.php">remar</a></strong>
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Oferecimento um serio comprimisso com os doadores e as Organizações.</li>
                            <li><i class="bi bi-check-circle"></i> facilitando a maior gestão de bens doado e a sua distribuição.</li>
                            <li><i class="bi bi-check-circle"></i> Somos a maior plataforma de ONG´s de Angola e com Organizações legalizadas e independente</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- fim Quem Somos -->

        <!-- ======= sessão das necessidades ======= -->
        <section id="necessidades" class="necessidades">
            <div class="container">
                <section id="featured">
                    <h2 class="featured" style="text-align: center;">O voce também podes ajudar!</h2>
                </section>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> <br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Doar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> <br>
                            <a href="doar.php" class="getstarted">Doar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> <br>
                            <a href="doar.php" class="getstarted">Doar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p><br>
                            <a href="doar.php" class="getstarted">Ajudar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p><br>
                            <a href="doar.php" class="getstarted">Ajudar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p><br>
                            <a href="doar.php" class="getstarted">Ajudar</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- fim necessidades -->
    </main>
    <!-- End #main -->
    <!-- ======= ONG`S ======= -->
    <?php include "include/ong.php"; ?>
    <!-- fim ONG´s -->

    <!-- ======= Rodape ======= -->
    <?php include "include/footer.php"; ?>
    <!-- fim rodape -->

    <!-- Botão para subida rapida -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>
     <!-- Botão para subida rapida -->

    <?php include "include/modal.php";?>
    <!--  Script do JS-->
    <?php include "include/scriptJS.php";?>
    <!-- Script do JS -->
</body>

</html>