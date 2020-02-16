<?php
$sub_menu = array(
    array(
        'titulo' => 'Ropa',
        'url' => '/ropa.html'
    ),
    array(
        'titulo' => 'Electronica',
        'url' => '/electronica.html'
    ),
    array(
        'titulo' => 'Higiene',
        'url' => '/higiene.html'
    ),
    array(
        'titulo' => 'Alimentos',
        'url' => '/alimentos.html'
    ),
    array(
        'titulo' => 'Otros',
        'url' => '/otros.html'
    )
);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Trabajo Práctico Lyracons</title>
</head>
<body>
<div class="container">
    <header class="row d-flex">
        <figure class="col-4">
            <img src="" alt="Logo"/>
        </figure>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link inicio-btn" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pantalones</a>
                        <a class="dropdown-item" href="#">Remeras</a>
                        <a class="dropdown-item" href="#">Camperas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled">PHP</a>
                        <?php
                        foreach ($sub_menu as $item) {
                            echo "<a class='dropdown-item' href='" . $item['url'] . "'>" . $item['titulo'] . "</a>";
                        }
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled">JavaScript</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nosotros-btn" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link compras-btn" href="#">Compras</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="row contenido">
        <aside class="col-3 barrita">
            <ul class="">
                <li class="barrita-placeholder"></li>
            </ul>
        </aside>
        <section class="col-9 listado">
            <ul class="d-flex justify-content-around flex-wrap text-center align-content-around">
                <li>Producto 1</li>
                <li>Producto 2</li>
                <li>Producto 3</li>
                <li>Producto 4</li>
                <li>Producto 5</li>
                <li>Producto 6</li>
            </ul>
        </section>
    </main>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>
