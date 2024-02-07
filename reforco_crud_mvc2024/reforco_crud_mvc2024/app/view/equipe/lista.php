<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Equipes</title>
</head>
<body>
    <h1>Lista de Equipes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cor</th>
            <th>Membros</th>
        </tr>

        <?php foreach ($equipes as $equipe): ?>
           
            <tr>
                <td><?php echo $equipe['id_equipe']; ?></td>
                <td><?php echo $equipe['nome_eqp']; ?></td>
                <td><?php echo $equipe['cor']; ?></td>
                <td><?php echo $equipe['qnt_membros']; ?></td>
            </tr>

            <?php endforeach; ?>
            
    </table>
</body>
</html>