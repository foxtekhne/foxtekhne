<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Fox Techkne</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

    
    <script>
    $(document).ready(function(){
    $("#hide").click(function(){
    $("#panel").hide();
      });
    });

    $(document).ready(function(){
    $("#hide1").click(function(){
    $("#panel1").hide();
      });
    });

     
    $(document).ready(function(){
    $("#hide2").click(function(){
    $("#panel2").hide();
      });
    });

    
    $(document).ready(function(){
    $("#hide3").click(function(){
    $("#panel3").hide();
      });
    });

      $(document).ready(function(){
    $("#hide4").click(function(){
    $("#panel4").hide();
      });
        });
    $(document).ready(function(){
    $("#hide5").click(function(){
    $("#panel5").hide();
      });
    });

   
</script>
    
    <script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideDown("slow");
      });
    });
    $(document).ready(function(){
      $("#flip1").click(function(){
        $("#panel1").slideDown("slow");
      });
    });
    $(document).ready(function(){
      $("#flip2").click(function(){
        $("#panel2").slideDown("slow");
      });
    });
    $(document).ready(function(){
      $("#flip3").click(function(){
        $("#panel3").slideDown("slow");
      });
    });
    $(document).ready(function(){
      $("#flip4").click(function(){
        $("#panel4").slideDown("slow");
      });
    });
    $(document).ready(function(){
      $("#flip5").click(function(){
        $("#panel5").slideDown("slow");
      });
    });

    
    
    </script>

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


     
      
    <section class="atendimento-itens">
        
        <div class="titulo-atendimento">
                
               <img  src="imagens/logo.png"> <h1>ATENDIMENTO</h1>
                <br>
            </div>
        <div class="flex-atendimento">

            <div class="child" class="n1" >
                
                <p>Atendimento</p>
                <div id="flip" >Clique aqui para saber mais</div>
                <div id="panel">Por meio de uma conversa, reuniremos os principais problemas que sua empresa enfrenta, queixas e ideias que possam surgir.<br>

                   <button class="btn-atendimento" >
                        <h5 id="hide">Diminuir</h5>
                   </button>
                </div>
           
                
                
            </div>
            <div class="child-1">
                <p>Visita técnica</p>
                <div id="flip1">Clique aqui para saber mais</div>
                <div id="panel1">
                    Realizaremos uma visita técnica na empresa para analisar a rotina e os processos que ocorrem diariamente,além de identificar os possíveis problemas e soluções para a empresa.<br>
                    <button class="btn-atendimento" >
                       <h5 id="hide1">Diminuir</h5>
                    </button>
                </div>
            </div>
            <div class="child-2">
                <p>Análise</p>
                <div id="flip2">Clique aqui para saber mais</div>
                <div id="panel2">
                    Faremos uma análise em equipe de possíveis tópicos a serem desenvolvidos,  e organizaremos um orçamento personalizado para a sua empresa, que conterá os serviços que trarão melhorias e aumentarão as vendas da empresa. <br>
                    <button class="btn-atendimento" >
                       <h5 id="hide2">Diminuir</h5>
                    </button>
                </div>
            </div>
           
            <div class="child-3">
                <p>Organização</p>
                <div id="flip3">Clique aqui para saber mais</div>
                <div id="panel3">
                    Organizaremos um cronograma de desenvolvimento juntamente ao representante de sua empresa para atender suas necessidades dentro do prazo estabelecido. As etapas serão realizadas de forma cronológica e oferecerão ao seu negócio um sistema completo. <br>
                        
                     <button class="btn-atendimento" >
                       <h5 id="hide3">Diminuir</h5>
                    </button>    
                </div>

            </div>
            
            <div class="child-4">
                <p>Reuniões</p>
                <div id="flip4">Clique aqui para saber mais</div>
                <div id="panel4">
                    Serão feitas com o intuito de repassar o que está sendo feito ao cliente e discutir possíveis alterações durante o processo de desenvolvimento.<br>
                    
                     <button class="btn-atendimento" >
                       <h5 id="hide4">Diminuir</h5>
                    </button>
                </div>
            </div>
            
            <div class="child-5">
                <p>Aprovação</p>
                <div id="flip5">Clique aqui para saber mais</div>
                <div id="panel5">
                    Após estar finalizado, o sistema passará por uma aprovação do cliente, que avaliará as ações durante o desenvolvimento.<br>
                    
                     <button class="btn-atendimento" >
                       <h5 id="hide5">Diminuir</h5>
                    </button>
                </div>
            </div>
            
          </div>

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
