<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pessoas</title>
</head>
<body>
    <h1>Lista de pessoas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cor da equipe</th>
        </tr>

        <?php foreach ($pessoas as $pessoa): ?>
           
            <tr>
                <td><?php echo $pessoa['id_pessoa']; ?></td>
                <td><?php echo $pessoa['nome_pessoa']; ?></td>
                <td><?php echo $pessoa['idade']; ?></td>
                <td><?php echo $pessoa['cor_equipe']; ?></td>
            </tr>

            <?php endforeach; ?>
            
    </table>
</body>
</html>