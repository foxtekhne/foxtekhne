<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Fox Techkne</title>
    </head>
    <body class="container1-orcamento">
        <header class="cabecalho">
            <div class="links item">
                <!--<img src="imagens/logo.png" alt="logo" width="20%">-->
                <div id="titulologo">
                    Fox Tekhne
                </div>
                <nav id="sidemenu">
                    <span style="font-size:30px;cursor:pointer;color: rgb(255, 255, 255);" onclick="openNav()">&#9776;</span>
                </nav>
            </div>
        </header>
    
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Início</a></br>
        <a href="servicos.php">Serviços</a></br> 
        <a href="sobrenos.php">Sobre Nós</a></br>
        <a href="contato.php">Contato</a> </br>
        <a href="orcamento.php">Orçamento</a> </br>
        <a href="atendimento.php">Atendimento</a> </br>
        <a href="planos.php">Planos</a>
        </div>
    
        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "16%";
            document.getElementById("main").style.marginLeft = "16%";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }
    
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
            }
        </script>
        
        <section class="web">
            <section class="container">
                <article class="titulopag">
                    <img src="imagens/logo.png">
                    <h1>ORÇAMENTO</h1>   
                </article>
            </section>
        </section>
        <section class="container-orcamento">
            <section class="principal-orcamento">
                <article id="orcamento1">
                    <div id="texto-orcamento1">
                        <p class="texto1-orcamento1">Você almeja tornar sua empresa mais atual e tecnológica?</p>
                        <p class="texto1-orcamento1">Sonha em aumentar suas vendas rapidamente?</p>
                        <p class="texto1-orcamento1">Quer se tornar número <b>1</b> na sua área de atuação?</p>
                    
                        <p id="texto2-orcamento1">O primeiro passo para transformar seus desejos em realidade é fazer um orçamento
                        com a Fox Tekhne! Para isso, responda o formulário abaixo</p>

                        <div id="imgorcamento">
                            <img src="imagens/aumentar.png" alt="aumento" width="25%">
                        </div>
                        
                    </div>
    
                    <div id="form-orcamento">
                        <form id="frmCadUser">
                            <div class="mb-3 mt-3">
                                <label for="nome" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="nome" placeholder="example@example.com" name="nome">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" placeholder="(DDD) 91234-5678" name="telefone">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" placeholder="00000-000" name="cep">
                                <div id="msgCep"></div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="logradouro" class="form-label">Logradouro:</label>
                                <input type="text" class="form-control" id="logradouro" placeholder="Rua Exemplo" name="logradouro">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="complemento" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="complemento" placeholder="Apartamento 00 - Bloco X" name="complemento">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" placeholder="Bairro Exemplo" name="bairro">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="localidade" class="form-label">Localidade:</label>
                                <input type="text" class="form-control" id="localidade" placeholder="Cidade" name="localidade">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="uf" class="form-label">UF:</label>
                                <input type="text" class="form-control" id="uf" placeholder="Estado" name="uf">
                                <div id="msgUF"></div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="text" class="form-label">Escreva sua mensagem:</label>
                                <input type="text" class="form-control" id="text" placeholder="Digite seu texto aqui..." name="text">
                            </div>
                            
                            <button type="submit" class="btn btn-primary first">Enviar</button>
                        </form> 

                        <script type="text/javascript">
                            var url = "";
                            var validCep = false;
                            var validEmail = false;
                            var validTelefone = false;
                            function validarFormulario(){
                                return( validCep &&  validEmail &&  validTelefone );
                            }          
                            $(document).ready(function(){
                                $("#frmCadUser").submit(function( event ){
                                    event.preventDefault();
                                    alert("O formulário está sendo enviado!");
                                    if (validarFormulario()){
                                    	alert("Formulário Enviado!");
                                    } else{
                                        //alert("Dados incorretos! Verifique novamente");
                                    }
                                });
            
                                $("input").keypress(function( event ){
                                    if ( event.keyCode === 13 ){
                                        event.preventDefault();
                                        $(this).blur();
                                    }
                                });

                                $("#cep").blur(function( event ){
                                    let cepStr = $(event.target).val().trim();
                                    if ( cepStr.trim().replace("-","").match(/^[\d]{8}$/g) ){
                                        let url = "https://viacep.com.br/ws/"+ cepStr +"/json/";
                                        $.get( url , function(data, status){
                                            $("#logradouro").val(data.logradouro);
                                            $("#complemento").val(data.complemento);
                                            $("#bairro").val(data.bairro);
                                            $("#localidade").val(data.localidade);
                                            $("#uf").val(data.uf);
                                        });
                                        validCep = true;
                                        $(event.target).css("color", "black");			
                                        $("#msgCep").hide();
                                    }else{
                                        $(event.target).css("color", "red");
                                        $(event.target).focus();
                                        $("#msgCep").html("Cep Inválido!").css("color", "blue");
                                        $("#msgCep").show();
                                        validCep = false;
                                    }
                                });
                            });
                        </script>
                    </div>
                </article>
            </section>
        </section>

       <footer>
        <div class="rodape">
            <div class="grid1">   
                <h3>PÁGINAS</h3>
                <ul>
                    <p>
                        <a href="index.php">Início</a></br>
        <a href="servicos.php">Serviços</a></br> 
        <a href="sobrenos.php">Sobre Nós</a></br>
        <a href="contato.php">Contato</a> </br>
        <a href="orcamento.php">Orçamento</a> </br>
        <a href="atendimento.php">Atendimento</a> </br>
        <a href="planos.php">Planos</a>
                    </p>
                </ul>
             </div>  
            <div class="grid2">            
                <h3>LINKS ÚTEIS</h3>   
                <p> <a href="http://gru.ifsp.edu.br/">IFSP-GRU </a> </p>
            </div>
            <div class="grid3">
                <h3> CONTATO</h3>
                <p> foxtekhne@gmail.com</p>
            </div>
            <div class="grid4">
                <h3>LOCALIZAÇÃO</h3>    
                <p> Av. Salgado Filho, 3501 - Vila Rio de Janeiro Guarulhos - SP, 07115-000 <p>
            </div>
        </div> 
        <p> &copy; Fox Techkne  -  2022</p>
    </footer>
      
        </body>
