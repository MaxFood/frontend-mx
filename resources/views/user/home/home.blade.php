<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/__reset.css">
    <link rel="stylesheet" href="css/home/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>MAX FOOD</title>

</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo-mx.png" alt="Logo" class="logo">
            <span>
                <img src="images/perfil.svg" alt="Perfil" class="perfil">
                <div><p onclick="window.location.href='/login'">login</p>/<p onclick="window.location.href='/cadastro'">cadastro</p></div>
            </span>
        </div>
        <nav>
            <input type="text" placeholder="">
        </nav>
    </header>
    <section class="inicial">
        <h4>SEJA BEM VINDO</h4>
        <div class="container">
            <div class="carousels">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="images/produtos/9.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/produtos/10.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/produtos/11.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/produtos/12.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="atalhos">
            <div class="texts">
                <p>RESTAURANTES</p>
                <p>MERCADO</p>
            </div>
            <div class="btns">
                <button><img src="images/produtos/hamburguer.png" alt=""></button>
                <button><img src="images/produtos/carrinho.png" alt=""></button>
            </div>
        </div>
    </section>
    <section class="produtos">
        <div class="container">
            <h4>JANTAR NA MESA</h4>
            <p>OPCOES ATE 20% DE DESCONTO</p>
            <div class="itens">
                
                <div id="carousel-aereos" class="carousel flex gap-4 overflow-x-auto scroll-smooth no-scrollbar px-12">
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/12.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>

                    </div>
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/9.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>
                        
                    </div>
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/10.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>
                        
                    </div>
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/11.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>
                        
                    </div>
                    
                </div>
                
            </div>
            <h4>FAMOSOS NO MAX</h4>
             <div class="itens">
                <div id="carousel-aereos" class="carousel flex gap-4 overflow-x-auto scroll-smooth no-scrollbar px-12">
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/12.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>

                    </div>
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/9.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>
                        
                    </div>
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/10.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>
                        
                    </div>
                    <div class="min-w-[150px] h-[150px] rounded-lg bg-cover bg-center item">
                        <img src="images/produtos/11.png" alt="">
                        <h6>TOP 1| GALINHAS FRITAS</h6>
                        <p>R$29,99</p>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="lojas">
        <div class="container">
            <h4>LOJAS</h4>
           
            @foreach ($lojas as $loja)
                <div class="loja">
                    <img src="https://res.cloudinary.com/dvgsipntf/image/upload/v1748972170/{{$loja->nome_loja}}" alt="">
                    <div class="text">
                        <h5>{{$loja->nome_loja}}</h5>
                        <p>5,0 <i class="bi bi-star-fill"></i></p>
                    </div>
                </div>
             @endforeach
        </div>
    </section>
    
    <div class="footer">
        <img src="images/home.svg" alt="Perfil" class="perfil">
        <img src="images/cart.svg" onclick="window.location.href='/cart'" alt="Perfil" class="perfil">
    </div>
    
</body>
</html>