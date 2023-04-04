<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">

    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    
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

<section class="container">
  <article class="titulopag">
      <img  src="imagens/logo.png"> <h1>Planos</h1>   
  </article>
</section>

  <section>
    <main>
 
      <article class="container-pricing">
        <!-- title -->
        <h1>Escolha seu plano!</h1>
        <!-- subtitle -->
        <p>Temos planos completos que atendem a necessidade da sua empresa! Alem desses, também é possível escolher individualment os produtos que sua empresa precisa! Entre em contato conosco.</p>
      </article>
      <!-- list prices -->
      <ul class="pricing-list">
        <!-- items pricing -->
        <li class="pricing item-plano">
          <strong>Pacote Ouro</strong>
           <img src="imagens/planos-1.png" class="imgplanos">
          <br>
          <div class="atendimento-planos">
          	1h/semana
          </div>
          <ul class="pricing-list-features">
            <li class="pricing-list-features-item"><i class="fas fa-check"></i><span>Administração de email</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Administração da Hospedagem</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Manutenção do Facebook e Instagram</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Geração de Leads até 2500</span></li>
          </ul>
          
          <a href="orcamento.html" class="btn btn-start">Saiba mais!</a>
        </li>
        <!-- items pricing featuresd -->
        <li class="pricing item-plano professional">
          <strong>Pacote Safira</strong>
          <img src="imagens/planos-2.png" class="imgplanos">
          <br>
          <div class="atendimento-planos">
          	2h/semana
          </div>
          <ul class="pricing-list-features">
            <li class="pricing-list-features-item"><i class="fas fa-check"></i><span>Administração de email</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Administração da Hospedagem</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Manutenção do Facebook e Instagram</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Geração de Leads de 2501 a 5000</span></li>
          </ul>
          
          <a href="orcamento.html" class="btn btn-start">Saiba mais!</a>
        </li>
        <!-- items pricing -->
        <li class="pricing item-plano">
          <strong>Diamante</strong>
          <img src="imagens/planos-3.png" class="imgplanos">
          <br>
          <div class="atendimento-planos">
          	4h/semana
          </div>
          <ul class="pricing-list-features">
            <li class="pricing-list-features-item"><i class="fas fa-check"></i><span>Administração de email</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Administração da Hospedagem</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Manutenção do Facebook e Instagram</span></li>
            <li class="pricing-list-features-item"><i class="fas fa-check"></i> <span>Geração de Leads de 5001 a 10000</span></li>
          </ul>
          
          <a href="orcamento.html" class="btn btn-start">Saiba mais!</a>
        </li>

        <li class="pricing item-plano">
          <strong>Personalite</strong>
          <img src="imagens/planos-4.png" class="imgplanos">
          <br>
          <div class="atendimento-planos">
          	4h/semana
          </div>
          <ul class="pricing-list-features">
            <li class="pricing-list-features-item"><i class="fas fa-check"></i><span>Serviço Personalizado</span></li>
          </ul>
          
          <a href="orcamento.html" class="btn btn-start">Saiba mais!</a>
        </li>

      </ul>
    </main>
    
    
    
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
