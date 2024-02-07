// No arquivo "script.js"
const imagensClicaveis = document.querySelectorAll('.imagem-clicavel');
const modal = document.getElementById('modal');
const imagemExpandida = document.getElementById('imagemExpandida');
const fecharModal = document.getElementById('fecharModal');

imagensClicaveis.forEach((imagem) => {
    imagem.addEventListener('click', (event) => {
        event.preventDefault();
        const imagemSrc = imagem.getAttribute('data-image');
        imagemExpandida.src = imagemSrc;
        modal.style.display = 'flex';
    });
});

fecharModal.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});
