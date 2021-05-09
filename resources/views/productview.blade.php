<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Cantinho Doce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>


<style>
    *,
    html,
    body {
        font-family: 'Poppins', sans-serif;

    }

    body {
        overflow-x: hidden;
    }

    .nav-link.categ{
        color:#AC3333;
        font-size:20px;
        font-weight:bold;
    }

    .verMaisCateg{
        background-color:#E0E0E0;
        font-size:15px;
        font-weight:bold;
        border: solid 2px #E0E0E0;
        color:#4f4e4d;
        border-radius:5%;
    }



    .verMaisCateg:hover{
        background-color: white;
        color:#AC3333;
        border-color: #AC3333;

        
    }


    .search-container {
        margin: 0 auto;
    }

    .search-container input[type=text] {
        padding: 7px;
        margin-top: 8px;
        font-size: 15px;
        border: none;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        outline: none;
        width: 400px;
    }

    .search-container button {
        float: right;
        padding: 7px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background-color: #AC3333;
        color: white;
        font-size: 15px;
        border: none;
        cursor: pointer;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        outline: none;
    }

    .search-container button:hover {
        background: white;
        color: #AC3333;

    }

    .menu-item {
        border: 5px;
        border-color: #DF1F2F;
        outline-color: #DF1F2F;
        color: black;
    }

    .menu-item {

        border-color: black;
        outline-color: #DF1F2F;
        color: white;
        background-color: #AC3333;
    }

    .menu-item a {
        border: 5px;
        border-color: #DF1F2F;
        outline-color: #DF1F2F;
        color: white;

    }

    .border-3 {
        border-width: 0px 3px 3px 0px !important;
        border-color: white !important;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 5vw;
        color: white;
        font-family: 'Pacifico', cursive;

    }

    .center-down {
        position: absolute;
        top: 62%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2.5vw;
        color: white;
    }

    .section-heading {
        text-align: left;
        margin-bottom: 40px;
        border-bottom: 1px solid #eee;
    }

    .section-heading h2 {
        font-size: 28px;
        font-weight: 400;
        color: #1e1e1e;

    }

    /* Latest Produtcs */

    .latest-products {
        margin-top: 100px;
    }

    .section-heading a {
        float: right;
        margin-top: -35px;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;
        color: #f33f3f;
    }

    /* Services */

    .services {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        padding: 100px 0px;
    }

    .services .section-heading h2 {
        color: #fff;
    }

    .service-item {
        text-align: center;
        margin-bottom: 30px;

    }

    .service-item .down-content {
        background-color: #fff;
        padding: 40px 30px;
    }

    .service-item .down-content h4 {
        font-size: 17px;
        color: black;
        margin-bottom: 20px;
        text-align: justify;
    }


    .services-item-image {
        display: block;
    }
</style>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md navbar-expand-sm sticky-top py-0" style="background-color: #EFF4EE;">

        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="storage/images/logo.png" alt="logo" style="width: 50%;">

        </a>

        <!-- Caixa de pesquisa -->

        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="O que procura?" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>



        <!-- Login e Registo -->
        <ul class="navbar-nav justify-content-right">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Página Inicial</a>
                @else
                <a href="{{ route('login') }}" class="px-2 text-sm" style="color: black;"><b>Login</b></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-2 px-4 text-sm" style="color: black;"><b>Registo</a></b>
                @endif
                @endauth
            </div>
            @endif
        </ul>

    <!--MENU PRINCIPAL-->
    </nav>
    <div class="container-fluid text-center menu-item position-relative">
        <div class="row">
            <div class="col border border-3 py-2">
                <a href="/">Início</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="products" class="active">Produtos</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Sobre Nós</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Contacto</a>
            </div>
        </div>
    </div>

    <!-- DIV INICIAL DO PRODUTO-->
    <div class="row mt-5 ml-5 mr-5" style="border-bottom:2px solid #ededed;">
        <!--IMAGENS-->
        <div class="col-md-5">

            <!--IMAGEM GRANDE-->
            <div class="card mr-2">
                <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                <div class="card-body">
                    <h4 class="card-title">Produto</h4>
                    <p class="card-text" style="text-align: justify;">bla bla bla <br> bla bla bla<br> bla bla bla <br> bla bla bla <br> bla bla bla</p>
                </div>
            </div>

            <!-- 3 IMAGENS PEQUENAS-->
            <div class="row mt-3 mb-5">

                <!--Primeiro cartão-->
                <div class="col-md-4">
                    <div class="card mr-2">
                        <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Produto (2)</h4>
                            <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                </div>

                <!--Segundo cartão-->
                <div class="col-md-4">
                    <div class="card mr-2">
                        <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Produto (3)</h4>
                            <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                </div>

                <!--Terceiro cartão-->
                <div class="col-md-4">
                    <div class="card mr-2">
                        <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Produto (4)</h4>
                            <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--INFORMAÇÕES-->
        <div class="col-md-7">

            <!--NOME DO PRODUTO-->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5" style = "color:#4f4e4d;">Nome do Produto</h2>
                </div>
            </div>
            
            <!--PREÇO E NÚMERO DE UNIDADES-->
            <div class="row mr-5 mt-5" style="border-top: 2px solid #ededed; border-bottom: 2px solid #ededed ">
                <div class="col-md-6">
                    <p class="mt-5 mb-5"style="font-size:20px;">Preço <span>€</span></p>
                </div>
                <div class="col-md-6">
                    <input class="mt-5 mb-5"  type="number"> unidades</input>
                </div>
            </div>

            <!--TIPO DE PRODUTO E BOTÃO DE ADICIONAR AO CARRINHO-->
            <div class="row mt-3 mr-5">
                <div class="col-md-6">
                    <div class="dropdown mt-5">
                        <button class="btn dropdown-toggle verMaisCateg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detalhes</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tipo 1</a>
                            <a class="dropdown-item" href="#">Tipo 2</a>
                            <a class="dropdown-item" href="#">Tipo 3</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn verMaisCateg mt-5 mb-3" >Adicionar ao carrinho <i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div> 

    <!--PRODUTOS SIMILARES-->
    <div class="row" style="border-bottom: 2px solid #ededed;">

        <!--Titulo-->
        <div class="col-md-12">
            <h4 class="text-center mt-3" style= "font-weight:bold; color:#4f4e4d;">Produtos Similares</h4>
        </div>

        <!--3 Imagens dos Produtos Similares-->
        <div class="row mb-4 mt-4 ml-5 mr-5">
        
                                    <!--Primeiro cartão-->
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/berlim/spati.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Produtos Peso 1</h4>
                                                <p class="card-text">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                                            </div>
                                         </div>
                                    </div>

                                    <!--Segundo cartão-->
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/berlim/currywurst.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Produtos Peso 2</h4>
                                                <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Terceiro cartão-->
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Produtos Peso 3</h4>
                                                <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                            </div>
                                        </div>
                                    </div>
        </div>
    </div>

    <!--AVALIAÇÕES-->
    <div class="row">
        <div class="col-md-12">
        <h4 class=" mt-3 ml-5 " style= "font-weight:bold; color:#AC3333;">Avaliações</h4>

        </div>
    </div>
</body>
