<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Controle de estoque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>


<div class="container">
    <nav class="navbar navbar-default">

        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                    Estoque
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="{{action('ProdutoController@lista')}}">Listagem</a>
                    <a href="{{action('ProdutoController@novo')}}">Novo</a>
                </li>

            </ul>




        </div>

    </nav>

    @yield('conteudo')

    <footer class="footer">

        <p>Este é o footer</p>

    </footer>

</div>

</body>
</html>