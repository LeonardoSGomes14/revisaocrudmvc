<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jomolhari&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="faviconeightvision.ico" type="image/x-icon">
    <!-- Inclua o CSS do FullCalendar -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />

<!-- Inclua o JavaScript do FullCalendar e as dependências (Moment.js) -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
    <link rel="stylesheet" href="CSS/cab-rod-style.css">
    <link rel="stylesheet" href="CSS/galeria-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="calendar.js">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <div class="princ">
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="fotos/logo.jpeg" alt="logo">
            </a>
        </div>
        <nav class="nav-bar">
    <ul>
        <li class="nav-bts"><a class="nav-link" href="sobre.html">SOBRE A COMPETIÇÃO</a></li>
        <li class="nav-bts"><a class="nav-link" href="equipes.php">CONHEÇA AS EQUIPES</a></li>
        <li class="nav-bts"><a class="nav-link" href="galeria.php">GALERIA</a></li>
        <li class="nav-bts"><a class="nav-link" href="index.php#sessao_not">NOTÍCIAS</a></li>
        <li class="nav-bts"><a class="nav-link" href="ingressos.php">ADQUIRA SEU INGRESSO</a></li>
    </ul>
</nav>
    <a href="login.php">
        <div class="icone-l">
                <img id="user" src="fotos/user.png" alt="login">
                <p class="text-user">Login/Logout</p>
        </div>
    </a>

</header>
        <section>
        <div class="nav-bar-mob">
                <ul>
                    <li class="nav-bts-m"><a class="nav-link-m" href="sobre.html">SOBRE</a></li>
                    <li class="nav-bts-m"><a class="nav-link-m" href="equipes.php">EQUIPES</a></li>
                    <li class="nav-bts-m"><a class="nav-link-m" href="galeria.php">GALERIA</a></li>
                    <li class="nav-bts-m"><a class="nav-link-m" href="index.php#sessao_not">NOTÍCIAS</a></li>
                    <li class="nav-bts-m"><a class="nav-link-m" href="ingressos.php">INGRESSO</a></li>
                </ul>
            </div>
            <div class="banner">
<img src="fotos/banner-g.png" alt="banner">
</div>

<div class="divisao">
    <div class="linha"></div>


<div class="galeria-area">
<div class="imagem-container">
<div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/1.jpeg">
            <img src="fotos/fotinhas/1.jpeg" alt="Imagem 1">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/1.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/2.jpeg">
            <img src="fotos/fotinhas/2.jpeg" alt="Imagem 2">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/2.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/3.jpeg">
            <img src="fotos/fotinhas/3.jpeg" alt="Imagem 3">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/3.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>
    
    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/4.jpeg">
            <img src="fotos/fotinhas/4.jpeg" alt="Imagem 4">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/4.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/5.jpeg">
            <img src="fotos/fotinhas/5.jpeg" alt="Imagem 5">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/5.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/6.jpeg">
            <img src="fotos/fotinhas/6.jpeg" alt="Imagem 6">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/6.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/7.jpeg">
            <img src="fotos/fotinhas/7.jpeg" alt="Imagem 7">
        </a>
    </div>
    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/7.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="" class="modal-conteudo" id="imagemExpandida">
    </div>

    <div class="imagem-container">
        <a href="#" class="imagem-clicavel" data-image="fotos/fotinhas/8.jpeg">
            <img src="fotos/fotinhas/8.jpeg" alt="Imagem 8">
        </a>
    </div>

    <div id="modal" class="modal">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <img  src="fotos/fotinhas/8.jpeg" class="modal-conteudo" id="imagemExpandida">
    </div>
    </div>
    </div>
</div>
</div>
<script src="script.js"></script>

</section>
<footer>
            <div class="comunic">
    <div class="logo1">
            <img src="fotos/logo.jpeg" alt="logo">
   </div>
       <div class="contato">
            <div class="contato-d"><p class="contato-p">CONTATE-NOS</p></div>
            <div class="rs">
            <a href="https://www.instagram.com/"><img class="icone" src="fotos/instagram.png"></a>
            <a href="https://web.whatsapp.com/"><img class="icone" src="fotos/whatsapp.webp"></a>
            <a href="https://www.youtube.com/"><img class="icone" src="fotos/youtube.png"></a>
            <a href="https://www.facebook.com/"><img class="icone" src="fotos/facebook.png"></a>
        </div>  
    </div>
           </div>
                <div class="termos">
                    <p class="termo-p">
                        <a href="politica.html">
                            POLITICA DE PRIVACIDADE
                        </a> 
                            | 
                        <a href="FAQ.html">
                            FAQ
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>