<!-- ^modal para login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="user was-validated" id="form-logar" method="post" >
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="email"
                            aria-describedby="emailHelp" placeholder="Ensira o teu Email" required>
                            <!-- <div class="valid-feedback">Valid.</div> -->
                         <div class="invalid-feedback">Ensira um email válido.</div>       
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="senha"
                            placeholder="Password" required>
                            <div class="valid-feedback">verificando.</div>
                            <div class="invalid-feedback">Ensira a sua senha.</div> 
                    </div>
                    <div class="modal-footer">
                        <div>
                            <div id="message-success" class="alert alert-sucess"></div>
                        </div>
                        <input type="submit" name="logar" value="Login" class=" btn-primary btn-user btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  fim modal para login -->

<!-- modal para cadastrar -->
<div class="modal fade" id="modalCadastra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resgistra-se</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-bdy">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="h4 text-gray-700 mb-4">Dados para usuario</h3>
                    </div>
                    <form id="form-register-user" class="user" method="post">
                        <!-- <div class="form-group row"> -->
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nome" id="nome"
                                placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" id="email"
                                placeholder="Email" required>
                        </div>
                        <!-- </div> -->
                        <div class="form-group row">
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="senha"
                                    placeholder="Senha">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="h4 text-gray-900 mb-4">Dados Pessoais</h3>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nomeC"
                                placeholder="Nome completo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="BI"
                                placeholder="Número do Bilhete">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="Telefone"
                                placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="Endereco"
                                placeholder="Enderenço">
                        </div>
                        <input type="submit" name="registo" class="btn-primary btn-user btn-block"
                            value="Criar Usuario">
                        <hr>
                    </form>
                    <div>
                        <!-- <?php //echo isset($alerta) ? $alerta : ''; ?> -->
                    </div>
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
<!--  fim modal para cadastrar -->

<!-- ^modal para Doadorlogin -->
<div class="modal fade" id="doarlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Faça o login 
                                        Ou cria a sua conta </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="user" role="form" method="post">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ensira o teu Email">
                    </div>
                    <div class="form-group">
                        <input name="senha" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="modal-footer">
                    <div><?php echo $alerta; ?></div>
                        <input type="submit"  name="logar" value="Login" class=" btn-primary btn-user btn-block">
                    </div>
                </form>
                <div class="text-center">
                    <a class="getstarted" href="#" data-bs-toggle="modal" data-bs-target="#modalCadastra">Regista-se</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  fim modal para doarlogin -->