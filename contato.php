<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Fox Techkne</title>


</head>

<section class="contato">
<body class="container">
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
    <div id="contato">
        <article id="contato">
            <div id="contato">
                 
                <img  src="imagens/logo.png">
                <p class="titulo-contato">Contato</p>
                <br>
                <div class="contato-infos">
                    <div class="mapa-infos">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5098626375543!2d-46.540725224895574!3d-23.4420663663317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51fbe5f8681%3A0x1f8cf929993dc97!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%20IFSP%20Guarulhos!5e0!3m2!1spt-BR!2sbr!4v1671105646912!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Av. Salgado Filho, 3501 - Vila Rio de Janeiro - Guarulhos/SP - 07115000</p>
                        <p class="subtitulo-contato">Email</p>
                        <a href="mailto:foxtekhne@gmail.com">foxtekhne@gmail.com</a>
                        <br> <br> <br>
                    </div>
                    <div class="telefone-infos">
                      
                        <div id="form-contato">
                            <form id="form-contato">
                                <div class="form1-contato">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" />
                            </div>
                            <div>
                                <label for="email">E-mail:</label>
                                <input type="email" id="email" />
                            </div>
                            <div>
                                <label for="telefone">Telefone:</label>
                                <input type="email" id="email" />
                            </div>
                            <div>
                                <label for="duvida">Dúvida:</label>
                                <textarea id="duvida"></textarea>
                            </div>
                            <div class="button-ctt">
                                <button type="submit" class="botao-contato">Enviar sua mensagem</button>
                            </div>
                            <div class="spinner-border" role="status">
                                <span class="sr-only"></span>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            


        </article>
    </div>
    </body>
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


<script>
                        $(document).ready(function(){
                          $("button").click(function(){
                            $(".spinner-border").toggle();
                          });
                        });
                        </script>

        <script>
            $(".botao-contato").click(function() {
            alert("Aguarde alguns segundos...");
            alert("Enviado!");
                          
});
            $(".form-contato").click(function() {
            setTimeout(reset), 1000;
        
});

                            

        </script>



<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
  </script>
