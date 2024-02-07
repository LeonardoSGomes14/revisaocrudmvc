<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipes</title>
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
    <link rel="stylesheet" href="CSS/equipes-style.css">
    <link rel="stylesheet" href="CSS/rank-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
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
                    <?php
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
>>>>>>> 3a99dd15d42898820bcfcbb6a0b7fadd25231585

                    session_start();
                    if (isset($_SESSION['adm']) && $_SESSION['adm'] == 1) {
                        echo '<li class="nav-bts"><a class="nav-link" href="adm.php">ÁREA DO ADMINISTRADOR</a></li>';
                    }
                    ?>
                    <li class="nav-bts"><a class="nav-link" href="index.php">PÁGINA INICIAL</a></li>
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
            </div>
            <div class="banner">
                <img src="fotos/banner-equipes.png" alt="banner">
            </div>

            <h1 class="center">EQUIPES</h1>

            <div class="lista-noticias">
                <?php
                require_once 'db/config.php';
                require_once 'app/controller/equipecontroller.php';
                require_once 'app/model/equipemodel.php';

                // Criar uma instância do modelo equipemodel
                $equipemodel = new equipemodel($pdo);

                // Criar uma instância do controlador equipeController e passar o modelo
                $equipeController = new equipeController($equipemodel);
                $equipes = $equipemodel->listarequipes();
                ?>


                <div class='rankdiv'>
                    <table>
                        <thead>
                            <tr>
                                <th class="thrank">nome:
                                <th class="thrank">Cor:
                                <th class="thrank">Membros:</th>
                            </tr>


                        </thead>
                        <?php foreach ($equipes as $equipe) : ?>
                            <tbody>
                                <tr>
                                    <th class="thrank"><?php echo $equipe['nome_eqp']; ?></th>
                                    <td class="tdrank"><?php echo $equipe['cor']; ?></td>
                                    <td class="tdrank"> <?php echo $equipe['qnt_membros']; ?></td>
                                </tr>


                            <?php endforeach; ?>
                    </table>
                </div>



                <div class="lista-noticias">

                    <h2 class="center">LISTA DE PARTICIPANTES</h2>
                    <?php
                    require_once 'db/config.php';
                    require_once 'app/controller/pessoacontroller.php';
                    require_once 'app/model/pessoamodel.php';

                    // Criar uma instância do modelo pessoamodel
                    $pessoamodel = new pessoamodel($pdo);

                    // Criar uma instância do controlador pessoaController e passar o modelo
                    $pessoaController = new pessoaController($pessoamodel);

                    $pessoas = $pessoamodel->listarpessoas();
                    ?>

                    <div class='rankdiv'>
                        <table>
                            <thead>
                                <tr>
                                    <th class="thrank">nome:
                                    <th class="thrank">Idade:
                                    <th class="thrank">Cor da Equipe:</th>
                                </tr>


                            </thead>
                            <?php foreach ($pessoas as $pessoa) : ?>
                                <tbody>
                                    <tr>
                                        <th class="thrank"><?php echo $pessoa['nome_pessoa']; ?></th>
                                        <td class="tdrank"><?php echo $pessoa['idade_pessoa']; ?></td>
                                        <td class="tdrank"> <?php echo $pessoa['cor_equipe']; ?></td>
                                    </tr>


                                <?php endforeach; ?>
                        </table>
                    </div>


        </section>
        <footer>
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
</body>

</html>