<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/projetoWeb/src/public/assets/img/Bicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/projetoWeb/src/public/assets/css/main.css">
    <title>BimmerStore</title>
</head>
<body>
    <header class="header"> <div class="conteudo-nav"> <img src="/projetoWeb/src/public/assets/img/logobimmer.png" alt="">
                <nav class="barra-nav"> 
                <a href="#cards-container">Cars</a>
                <a href="#sobre-nos">About</a>
                <a href="#sobre-nos">Contact</a>
            </nav>
            </div>
            
    </header>
    <main>
        <div class="container-principal"> 
            <div class="container-hero"> <img src="/projetoWeb/src/public/assets/img/bmwhero.jpg" alt="" id="imgHero"></div> 
            
            <section class="secao-cards"> 
                <h2 class="titulo-secao">Nossos Destaques</h2> 
                <div id="cards-container"></div>
                
                </section>
            
            <section id="sobre-nos" class="secao-sobre"> 
                <h2 class="titulo-secao">Sobre a BimmerStore</h2> <div class="conteudo-sobre"> <p>
                        Na BimmerStore, somos apaixonados por alta performance e o legado da engenharia alemã. 
                        Nossa missão é conectar entusiastas aos veículos mais icônicos e exclusivos do mercado.
                        Trabalhamos apenas com carros de procedência verificada, garantindo a você a excelência e a adrenalina que só um verdadeiro carro esportivo pode oferecer.
                    </p>
                    <p style="font-weight: 500;">
                        Explore nossa coleção e encontre a máquina dos seus sonhos.
                    </p>
                </div>
            </section>

        </div>

    </main>
    <footer class="rodape">
    <div class="rodape-conteudo">
        <p>&copy; 2024 Nome da Sua Empresa. Todos os direitos reservados.</p>
        
        <div class="rodape-links">
            <a href="#">Privacidade</a>
            <span class="separador">|</span>
            <a href="#">Termos de Uso</a>
            <span class="separador">|</span>
            <a href="#">Contato</a>
        </div>
    </div>
</footer>

    <div id="modal-carro" class="modal-oculto">
        <div class="conteudo-modal">
            <span class="fechar-modal">&times;</span>
            <img id="modal-imagem" src="" alt="Carro em destaque" class="imagem-modal">
            <div class="modal-info">
                <h3 id="modal-modelo" class="titulo-modal kanit-bold"></h3>
                <p id="modal-preco" class="preco-modal kanit-extrabold"></p>
                <div class="modal-especificacoes">
                    <p class="kanit-regular">Ano: <span id="modal-ano"></span></p>
                </div>
                <p id="modal-detalhes" class="detalhes-modal kanit-light"></p>
                <button class="botao-modal-compra kanit-medium">Entre em contato</button>
            </div>
        </div>
    </div>
    
    <script type="module" src="/projetoWeb/src/public/assets/js/script.js"></script>
</body>
</html>