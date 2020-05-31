<?php
session_start();
?>
<!doctype html>
<html lang="PT-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastre-se</title>

    <!--Global css-->
    <link rel="stylesheet" href="../css/global.css">

    <!--Icon fav-->
    <link rel="icon" href="">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   
   <script src="../js/validacoes_form.js"></script> 
 
</head>

<body class="bg-color">


    <div class="container-fluid h-100">

    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
            <div class="container">
                <a href="../index.php" class="navbar-brand">
                    <img src="../img/img_icons/logo.png" width="142" alt="">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="../index.php" class="nav-link">Página inicial</a> </li>
                        <li><a href="../contato.php" class="nav-link">Contato</a></li>
                        <li><a href="../sobre_nos.php" class="nav-link">Sobre nós</a></li>
                        <li><a href="pag_login_fornecedor.php" class="btn btn-outline-warning ml-4">Entrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
     


        
        <div class="row form-cadastro justify-content-center p-4 mt-5">
            <div class="col-md-3 align-self-center area-form">

                <div class="row justify-content-center mb-3">
                    <img src="../img/136-1366211_group-of-10-guys-login-user-icon-png.png" width="150" alt="">
                </div>
                
                <!--
                <div class="alert alert-success text-center" role="alert">
                 Você foi cadastrado(a) com sucesso!! <a href="3-Página_Login.php" class="alert-link"><br>Fazer login</a>
                </div>

                <div class="alert alert-danger text-center" role="alert">
                A simple danger alert—check it out!
                </div>

                <div class="alert alert-dark text-center" role="alert">
                Este E-MAIL e CPF já poussui cadastro no nosso site. <a href="3-Página_Login.php" class="alert-link">Acessar</a>
                </div>-->


                <?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>

                <form method="POST" action="[Crud] Cadastrar_página_FORNECEDOR.php">  <!-- fim formulario -->
                        <!--E-mail-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> E-mail</label>
                            <input type="email" minlength="10" class="form-control" name="EMAIL" placeholder="exemplo@gmail.com" required autofocus>
                        </div>

                        <!--Senha-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> Senha</label>
                            <input type="password" minlength="8" maxlength="30" class="form-control" name="SENHA" id="password"  placeholder="***" required>
                            <small id="emailHelp" class="form-text text-muted">Senha no mínimo 8 caracteres</small>
                        </div>

                        <!--Confirmação de senha-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> Confirme senha:</label>
                            <input type="password" minlength="8" maxlength="30"  class="form-control" name="SENHA" id="confirm_password" placeholder="***" required>
                        </div>

                        <!--Nome completo-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> Nome Completo</label>
                            <input type="text" class="form-control" minlength="5"  name="NOME" onkeypress="return lettersOnly(event);" required>
                        </div>

                        <!--CNPJ-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> CNPJ</label>
                            <input type="text" class="form-control"  maxlength="11" minlength="11" name="CNPJ" id="cnpj"   placeholder="Ex.: 00.000.000/0000-00"  onkeypress="return onlynumber();" required>
                        </div>

                        <!--CPF-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> CPF</label>
                            <input type="text" class="form-control" maxlength="11" minlength="11" name="CPF" id="cpf"  placeholder="Ex.: 000.000.000-00" required onkeypress="return onlynumber();" required>
                        </div>


                        <!--razão social-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> Razão Social</label>
                            <input type="text" class="form-control" name="RAZAO" required>
                        </div>

                        <!--Data de nascimento-->
                        <div class="form-group">
                            <label><span style="color: red">*</span> Data de nascimento</label>
                            <input type="date" class="form-control" name="DATA_NASC" required>
                        </div>


                         <!--ATIVIDADE-->
                        <label><span style="color: red">*</span> Atividade</label>					
							 <div class="form-group">
                            <select name="ATIVIDADE" type="text" class="form-control" maxlength="200" required >
                                
                                <option disabled selected="selected">Escolha uma atividade</option> 
                                <option value="biscoitos">Biscoitos</option>
                                <option value="bolos">Bolos</option>
                                <option value="cafes">Cafés</option>
                                <option value="cervejas">Cervejas</option>
                                <option value="charcutaria e defumados">Charcutaria e Defumados</option>
                                <option value="chas e infusoes">Chás e Infusões</option>
                                <option value="chutneys">Chutneys</option>
                                <option value="cogumelos">Cogumelos</option>
                                <option value="comida arabe">Comida Árabe</option>
                                <option value="comida vegetariana">Comida Vegetariana</option>
                                <option value="cookies">Cookies</option>
                                <option value="embutidos">Embutidos</option>
                                <option value="fermentados e probioticos">Fermentados e Probióticos</option>
                                <option value="frutas congeladas">Frutas Congeladas</option>
                                <option value="frutas secas">Frutas Secas</option>
                                <option value="geleias">Geléias</option>
                                <option value="granola">Granola</option>
                                <option value="laticinios">Laticínios</option>
                                <option value="marmitas fit">Marmitas Fit</option>
                                <option value="marmitas vegetarianas">Marmitas Vegetarianas</option>
                                <option value="massas e molhos artesanais">Massas e Molhos Artesanais</option>
                                <option value="mel de engenho">Mel de Engenho</option>
                                <option value="paes">Pães</option>
                                <option value="pastas">Pastas</option>
                                <option value="pasteis">Pasteis</option>
                                <option value="pates veganos">Patês Veganos</option>
                                <option value="produtos apicolas">Produtos Apícolas</option>
                                <option value="queijos">Queijos</option>
                                <option value="sanduiches">Sanduíches</option>
                                <option value="sem acucar">Sem Açúcar</option>
                                <option value="sem gluten">Sem Glúten</option>
                                <option value="sem lactose">Sem Lactose</option>
                                <option value="sodas">Sodas</option>
                                <option value="sorvetes">Sorvetes</option>
                                <option value="sucos">Sucos</option>
                                <option value="tahine">Tahine</option>
                                <option value="temperos">Temperos</option>
                                <option value="vinhos">Vinhos</option>
                                <option value="outros">Outros</option>

                            </select> 
                        </div>

                         <!--CEP-->
                      <div class="form-group">
                        <label><span style="color: red">*</span> CEP:</label>
                        <input name="CEP" type="text" class="form-control" id="cep"  value="" size="10" maxlength="8" onkeypress="return onlynumber();"  onblur="pesquisacep(this.value);" placeholder="Ex.: 00000-000"  required/>
                      </div>

                       <!--Estado-->
                       <div class="form-group">
                        <label><span style="color: red">*</span> UF</label>
                        <input name="UF" type="text" maxlength="2" minlength="2" class="form-control" id="uf"  onkeypress="return lettersOnly(event);"  size="2" required/>
                      </div>

                       <!--Cidade-->
                    <div class="form-group">
                        <label><span style="color: red">*</span> Cidade</label>
                        <input name="CIDADE" type="text" class="form-control" id="cidade" size="40" required />
                    </div>

                     
                    <!--rua-->
                    <div class="form-group">
                        <label><span style="color: red">*</span> Rua</label>
                        <input name="RUA" type="text" class="form-control" id="rua" size="60" required />
                    </div>

                    <!--BAIRRO-->
                    <div class="form-group">
                    <label><span style="color: red">*</span> Bairro</label>
                    <input name="BAIRRO" type="text"class="form-control" id="bairro" size="40" required />
                    </div>

                        <!--Número:-->
                    <div class="form-group">
                        <label><span style="color: red">*</span> Número:</label>
                        <input name="NUMERO" type="text" class="form-control" id="uf" size="2" required/>
                      </div>

                    <!--complemento-->
                    <div class="form-group">
                        <label>Complemento</label>
                        <input name="complemento" type="text" class="form-control" id="complemento" size="20" />
                    </div>

                <!--Telefone-->
                <div class="form-group">
                    <label><span style="color: red">*</span> Telefone:</label>
                    <input name="TELEFONE1" type="text" minlength="10" class="form-control" placeholder="Ex.: (00) 0000-0000" id="telefone1" size="2" onkeypress="return onlynumber();" required/>
                    </div>

                <!--Celular-->
                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" class="form-control" minlength="11" name="CELULAR" id="celular" placeholder="Ex.: (00) 00000-0000" onkeypress="return onlynumber();">
                </div>



                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-secondary btn-block mt-2">CANCELAR</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-block mt-2">CADASTRAR</button>
                        </div>
                    </div> 
                </form> <!-- fim formulario -->

                <button type="button" class="btn btn-warning btn-block mt-2"><a href="pag_login_fornecedor.php">Já tenho conta!</a></button>

            </div>
        </div>
        </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!--VALIDAR SENHAS IGUAIS-->
    <script src="../js/validar_senha.js"></script>
    <!--MÁSCARAS DE FORMULARIO-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="../js/mascara_form.js"></script>

</body>

</html>