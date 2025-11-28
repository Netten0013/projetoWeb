import CardCarro from "/src/public/assets/js/components/cardComponent.js";

const infoCardCarros = [
    {
        image: "/src/public/assets/img/bmw.jpg",
        modelo: "BMW M4 Competition",
        preco: "R$ 950.000",
        ano: 2024,
        detalhes: "Motor TwinPower Turbo de 510cv. Cor Vermelho Vibrante, com teto em fibra de carbono."
    },
    {
        image: "/src/public/assets/img/mustang.png",
        modelo: "Mustang Hardtop",
        preco: "R$ 280.000",
        ano: 1967,
        detalhes: "Clássico americano restaurado com motor V8."
    },
    {
        image: "/src/public/assets/img/corvett.jpg",
        modelo: "Corvette Stingray C7",
        preco: "R$ 750.000",
        ano: 2019,
        detalhes: "Motor V8 6.2L. Visual agressivo em Preto Sólido."
    },
];

const docTag = document.querySelector("#cards-container");
const modal = document.getElementById('modal-carro');
const fecharModal = document.querySelector('.fechar-modal');

infoCardCarros.forEach(item => {
    docTag.innerHTML += CardCarro(item);
});

// ----------------------------
// FUNÇÃO ABRIR MODAL
// ----------------------------
function abrirModal(dadosCarro) {
    document.getElementById('modal-imagem').src = dadosCarro.image;
    document.getElementById('modal-modelo').textContent = dadosCarro.modelo;
    document.getElementById('modal-preco').textContent = dadosCarro.preco;
    document.getElementById('modal-ano').textContent = "Ano: " + dadosCarro.ano;
    document.getElementById('modal-detalhes').textContent = dadosCarro.detalhes;

    modal.classList.remove('modal-oculto');
    modal.classList.add('modal-visivel');
}

// ----------------------------
// FUNÇÃO FECHAR
// ----------------------------
function fechar() {
    modal.classList.remove('modal-visivel');
    modal.classList.add('modal-oculto');
}

// ----------------------------
// EVENTOS
// ----------------------------
document.addEventListener('click', (event) => {

    // Abrir modal
    if (event.target.closest('.botao-card-carro')) {
        const modeloClicado = event.target.closest('.botao-card-carro')
            .dataset.carro;

        const carroSelecionado = infoCardCarros.find(
            carro => carro.modelo === modeloClicado
        );

        if (carroSelecionado) abrirModal(carroSelecionado);
    }

    // Fechar no X
    if (event.target === fecharModal) {
        fechar();
    }

    // Fechar clicando fora
    if (event.target === modal) {
        fechar();
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector(".header");
    const scrollTrigger = 50; 

    function checkScroll() {
        if (window.scrollY >= scrollTrigger) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    }

    window.addEventListener("scroll", checkScroll);

    checkScroll();
});