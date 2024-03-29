<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>Fox Techkne</title>


</head>
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

    <section  class="web">

        <script>
            /*$(document).ready(function(){
              $("#text1").hide();
              $("#b1").click(function(){
                $("#text1").toggle();
              });
            });
            
            $(document).ready(function(){
            $("#text2").hide();
              $("#b2").click(function(){
                $("#text2").toggle();
              });
            });
            
            $(document).ready(function(){
            $("#text3").hide();
              $("#b3").click(function(){
                $("#text3").toggle();
              });
            });
            
            $(document).ready(function(){
            $("#text4").hide();
              $("#b4").click(function(){
                $("#text4").toggle();
              });
            });
            
            $(document).ready(function(){
            $("#text5").hide();
              $("#b5").click(function(){
                $("#text5").toggle();
              });
            });*/

            $(document).ready(function(){
              $(".text1").hide();
              $("button").click(function(){
                $(".text1").toggle();
              });
            });
            
            
        </script>

        <div class="titulopag">
            <img  src="imagens/logo.png"> <h1>SERVIÇOS</h1>   

        </div>
        
        <h2>Desenvolvimento Web</h2>
        <h3> Nossa empresa fornece um sistema de desenvolvimento web com base em Front-End e Back-End, resultando nos seguintes serviços: </h3>
        <article>

            <div class="grid-servicos">

                <div class="grid-s1">
                    <img  src="imagens/design.jpg" >
                    <h3> Design</h3>
                    <button id="b1">Saiba Mais</button>
                    <p class="text1"> A parte visual é essencial para o seu site!Através dela, é possível atrair clientes pela distribuição das cores e elementos, mostrando empenho e vontade de agradar o consumidor.  </p>
                </div>
                    
                <div class="grid-s2">
                    <img src="imagens/suporte.jpg" >
                    <h3> Suporte</h3>
                    <button id="b2">Saiba Mais</button>
                    <p class="text1"> Ao longo do tempo, seu site precisará de novas atualizações e correções. Para isso, a Fox oferece a você todo o suporte necessário, desde adição de conteúdos para seus clientes a manutenção de design e novo estilo, se assim desejar.  </p>
                </div>
                
                <div class="grid-s3">
                    <img  src="imagens/html.png" >
                    <h3>HTML e CSS</h3>
                    <button id="b3">Saiba Mais</button>
                    <p class="text1"> Utilizadas como linguagem de formatação, HTML e CSS serão a base de seu site. Por intermédio deles, serão feitos todos os elementos da parte visual e estruturação do site, trazendo um site completo e mais acessível para seus clientes. </p>
                </div>
                
                <div class="grid-s4">
                    <img  src="imagens/banco.png">
                    <h3>Banco de dados</h3>
                    <button id="b4">Saiba Mais</button>
                    <p class="text1">O banco de dados nada mais é do que um sistema que armazena dados de seus clientes obtidos por um formulário. Através dele, é possível gerenciar os pedidos de cada consumidor por meio de tabelas, como um planilha. 
                    Por conta disso, nossa empresa oferece a manutenção do banco de dados de seu site, facilitando a sua gestão.  
                    </p>
                </div>
                
                <div class="grid-s5">
                    <img  src="imagens/php.png">
                    <h3>PHP</h3>
                    <button id="b5">Saiba Mais</button>
                    <p class="text1">Por meio da linguagem PHP será feita a progamação de seu site. Através dela, acessaremos o banco de dados e faremos todas as ações para o melhor gerenciamento de seu site e tratamento dos dados.      
                    </p>
                </div>
                
                        <!--<div class="grid-s1">
                            <img  src="imagens/design.jpg" >
                            <h3> Design</h3>
                            <p> A parte visual é essencial para o seu site!Através dela, é possível atrair clientes pela distribuição das cores e elementos, mostrando empenho e vontade de agradar o consumidor.  </p>
                        </div>
                        <div class="grid-s2">
                            <img src="imagens/suporte.jpg" >
                            <h3> Suporte</h3>
                            <p> Ao longo do tempo, seu site precisará de novas atualizações e correções. Para isso, a Fox oferece a você todo o suporte necessário, desde adição de conteúdos para seus clientes a manutenção de design e novo estilo, se assim desejar.  </p>
                        </div>
                        <div class="grid-s3">
                            <img  src="imagens/html.png" >
                            <h3>HTML e CSS</h3>
                            <p> Utilizadas como linguagem de formatação, HTML e CSS serão a base de seu site. Por intermédio deles, serão feitos todos os elementos da parte visual e estruturação do site, trazendo um site completo e mais acessível para seus clientes. </p>
                        </div>
                        <div class="grid-s4">
                            <img  src="imagens/banco.png">
                            <h3>Banco de dados</h3>
                            <p>O banco de dados nada mais é do que um sistema que armazena dados de seus clientes obtidos por um formulário. Através dele, é possível gerenciar os pedidos de cada consumidor por meio de tabelas, como um planilha. 
                                Por conta disso, nossa empresa oferece a manutenção do banco de dados de seu site, facilitando a sua gestão.  
                            </p>
                        </div>
                        <div class="grid-s5">
                            <img  src="imagens/php.png">
                            <h3>PHP</h3>
                            <p>Por meio da linguagem PHP será feita a progamação de seu site. Através dela, acessaremos o banco de dados e faremos todas as ações para o melhor gerenciamento de seu site e tratamento dos dados.      
                            </p>
                        </div>-->

                </div>
                    <div class="icones-servicos-1">
                        <img  src="imagens/pergunte.png" style="float:left" ><h1>Dúvidas que podem surgir...</h1>
                        <hr color="black" width="80%">
                    </div>
                    
                    
                    <div class="grid-servicos-2">
                        <div class="grid-s6">
                            <img  src="imagens/monitor.png">
                            <h3>Como vou saber do que a minha empresa precisa?</h3>
                            <p>Por meio de uma consultoria, nós da Fox Tekhne avaliamos as necessidades dos clientes e indicamos o melhor sistema para seu negócio.  </p>
                        </div>
                        <div class="grid-s7">
                            <img  src="imagens/assistente.png">
                            <h3>Serei prontamente atendido quando precisar entrar em contato?</h3>
                            <p>Sim! Nossa empresa conta com quatro colaboradores que estarão disponíveis para tirar todas as possíveis dúvidas e resolver as pendências, se for o caso.</p>
                        </div>
                        <div class="grid-s8">
                            <img  src="imagens/acordo.png">
                            <h3>Qual a duração do contrato?</h3>
                            <p>A duração do contrato é de 1 ano a partir da data da contratação. </p>
                        </div>
                        <div class="grid-s9">
                            <img  src="imagens/dinheiro.png">
                            <h3>Como faço para solicitar o orçamento?</h3>
                            <p>Para solicitar o orçamento, basta entrar em contato com o email foxtekhne@gmail.com</p>
                        </div>
                        


                    </div>
            
        </article>
        
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
</html>
