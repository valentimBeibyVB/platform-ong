<?php
      session_start();
      if(empty($_SESSION['active']))
      {
          header('location: ../');
      }
 ?> 
<header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="index.php">Remar</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="index.php"> PÁGINA INICIAL</a></li>
                    <li><a href="sobre.php">QUEM SOMOS</a></li>
                    <li><a href="doacao.php">DOAÇÕES</a></li>
                        <li class="dropdown"><a href="#"><span>VER NECESSIDADES</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Tipos de Necessidades</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Finaceira</a></li>
                                        <li><a href="#">Alimental</a></li>
                                        <li><a href="#">Materias</a></li>
                                        <li><a href="#">Saúde</a></li>
                                        <li><a href="#">Formação</a></li>
                                        <li><a href="#">Vestuario</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Ver Todas</a></li>
                            </ul>
                        </li>
                        <!-- <a class="getstarted" href="logar.php">Doar</a> -->
                        <li>
                        <li class="dropdown"><a href="#" ><?php echo $_SESSION['Nome'];?><img src="" alt=""><i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Perfil</span>
                                <li><a href="">Configuarações</a></li>
                                <hr>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Sair</a></li>
                                </li>
                            </ul>
                        </li>
                        </li>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header> 