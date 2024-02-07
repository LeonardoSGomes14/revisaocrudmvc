<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="shortcut icon" href="faviconeightvision.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="CSS/evo-calendar.midnight-blue.min.css">
    <link rel="stylesheet" href="CSS/evo-calendar.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <div class="princ">
        <header>
    <div>
        <a href="#inicio"><img id="inicio" class="logo" src="fotos/logo.jpeg" alt="logo"></a>
</div>
    <div>
        <a class="botao" href="#sessao_competicao">SOBRE A COMPETIÇÃO</a>
        <a class="botao" href="#sessao_equipes">CONHEÇA AS EQUIPES</a>
        <a class="botao" href="#sessao_galeria">GALERIA</a>
        <a class="botao" href="#sessao_ingresso">ADQUIRA SEU INGRESSO</a>
    </div>
        <div class="linkprofile">
        <a class="profile" href = "login.php"><img src="user.png" class="imgprofile">Login/cad</a>
        </div>

        </header>
        <section>

            <div class="banner">
<img src="fotos/banner.jpeg" alt="banner">
</div>


    <div id="contador"></div>

    <script>
        // Data de término do contador regressivo (no formato "Ano, Mês, Dia, Hora, Minuto, Segundo")
        var dataTermino = new Date("2023-10-16T07:00:00").getTime();

        // Atualize o contador a cada segundo
        var x = setInterval(function() {
            var agora = new Date().getTime();
            var diferenca = dataTermino - agora;

            var dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));
            var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
            var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);

            var contadorDiv = document.getElementById("contador");
            contadorDiv.innerHTML = dias + "d " + horas + "h " + minutos + "m " + segundos + "s ";

            if (diferenca < 0) {
                clearInterval(x);
                contadorDiv.innerHTML = "Contagem regressiva encerrada! Que os jogos comecem!";
            }
        }, 1000);
    </script>







<?php
require_once 'db/config.php';
require_once 'app/controller/ticketcontroller.php';

$ticketcontroller = new ticketcontroller($pdo);

//Cadastrar ingresso
if (isset($_POST['nome']) &&
   isset($_POST['idade']) &&
    isset($_POST['escola'])) {
    $ticketcontroller->Criarticket(
        $_POST['nome'],
        $_POST['idade'],
        $_POST['escola']);
    }

//Atualizar ingresso 
if (isset($_POST['atualizar_nome']) &&
    isset($_POST['atualizar_idade']) &&
    isset($_POST['atualizar_escola']) &&
    isset($_POST['id'])) {
    $ticketcontroller->atualizarticket(
        $_POST['id'],
        $_POST['atualizar_nome'],
        $_POST['atualizar_idade'],
        $_POST['atualizar_escola']);
}


// Exibir ingresso - removido o trecho redundante
$tickets = $ticketcontroller->listartickets();

?>


   <h1>Ingressos</h1> 
   <form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="idade" placeholder="Idade">
    <input type="text" name="escola" placeholder="Escola">
    <button type="submit">Criar ingresso</button>
   </form>

   <!-- Exibir lista de ingressos -->
   <ul>
       <?php foreach ($tickets as $ticket): ?>
           <li>
               nome: <?php echo $ticket['nome']; ?> 
               idade: <?php echo $ticket['idade']; ?> 
               escola: <?php echo $ticket['escola']; ?>
           </li>
       <?php endforeach; ?>
   </ul>

<!-- atualizar ingresso -->
   <h2>Atualizar ingresso</h2>
   <form method="post">
       <select name="id">
           <?php foreach ($tickets as $ticket): ?>
               <option value="<?php echo $ticket['id']; ?>">
                   <?php echo $ticket['nome']; ?>
               </option>
           <?php endforeach; ?>
       </select>
       <input type="text" name="atualizar_nome" placeholder="Novo nome">
       <input type="text" name="atualizar_idade" placeholder="Idade">
       <input type="text" name="atualizar_escola" placeholder="Escola">
       <button type="submit">Atualizar informações do ingresso</button>
        
   </form>
           </br>
   <div>
<div class="hero">

<div id="calendar"></div>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="evo-calendar.min.js"></script>

<script>
$(document).ready(function() {
  $('#calendar').evoCalendar({

      theme: 'Midnight Blue',
      calendarEvents: [
    {
      id: 'event1', // Event's ID (required)
      name: "New Year", // Event name (required)
      date: "January/1/2020", // Event date (required)
      description:"Mais um ano se inicia!",
      type: "holiday", // Event type (required)
      everyYear: true // Same event every year (optional)
    },
    {
      name: "Vacation Leave",
      badge: "02/13 - 02/15", // Event badge (optional)
      date: ["February/13/2020", "February/15/2020"], // Date range
      description: "Vacation leave for 3 days.", // Event description (optional)
      type: "event",
      color: "#63d867" // Event custom color (optional)
    },
    {
      id: 'event3', // Event's ID (required)
      name: "Abertura do interclasse", // Event name (required)
      date: "october/16/2023", // Event date (required)
      description:"A estreia mais esperada do ano chegou!",
      type: "event", // Event type (required)
      color:"red",
      everyYear: false // Same event every year (optional)
    }
  ]
});

  })

</script>
</div>
        </section>






</body>
</html>




        <footer>
            <div class="comunic">
    <div class="logo1">
            <img src="fotos/logo.jpeg" alt="logo">
   </div>
       <div class="contato">
            <div class="contato-d"><p class="contato-p">CONTATE-NOS</p></div>
            <div class="rs">
                <a href=""><img class="icone" src="fotos/instagram.png"></a>
                <a href=""><img class="icone" src="fotos/whatsapp.webp"></a>
                <a href=""><img class="icone" src="fotos/youtube.png"></a>
                <a href=""><img class="icone" src="fotos/facebook.png"></a>
        </div>  
           </div>
           </div>
            <div class="termos">
                <a href=""\><p class="termo-p">POLITICA DE PRIVACIDADE | FAQ</p></a>
           </div>
    </div>
        </footer>
    </div>


</body>
</html>