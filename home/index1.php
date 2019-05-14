<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js">
    <link rel='stylesheet' type='text/css' media='screen' href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/home.css'>
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <title>Mercado Grande - inicio</title>
</head>
<body>
    <div class="container-fluid header">
        <div class="row">
            <div class="col-sm logo">
                <a href="">
                    <img src="" alt="logo" />
                </a>
            </div>
            <div class="col-sm">
                <form class="form-signin" action="">
                    <input type="text" class="form-control" placeholder="Tu próximo producto te espera" autofocus>
                </form>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="offset-md-4 col">
                        <img src="../images/cart.png" alt="Carrito de compra">
                    </div>
                    <div class="col">
                        <!-- colocar el avatar con respecto al género  -->
                        <div class="dropdown">
                            <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button> -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../images/man.png" alt="perfil">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid body">
        <div class="row">
            <div class="col-sm-2">
                <div class="col">
                    <p>
                        <a class="" data-toggle="collapse" href="#categoriaUno" role="button" aria-expanded="false" aria-controls="categoriaUno">
                            Categoría uno
                        </a>
                    </p>
                    <div class="collapse" id="categoriaUno">
                        <ul>
                            <li>subcategoría uno</li>
                            <li>subcategoría dos</li>
                            <li>subcategoría tres</li>
                            <li>subcategoría cuatro</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <p>
                        <a class="" data-toggle="collapse" href="#categoriaDos" role="button" aria-expanded="false" aria-controls="categoriaDos">
                            Categoría dos
                        </a>
                    </p>
                    <div class="collapse" id="categoriaDos">
                        <ul>
                            <li>subcategoría uno</li>
                            <li>subcategoría dos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <a class="articulo" href="#articulo">
                        <div class="card" style="width: 18rem;">
                            <img src="../images/articulo1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Artículo Uno</h5>
                                <p class="card-text">El mejor artículo para la compra</p>
                            </div>
                        </div>
                    </a>
                    <a class="articulo" href="#articulo">
                        <div class="card" style="width: 18rem;">
                            <img src="../images/articulo2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Artículo Uno</h5>
                                <p class="card-text">El mejor artículo para la compra</p>
                            </div>
                        </div>
                    </a>
                    <a class="articulo" href="#articulo">
                        <div class="card" style="width: 18rem;">
                            <img src="../images/articulo2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Artículo Uno</h5>
                                <p class="card-text">El mejor artículo para la compra</p>
                            </div>
                        </div>
                    </a>
                    <a class="articulo" href="#articulo">
                        <div class="card" style="width: 18rem;">
                            <img src="../images/articulo2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Artículo Uno</h5>
                                <p class="card-text">El mejor artículo para la compra</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>