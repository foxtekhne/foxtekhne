<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Fox Techkne</title>


</head>
<body class="container" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <style>
        body {
            position: relative; 
        }
    </style>

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
            <img  src="imagens/logo.png"> <h1>SOBRE NÓS</h1>   
        </article>
    </section>
    <br>
    <br>
    <br>
    <section class="flex">
        <div>
            <p id="historia-sobrenos"> História</p>
            <img src="./imagens/codigo.jpeg">
            <p>Nascida através da disciplina de Projeto Técnico Integrador, a Fox Tekhne é resultado da união de quatro colaboradoras que possuem o mesmo objetivo: fornecer um sistema de qualidade aos microempreendedores, buscando alavancar seus negócios e criar uma parceria que beneficia ambos os lados.</p>
            <br>
            <br>
        </div>
        <div>
            <p id="sobrenos-sobrenos"> Sobre Nós</p>
            <img src="./imagens/pc.png">
            <p>Somos uma empresa formada inteiramente por mulheres, que teve como início a disciplina de Projeto Técnico Integrador, em nossa Instituição de Ensino (Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos), e utilizamos da oportunidade para juntar nossos conhecimentos e habilidades, tendo como principal objetivo auxiliar nossos clientes com o uso da tecnologia.</p>
            <br>
            <br>
        </div>
        <div>
            <p id="nome-sobrenos"> Nome</p>
            <img src="./imagens/codigo2.jpeg">
            <p>Do grego, a palavra <i>"Tekhné"</i> significa arte e habilidade técnica, como explorado por Aristóteles. A arte é subjetiva, ou seja, diferente
            dependendo do ponto de vista, mas sempre bela e signifitiva para quem vê e interpreta; assim como a arte, nossa empresa busca realizar (de forma única)
            aquilo que é ideal para cada um de nossos clientes, sempre visando estimular sua criatividade e ajudar com sua necessidade tecnológica.</p>
            <p><i>"Fox"</i> é o inglês para <i>"raposa"</i>, animal símbolo da inteligência e astúcia, duas características utilizadas pelas fundadoras da empresa na solução
            de problemas e realização de serviços.</p> 
            <br>
            <br>
        </div>
        <div> 
            <p id="logo-sobrenos"> Logo</p>
            <img src="./imagens/pc2.png">
            <p>A logo da nossa empresa é composta por três elementos: uma raposa, o contorno do globo e um símbolo feito com a junção das iniciais das
            quatro fundadoras e integrantes da Fox Tekhne: <b>G</b>abriela, <b>H</b>eloisa, <b>F</b>ernanda e <b>T</b>hayane.</p>
            <p>A raposa tem um significado importante no processo de construção da Fox Tekhne, por isso
            foi indispensável na idealização da nossa imagem; o globo representa a visão compartilhada pelas
            fundadoras e pela própria Fox Tekhne: o alcance em todo o país e, futuramente, mundo, tornando a empresa em uma referência na área tecnológica.</p>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div>
            <p id="colaboradores-sobrenos"> Colaboradoras</p>
            <img src="./imagens/linha.png">
        </div>
    </section>

    <article class="colaboradores">

      <div class="card-fotos">
        <img class="card-img-top" src="imagens/gabriela.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Gabriela Munhoz</h4>
          <p class="card-text">Gerente da Fox Tekhne, Gabriela Araújo Munhoz sempre gostou da área da informática e entrou no curso para aprofundar seus conhecimentos.
            Atua no <i>back-end e desenvolvimento de protótipos. </i>Também realiza o contato entre empresa e cliente.</p>
          <br>
            <a href="mailto: foxtekhne@gmail.com" target="_blank" class="verperfil">Ver Perfil</a>
        </div>
      </div>

      <div class="card-fotos">
        <img class="card-img-top" src="imagens/heloisa.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Heloisa Silva</h4>
          <p class="card-text">Heloisa Silva Santos</b> é a subgerente da empresa. Sua maior motivação para início do curso foi aprender a desenvolver sites para a internet. Cuida do <i>back-end, desenvolvimento de protótipos e UX design.</i> Além disso,
        é uma das responsáveis pelo contato da empresa com o cliente e ministra as redes sociais.
          </p>
          <br>
            <a href="mailto: foxtekhne@gmail.com" target="_blank" class="verperfil">Ver Perfil</a>
        </div>
      </div>

      <div class="card-fotos">
        <img class="card-img-top" src="imagens/fernanda.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Fernanda Melo</h4>
          <p class="card-text">Fernanda Muniz Melo</b> é uma das colaboradoras da Fox Tekhne. Entrou no instituto por admirar a área tecnológica. Sua função na empresa é desenvolver o <i>front-end e os protótipos. </i>
        Ademais, cuida das redes sociais, análise de requisitos e identidade visual.</p>
          <br>
            <a href="mailto: foxtekhne@gmail.com" target="_blank" class="verperfil">Ver Perfil</a>
        </div>
      </div>

      <div class="card-fotos">
        <img class="card-img-top" src="imagens/thayane.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Thayane Correa</h4>
          <p class="card-text">Thayane Correa da Silva</b> é uma das colaboradoras da Fox Tekhne Ingressou no Instituto pelo interesse na criação de sites. Desenvolve protótipos e cuida do <i>front-end e redes sociais da empresa. </i>
        Faz a análise de requisitos e trabalha a identidade visual da Fox Tekhne.</p>
          <br>
            <a href="mailto: foxtekhne@gmail.com" target="_blank" class="verperfil">Ver Perfil</a>
        </div>
      </div>


    </article>


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


