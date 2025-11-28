const CardCarro = ({ image, modelo, preco, ano, detalhes }) => {
    return `
        <div class="card-carro">
            <img src="${image}" alt="${modelo}" class="imagem-card-carro"/> 
            <div class="info-card-carro"> 
                <h3 class="modelo-card-carro kanit-medium">${modelo}</h3> 
                <p class="detalhes-card-carro kanit-light">${detalhes}</p> 
                <div class="specs-card-carro"> 
                    <span class="ano-card-carro kanit-regular">Ano: ${ano}</span> 
                </div>
                <p class="preco-card-carro kanit-bold">${preco}</p> 
                <button class="botao-card-carro kanit-medium" data-carro="${modelo}">Ver Oferta</button> </div>
        </div>
    `;
};

export default CardCarro;