<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Brincadeiras</title>
</head>
<body>
    <h1>Lista de Brincadeiras</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>

        <?php foreach ($brincadeiras as $brincadeira): ?>
           
            <tr>
                <td><?php echo $brincadeira['id_brincadeira']; ?></td>
                <td><?php echo $brincadeira['nome_brincadeira']; ?></td>
            </tr>

            <?php endforeach; ?>
            
    </table>
</body>
</html>