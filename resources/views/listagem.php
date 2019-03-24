<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <h1>Listagem de Produtos</h1>

        <table class="table table-striped table-bordered table-hover">
            <tr>

                <td>Nome</td>
                <td>Valor</td>
                <td>Descrição</td>
                <td>Quantidade</td>
                <td>Ações</td>

            </tr>

            <?php foreach ($produtos as $p): ?>

            <tr>

                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
                <td><a href="/produtos/mostra?id=<?= $p->id ?>"><i class="fas fa-binoculars"></i></a></td>

            </tr>

            <?php endforeach ?>

        </table>

    </div>

</body>
</html>