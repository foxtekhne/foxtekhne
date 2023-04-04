<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    
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


    <section class="principal index">
        <article id="index1">
            <div id="texto-index1">
                <p id="texto1-index1">Precisa de um sistema para sua empresa?</p>
                <p id="texto2-index1">Nós desenvolvemos para você!</p>
            </div>

            <div id="imagem-index1">
                <img src="imagens/logo.png" alt="logo fox tekhne" width="90%">
            </div>
        </article>
        
        <!-- <article id="conselho">
            
		<h1 class="text-center my-4">Fox aconselha!</h1>
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-10">
				<button class="btn btn-primary mb-3" onclick="obterConselho()">Conselho do dia</button>
				<div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-header">
						<strong class="me-auto">Conselho</strong>
						<small class="text-muted">agora</small>
						<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Fechar"></button>
					</div>
					<div class="toast-body">
						Aqui vai aparecer o conselho obtido da API.
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
	<script>
		function obterConselho() {
			$.getJSON('https://api.adviceslip.com/advice', function(data) {
				$('#toast .toast-body').text(data.slip.advice);
				$('.toast').toast('show');
			});
		}
	</script>

        </article>-->
        

        <article id="index2">
            <div id="vantagens">
                <div class="titulo-index2">
                    <p>Vantagens de Implementar um sistema em sua empresa</p>
                </div>

                <div id="imagem-index2">
                    <img src="imagens/banner1-index2.png" alt="vantagens" width="70%">
                </div>
            </div>

        </article>

        <article id="index3">
            <div id="titulo-index3">
                Sobre Nós
            </div>

            <article id="index3">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                    <div class="carousel-inner" >
                      <div class="carousel-item active">
                        <div id="sobrenos-index3">                
                            <div>
                                <p class="titulo-sobrenos-index3"><b>Missão</b></p>
                                <hr>
                                <p style="color: #ffffff; margin-top: 5%;">Nossa missão é levar soluções digitais para empreendedores por meio da aplicação de sistemas e desenvolvimento web de forma inovadora, simplificando o trabalho e gerando novas oportunidades de negócios.</p>
                                <img src="imagens/missao.png" alt="missão" width="20%">
                            </div>
                         </div>
                      </div>
                      
                      <div class="carousel-item">
                        <div id="sobrenos-index3">
                            <div>
                                <p class="titulo-sobrenos-index3"><b>Visão</b></p>
                                <hr>
                                <p style="color: #ffffff; margin-top: 5%;">Tornar a Fox Tekhne referência na área da tecnologia no Brasil, alinhando o desenvolvimento pessoal e profissional de nossos colaboradores para que possam contribuir com a empresa da melhor forma, identificando a internet como potencializadora para o sucesso e trazendo aos clientes as melhores soluções digitais, tendo sempre o compromisso de evoluir as técnicas e adquirir novos conhecimentos.</p>
                                <img src="imagens/visao.png" alt="visão" width="20%">
                            </div>
                         </div>
                      </div>
    
                      <div class="carousel-item">
                        <div id="sobrenos-index3">
                            <div>
                                <p class="titulo-sobrenos-index3"><b>Valores</b></p>
                                <hr>
                                <ul style="color: #ffffff; margin-top: 5%;">
                                    <li>Respeito para com os outros</li>
                                    <li>Excelência em nossos serviços</li>
                                    <li>Integridade nas decisões e ações</li>
                                    <li>Ética como valor indispensável em nossa conduta</li>
                                    <li>Criatividade para encontrar os melhores caminhos de desenvolvimento</li>
                                    <li>Responsabilidade com as metas e compromissos</li>
                                    <li> Comprometimento para sempre trazer sempre soluções que sejam compatíveis com as ideias de nossos clientes</li>
                                    <li>Dedicação com as necessidades dos clientes</li>
                                    <li>Empenho para superar desafios e adquirir novos conhecimentos</li>
                                </ul>
                                <img src="imagens/valores.png" alt="valores" width="20%">
                            </div>
                            </div>
                      </div>
                    </div>
    
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                  </div>

            
            <div id="link-index3">
                <a href="sobrenos.html">Saiba Mais</a>
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
