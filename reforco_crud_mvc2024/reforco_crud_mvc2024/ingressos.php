<div class="no-view">
    <?php
    session_start();
    var_dump($_SESSION);
    if ($_SESSION['permissao'] != 1) {
        header('Location: index.php');
    }
    ?>


<<<<<<< HEAD
    <!DOCTYPE html>
    <html lang="en">
=======
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
>>>>>>> 3a99dd15d42898820bcfcbb6a0b7fadd25231585

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ingressos</title>
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
        <link rel="stylesheet" href="CSS/ingressos-style.css">
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
                        <li class="nav-bts"><a class="nav-link" href="equipes.php">CONHEÇAS AS EQUIPES</a></li>
                        <li class="nav-bts"><a class="nav-link" href="galeria.php">GALERIA</a></li>
                        <li class="nav-bts"><a class="nav-link" href="index.php#sessao_not">NOTÍCIAS</a></li>
                        <li class="nav-bts"><a class="nav-link" href="ingressos.php">ADQUIRA SEU INGRESSO</a></li>
                    </ul>
                </nav>
                <div class="icone-l">
                    <a href="login.php">
                        <img id="user" src="fotos/user.png" alt="login">
                        <p class="text-user">Login</p>
                    </a>
                </div>

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
                <?php
                require_once 'db/config.php';
                require_once 'app/controller/equipecontroller.php';

                $equipecontroller = new equipecontroller($pdo);

                //Cadastrar ingresso
                if (
                    isset($_POST['nome']) &&
                    isset($_POST['idade']) &&
                    isset($_POST['escola'])
                ) {
                    $equipecontroller->Criarequipe(
                        $_POST['nome'],
                        $_POST['idade'],
                        $_POST['escola']
                    );
                }

                //Atualizar ingresso 
                if (
                    isset($_POST['atualizar_nome']) &&
                    isset($_POST['atualizar_idade']) &&
                    isset($_POST['atualizar_escola']) &&
                    isset($_POST['id'])
                ) {
                    $equipecontroller->atualizarequipe(
                        $_POST['id'],
                        $_POST['atualizar_nome'],
                        $_POST['atualizar_idade'],
                        $_POST['atualizar_escola']
                    );
                }


                // Exibir ingresso - removido o trecho redundante
                $equipes = $equipecontroller->listarequipes();

                ?>

                <div class="banner">
                    <img src="fotos/banner-ingressos.jpeg" alt="banner">
                </div>

                <div class="divisao" id="sessao_not">
                    <div class="texto-topo">
                        INGRESSOS DO INTERCLASSE:
                    </div>
                    <div class="linha"></div>
                </div>
                <div class="img1">
                    <img src="fotos/hist.png" alt="banner">
                </div>
                <div class="divisao" id="sessao_not">
                    <div class="texto-topo">
                        PREENCHA AS INFORMAÇÕES:
                    </div>
                    <div class="linha"></div>
                </div>
                <div class="form-ingressos">
                    <form method="post">
                        <div class="inp"><input type="text" name="nome" placeholder="Nome"></div>
                        <div class="inp"><input type="text" name="idade" placeholder="Idade"></div>
                        <div class="inp"><input type="text" name="escola" placeholder="Escola"></div>
                </div>
                <div class="divisao" id="sessao_not">
                    <div class="linha"></div>
                </div>
                <div class="btao">
                    <button type="submit">
                        RESERVAR
                    </button>
                </div>
        </div>
        </form>


</div>
</section>
<footer>
    <div class="comunic">
        <div class="logo1">
            <img src="fotos/logo.jpeg" alt="logo">
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


</body>

</html>