<div class="no-view">
    <?php
    session_start();
    if ($_SESSION['permissao'] != 1) {
        header('Location: index.php');
    }
    ?>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
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
    <link rel="stylesheet" href="CSS/adm-style.css">
    <link rel="stylesheet" href="CSS/rank-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                </ul>
            </div>


            <div class="lista-noticias">

                <h2 class="center">LISTA DE USUÁRIOS</h2>
                <?php
                require_once 'db/config.php';
                require_once 'app/controller/usercontroller.php';
                require_once 'app/model/usermodel.php';

                // Criar uma instância do modelo usermodel
                $usermodel = new usermodel($pdo);

                // Criar uma instância do controlador userController e passar o modelo
                $userController = new userController($usermodel);

                $users = $usermodel->listarusers();
                ?>

                <div class='rankdiv'>
                    <table>
                        <thead>
                            <tr>
                                <th class="thrank">nome:
                                <th class="thrank">Email:
                                <th class="thrank">Senha:</th>
                                <th class="thrank">Nível ADM:</th>
                            </tr>


                        </thead>
                        <?php foreach ($users as $user) : ?>
                            <tbody>
                                <tr>
                                    <th class="thrank"><?php echo $user['nome']; ?></th>
                                    <td class="tdrank"><?php echo $user['email']; ?></td>
                                    <td class="tdrank"> <?php echo $user['senha']; ?></td>
                                    <td class="tdrank"><?php echo $user['adm']; ?></td>
                                </tr>


                            <?php endforeach; ?>
                    </table>
                </div>

                <?php
                //Cadastrar usuário
                if (
                    isset($_POST['nome']) &&
                    isset($_POST['email']) &&
                    isset($_POST['senha']) &&
                    isset($_POST['adm'])
                ) {
                    $usermodel->criaruser(
                        $_POST['nome'],
                        $_POST['email'],
                        $_POST['senha'],
                        $_POST['adm']
                    );

                    unset($_POST);
                    echo "<script>alert('Usuário cadastrado com sucesso!');
                    window.location.replace('adm.php');</script>";
                }
                
            //Excluir esporte 
if (isset($_POST['excluir_id'])) {
    $esporteController->deletaruser(
        $_POST['excluir_id']);
                ?>

                <!-- Cadastrar dados -->
                <h2>Cadastrar Dados do usuário</h2>
                <form class="linha" method="post">
                    <div class="form-ingressos">
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="senha" placeholder="Senha">
                        <input type="text" name="adm" placeholder="ADM">
                        <div class="botao1"><button type="submit">Cadastrar</button></div>
                    </div>
                </form>


                <?php
                //Atualizar usuário 
                if (
                    isset($_POST['atualizar_nome']) &&
                    isset($_POST['atualizar_email']) &&
                    isset($_POST['atualizar_senha']) &&
                    isset($_POST['atualizar_adm']) &&
                    isset($_POST['id'])
                ) {
                    $usermodel->atualizaruser(
                        $_POST['id'],
                        $_POST['atualizar_nome'],
                        $_POST['atualizar_email'],
                        $_POST['atualizar_senha'],
                        $_POST['atualizar_adm']
                    );
                    unset($_POST);
                    echo "<script>alert('Usuário atualizado com sucesso!');
                    window.location.replace('adm.php');</script>";
                }


                ?>


            </div>


            <!-- atualizar dados -->
            <h2>Atualizar Dados do usuário</h2>
            <form class="linha" method="post">
                <div class="form-ingressos">
                    <select name="id">
                        <?php foreach ($users as $user) : ?>
                            <option value="<?php echo $user['id']; ?>">
                                <?php echo $user['nome']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" name="atualizar_nome" placeholder="Nome">
                    <input type="text" name="atualizar_email" placeholder="Email">
                    <input type="password" name="atualizar_senha" placeholder="Senha">
                    <input type="text" name="atualizar_adm" placeholder="ADM">
                    <div class="botao1"><button type="submit">Atualizar</button></div>
                </div>
            </form>

            <h2>Excluir Usuario</h2>
   <form method="post">
       <select name="excluir_id">
           <?php foreach ($users as $user): ?>
               <option value="<?php echo $user['id']; ?>">
                   <?php echo $user['id']; ?>
               </option>
           <?php endforeach; ?>
       </select>
       <button type="submit">Excluir Esporte</button>
   </form>
</form>




            <h1 class="center">Equipes</h1>

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

                <?php
                //Cadastrar equipe
                if (
                    isset($_POST['nome_eqp']) &&
                    isset($_POST['cor']) &&
                    isset($_POST['qnt_membros'])
                ) {
                    $equipemodel->criarequipe(
                        $_POST['nome_eqp'],
                        $_POST['cor'],
                        $_POST['qnt_membros']
                    );

                    unset($_POST);
                    echo "<script>alert('Equipe cadastrada com sucesso!');
            window.location.replace('adm.php');</script>";
                }
                ?>

                <!-- Cadastrar dados -->
                <h2>Cadastrar Dados da equipe</h2>
                <form class="linha" method="post">
                    <div class="form-ingressos">
                        <input type="text" name="nome_eqp" placeholder="Nome">
                        <input type="text" name="cor" placeholder="Cor">
                        <input type="text" name="qnt_membros" placeholder="Quantia de membros">
                        <div class="botao1"><button type="submit">Cadastrar</button></div>
                    </div>
                </form>


                <?php


                //Atualizar equipe
                if (
                    isset($_POST['atualizar_nome_eqp']) &&
                    isset($_POST['atualizar_cor']) &&
                    isset($_POST['atualizar_qnt_membros']) &&
                    isset($_POST['id_equipe'])
                ) {
                    $equipemodel->atualizarequipe(
                        $_POST['id_equipe'],
                        $_POST['atualizar_nome_eqp'],
                        $_POST['atualizar_cor'],
                        $_POST['atualizar_qnt_membros']
                    );
                    unset($_POST);
                    echo "<script>alert('Equipe atualizada com sucesso!');
            window.location.replace('adm.php');</script>";
                }


                // Exibir equipes - removido o trecho redundante

                ?>


                <!-- atualizar dados -->

                <h2>Atualizar Dados da equipe</h2>
                <form class="linha" method="post">
                    <div class="form-ingressos">
                        <select name="id_equipe">
                            <?php foreach ($equipes as $equipe) : ?>
                                <option value="<?php echo $equipe['id_equipe']; ?>">
                                    <?php echo $equipe['nome_eqp']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="inp"><input type="text" name="atualizar_nome_eqp" placeholder="Nome"></div>
                        <div class="inp"><input type="text" name="atualizar_cor" placeholder="Cor"></div>
                        <div class="inp"><input type="text" name="atualizar_qnt_membros" placeholder="Quantidade de membros"></div>
                        <div class="inp"><button class="botao1" type="submit">Atualizar</button></div>
                    </div>
                </form>


                <h1 class="center">Participantes</h1>

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

                    <?php
                    //Cadastrar usuário
                    if (
                        isset($_POST['nome_pessoa']) &&
                        isset($_POST['idade_pessoa']) &&
                        isset($_POST['cor_equipe'])
                    ) {
                        $pessoamodel->criarpessoa(
                            $_POST['nome_pessoa'],
                            $_POST['idade_pessoa'],
                            $_POST['cor_equipe']
                        );

                        unset($_POST);
                        echo "<script>alert('Participante cadastrado com sucesso!');
    window.location.replace('adm.php');</script>";
                    }
                    ?>

                    <!-- Cadastrar dados -->
                    <h2>Cadastrar Dados do participante</h2>
                    <form class="linha" method="post">
                        <div class="form-ingressos">
                            <input type="text" name="nome_pessoa" placeholder="Nome">
                            <input type="text" name="idade_pessoa" placeholder="Idade">
                            <input type="text" name="cor_equipe" placeholder="Cor da equipe">
                            <div class="botao1"><button type="submit">Cadastrar</button></div>
                        </div>
                    </form>


                    <?php
                    //Atualizar participante 
                    if (
                        isset($_POST['atualizar_nome_pessoa']) &&
                        isset($_POST['atualizar_idade_pessoa']) &&
                        isset($_POST['atualizar_cor_equipe']) &&
                        isset($_POST['id_pessoa'])
                    ) {
                        $pessoamodel->atualizarpessoa(
                            $_POST['id_pessoa'],
                            $_POST['atualizar_nome_pessoa'],
                            $_POST['atualizar_idade_pessoa'],
                            $_POST['atualizar_cor_equipe']
                        );
                        unset($_POST);
                        echo "<script>alert('Participante atualizado com sucesso!');
    window.location.replace('adm.php');</script>";
                    }


                    // Exibir participante - removido o trecho redundante
                    ?>


                </div>


                <!-- atualizar dados -->
                <h2>Atualizar Dados do participante</h2>
                <form class="linha" method="post">
                    <div class="form-ingressos">
                        <select name="id_pessoa">
                            <?php foreach ($pessoas as $pessoa) : ?>
                                <option value="<?php echo $pessoa['id_pessoa']; ?>">
                                    <?php echo $pessoa['nome_pessoa']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" name="atualizar_nome_pessoa" placeholder="Nome">
                        <input type="text" name="atualizar_idade_pessoa" placeholder="Idade">
                        <input type="text" name="atualizar_cor_equipe" placeholder="Cor da equipe">
                        <div class="botao1"><button type="submit">Atualizar</button></div>
                    </div>
                </form>




                <h2 class="center">LISTA DE BRINCADEIRAS</h2>
                <?php
                require_once 'db/config.php';
                require_once 'app/controller/brincadeiracontroller.php';
                require_once 'app/model/brincadeiramodel.php';

                // Criar uma instância do modelo brincadeiramodel
                $brincadeiramodel = new brincadeiramodel($pdo);

                // Criar uma instância do controlador brincadeiraController e passar o modelo
                $brincadeiraController = new brincadeiraController($brincadeiramodel);

                $brincadeiras = $brincadeiramodel->listarbrincadeiras();
                ?>

                <div class='rankdiv'>
                    <table>
                        <thead>
                            <tr>
                                <th class="thrank">nome:
                            </tr>


                        </thead>
                        <?php foreach ($brincadeiras as $brincadeira) : ?>
                            <tbody>
                                <tr>
                                    <th class="thrank"><?php echo $brincadeira['nome_brincadeira']; ?></th>
                                </tr>


                            <?php endforeach; ?>
                    </table>
                </div>

                <?php
                //Cadastrar usuário
                if (
                    isset($_POST['nome_brincadeira']) 
                ) {
                    $brincadeiramodel->criarbrincadeira(
                        $_POST['nome_brincadeira']
                    );

                    unset($_POST);
                    echo "<script>alert('brincadeira cadastrado com sucesso!');
    window.location.replace('adm.php');</script>";
                }
                ?>

                <!-- Cadastrar dados -->
                <h2>Cadastrar Dados do brincadeira</h2>
                <form class="linha" method="post">
                    <div class="form-ingressos">
                        <input type="text" name="nome_brincadeira" placeholder="Nome">
                        <div class="botao1"><button type="submit">Cadastrar</button></div>
                    </div>
                </form>


                <?php
                //Atualizar brincadeira
                if (
                    isset($_POST['atualizar_nome_brincadeira']) &&
                    isset($_POST['id_brincadeira'])
                ) {
                    $brincadeiramodel->atualizarbrincadeira(
                        $_POST['id_brincadeira'],
                        $_POST['atualizar_nome_brincadeira'],
                    );
                    unset($_POST);
                    echo "<script>alert('brincadeira atualizado com sucesso!');
    window.location.replace('adm.php');</script>";
                }


                // Exibir brincadeira - removido o trecho redundante
                ?>


            </div>


            <!-- atualizar dados -->
            <h2>Atualizar Dados do Brincadeira</h2>
            <form class="linha" method="post">
                <div class="form-ingressos">
                    <select name="id_brincadeira">
                        <?php foreach ($brincadeiras as $brincadeira) : ?>
                            <option value="<?php echo $brincadeira['id_brincadeira']; ?>">
                                <?php echo $brincadeira['nome_brincadeira']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" name="atualizar_nome_brincadeira" placeholder="Nome">
                    <div class="botao1"><button type="submit">Atualizar</button></div>
                </div>
            </form>


    </div>


    <button class="botao1"><a href="index.php">VOLTAR PARA A PÁGINA INICIAL</a></button>
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
</body>

</html>