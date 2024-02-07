<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomolhari&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="faviconeightvision.ico" type="image/x-icon">
    <!-- Inclua o CSS do FullCalendar -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />

    <!-- Inclua o JavaScript do FullCalendar e as dependências (Moment.js) -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
    <link rel="stylesheet" href="CSS/index-style.css">
    <link rel="stylesheet" href="CSS/cab-rod-style.css">
    <link rel="stylesheet" Loginhref="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="calendar.js">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <div class="princ">
<<<<<<< HEAD
        <header>
            <div class="logo">
                <a href="index.php">
                    <img src="fotos/Logotipo sobre amigurumi colorido em vermelho (1).png" alt="logo">
                </a>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li class="nav-bts"><a class="nav-link" href="equipes.php">CONHEÇAS AS EQUIPES</a></li>

                </ul>
            </nav>
            <div class="icone-l">
                <a href="login.php">
                    <img id="user" src="fotos/user.png" alt="login">
                    <p class="text-user">Login</p>
                </a>
            </div>

        </header>
=======
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
>>>>>>> 3a99dd15d42898820bcfcbb6a0b7fadd25231585
        <section>

            <div class="nav-bar-mob">
                <ul>
                    <li class="nav-bts-m"><a class="nav-link-m" href="sobre.html">SOBRE</a></li>
                    <li class="nav-bts-m"><a class="nav-link-m" href="equipes.php">EQUIPES</a></li>
                    <li class="nav-bts-m"><a class="nav-link-m" href="ingressos.php">INGRESSO</a></li>
                </ul>
            </div>
            <div class="banner">
                <img src="fotos/Red Illustrative Chinese New Year Banner (1).png" alt="banner">
            </div>

<<<<<<< HEAD
            <div class="divisao" id="sessao_not">
                <div class="texto-topo">
                    PÁGINA INICIAL
                </div>
                <div class="linha"></div>
            </div>
=======
<div class="divisao">
        <div class="texto-topo">
            PÁGINA INICIAL
        </div>
        <div class="linha"></div>
    </div> 
>>>>>>> 3a99dd15d42898820bcfcbb6a0b7fadd25231585

            <div class="calendario-contador">

<<<<<<< HEAD
                <div class="tuto">
                    <div class="tuto-d">
                        <img src="fotos/Feliz dia das Crianças Doodle Colorido Divertido Instagram Post (1).png">
                        </a>
                    </div>
                    <div class="tuto-t">
                        <p>PARTICIPE JÁ</p>
                    </div>
                </div>
                <div class="contador-area">
=======
<div class="tuto">
    <div class="tuto-d">
        <a href="tutorial_interclasse.pdf">
            <img src="fotos/document.png" alt="documento-tutorial">
        </a>
    </div>
    <div class="tuto-t">
        <p>TUTORIAL DE ACESSO</p>
    </div>
</div>
    <div class="contador-area">
>>>>>>> 3a99dd15d42898820bcfcbb6a0b7fadd25231585

                    <div class="contador-t">
                        <p>FALTAM</p>
                    </div>

                    <div id="contador"></div>

                    <div class="contador-t">
                        <p>PARA A GINCANA</p>
                    </div>

                    <div class="botao-c"><a href="calendar.html" class="botao-ac">VER CALENDÁRIO DE EVENTOS</a></div>

                    <script>
                        // Data de término do contador regressivo (no formato "Ano, Mês, Dia, Hora, Minuto, Segundo")
                        var dataTermino = new Date("2024-03-17T08:50:00").getTime();

                        // Atualize o contador a cada segundo
                        var x = setInterval(function() {
                            var agora = new Date().getTime();
                            var diferenca = dataTermino - agora;

                            var dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));
                            var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
                            var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);

                            var contadorDiv = document.getElementById("contador");
                            contadorDiv.innerHTML = dias + " : " + horas + " : " + minutos + " : " + segundos;

                            if (diferenca < 0) {
                                clearInterval(x);
                                contadorDiv.innerHTML = "Contagem regressiva encerrada! Que os jogos comecem!";
                            }
                        }, 1000);
                    </script>
                </div>
            </div>

<<<<<<< HEAD
            <div class="divisao" id="sessao_not">
=======
<div class="divisao" >
        <div class="texto-topo">
            ÚLTIMAS NOTÍCIAS
        </div>
        <div class="linha"></div>
    </div> 
>>>>>>> 3a99dd15d42898820bcfcbb6a0b7fadd25231585


        </section>
        <footer id="sessao_not">
            <div class="comunic">
                <div class="logo1">
                    <img src="fotos/Logotipo sobre amigurumi colorido em vermelho (1).png" alt="logo">
                </div>
                <div class="contato">
                    <div class="contato-d">
                        <p class="contato-p">CONTATE-NOS</p>
                    </div>
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


    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
    </script>
</body>

</html>