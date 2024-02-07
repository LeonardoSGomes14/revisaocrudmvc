    <div class="no-view">
    <?php
    session_start();
    var_dump($_SESSION);
    if($_SESSION['permissao'] != 1) {
        header('Location: index.php');
    }
    ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Notícias</title>
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
    <link rel="stylesheet" href="CSS/cadastrar-not-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
        <div class="icone-l">
                <img id="user" src="fotos/user.png" alt="login">
                <p class="text-user">Login/Logout</p>
        </div>
        </a>

</header>
        <section>
        <h2>CADASTRAR NOTÍCIAS</h2>


        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conectar ao banco de dados (substitua com suas próprias informações)
        $pdo = new PDO("mysql:host=localhost;dbname=empresa8_vision", "root", "");

        // Definir o modo de erro do PDO para Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Obter dados do formulário
        $titulo = $_POST["titulo"];
        $conteudo = $_POST["conteudo"];
        $data = $_POST["data"];

        // Verificar se um arquivo de imagem foi enviado
        if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] === UPLOAD_ERR_OK) {
            $imagem_nome = $_FILES["imagem"]["name"];
            $imagem_temp = $_FILES["imagem"]["tmp_name"];
            $imagem_destino = "uploads/" . $imagem_nome; // Diretório onde a imagem será armazenada

            // Mover a imagem para o diretório de uploads
            move_uploaded_file($imagem_temp, $imagem_destino);
        } else {
            $imagem_destino = null; // Sem imagem
        }

        try {
            // Inserir a notícia no banco de dados
            $sql = "INSERT INTO noticias (titulo, conteudo, data, imagem) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$titulo, $conteudo, $data, $imagem_destino]);

            echo '<h1 class="echonews"> Notícia cadastrada com sucesso! </h1>';
        } catch (PDOException $e) {
            echo "Erro ao cadastrar a notícia: " . $e->getMessage();
        }
    }
    ?>


    <div class="cadastro-n">
    <form action="cadastrar_noticia.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label for="conteudo">Conteúdo:</label><br>
        <textarea name="conteudo" rows="4" required></textarea><br><br>

        <label for="data">Data:</label>
        <input type="date" name="data" required><br><br>

        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" accept="image/*" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    </div>
    </div>
    



    
<div class="divisao" id="sessao_not">
        <div class="texto-topo">
            ÚLTIMAS NOTÍCIAS
        </div>
        <div class="linha"></div>
    </div> 

    
    <?php
    // Conectar ao banco de dados (substitua com suas próprias informações)
    $pdo = new PDO("mysql:host=localhost;dbname=empresa8_vision", "root", "");

    // Definir o modo de erro do PDO para Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para obter as notícias
    $sql = "SELECT * FROM noticias ORDER BY data DESC";
    $stmt = $pdo->query($sql);
    $noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($noticias as $noticia) {
        echo '<div class="noticias">
            <div class="img-n">
                <img src="' . $noticia['imagem'] . '" alt="' . $noticia['titulo'] . '">
            </div>
            <div class="titulo-n">
                <h1>' . $noticia['titulo'] . '</h1>
                <h3>' . $noticia['conteudo'] . '</h3>
                <h6>Data: ' . $noticia['data'] . '</h6>
                <form method="post" action="excluir_noticia.php">
                    <input type="hidden" name="id" value="' . $noticia['id'] . '">
                    <input type="submit" value="Excluir">
                </form>
            </div>
        </div>';
    }
    
    ?>  
    </div>

    <button class="botao"><a class="bti" href="index.php">VOLTAR PARA A PÁGINA INICIAL</a></button>
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