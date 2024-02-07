<?php 
require_once 'db/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="faviconeightvision.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="CSS/register-style.css">

</head>
<body>

    <?php 
        if (isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            
            $stmt = $pdo->prepare('SELECT COUNT(*) FROM cadastro WHERE email = ? AND senha = ?');
            $stmt->execute([$email, $senha]);
            $count = $stmt->fetchColumn();
            
            if ($count > 0){
                $error = 'Esse perfil já foi cadastrado.';}
            else{
                $stmt = $pdo->prepare('INSERT INTO cadastro (nome, email, senha)
                VALUES (:nome, :email, :senha)');
                $stmt->execute(['nome' => $nome, 'email' => $email,
                'senha' => $senha]);

                if ($stmt->rowCount()){
                    echo '<span>Cadastro realizado com sucesso!</span>';
                }else{
                    echo '<span>Erro na realização de cadastro. Tente novamente mais tarde!</span>';
                }

            }header("Location: login.php");

            if (isset($error)) {
                echo '<span>' . $error . '</span>';
            }
        }
?>
<div class="cad-log">

<section id="container-cad">
    <div class="cad"><p>Cadastre-se</p></div>

    <div class="rs">
        <a href="www.whatsapp.com/"><img class="icone-lc" src="fotos/zap vetor.png"></a>
        <a href="www.instagram.com"><img class="icone-lc" src="fotos/insta vetor.png"></a>
        <a href="www.facebook.com"><img class="icone-lc" src="fotos/face vetor.png"></a>
        <a href="www.youtube.com"><img class="icone-lc" src="fotos/yt vetor.png"></a>
    </div> 

    <form method="post">   

        <div class="lab">
            <label for="nome">Nome completo:</label>
        </div>

        <div class="inp">
            <input type="text" name="nome" required><br>    
        </div>

        <div class="lab">
            <label for="email">Email:</label>
        </div>

        <div class="inp">
            <input type="email" name="email" required><br>  
        </div>

        <div class="lab">
            <label for="senha">Senha:</label>
        </div>

        <div class="inp">
            <input type="password" name="senha" required><br>
        </div>

        
            <button class="botao" type="submit" name="submit" value="cadastrar">Cadastrar-se</button>
        
    </form>
    
    <div class="pag-i">
                    <a href="index.php">
                        Voltar a Pagina Inicial
                    </a>
                </div>
    </section>
    <section id="container-log">
        <div class="text-log">
            <h1>Já possui uma conta em nosso site?</h1>
            <h3>Entre na sua conta e tenha acesso a todo o conteúdo sobre a InterClasse 2023 do SESI CE350</h3>
        </div>
            <a class="log-a" href="login.php">
                <div class="log">
                    <p class="log-p">
                        Entrar
                    </p>
                </div>
            </a>
    </section>
</div>
</body>
</html>

