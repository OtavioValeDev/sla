<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Data de Adição</th>
            </tr>
            <?php foreach($produtos as $produto):?>
            <tr>
                <td><?=htmlspecialchars($produto['nome'])?></td>
                <td><?=htmlspecialchars(number_format($produto['preco'],2,',','.'))?></td>
                <td><?=htmlspecialchars($produto['quantidade'])?></td>
                <td><?=htmlspecialchars($produto['data_adicao'])?></td>
            </tr>
            <?php endforeach?>
        </table>
    </h1>
</body>
</html>