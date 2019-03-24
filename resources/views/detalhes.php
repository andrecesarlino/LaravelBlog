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
    <h1>Controle de Estoque</h1>

   <ul>
       <li>
           <b>Nome: </b> <?= $p->nome ?>
       </li>
       <li>
           <b>Valor: </b> <?= $p->valor ?>
       </li>
       <li>
           <b>Descrição: </b> <?= $p->descricao ?>
       </li>
       <li>
           <b>Quantidade: </b> <?= $p->quantidade ?>
       </li>
   </ul>

</div>

</body>
</html>