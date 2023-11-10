window.addEventListener('load', function() {
    // Espera até que a página esteja completamente carregada
    let meuEmbed = document.getElementById('juxtapose-embed');
    console.log('está carregando o js');
    if (meuEmbed) {
        // Modifica o estilo do embed
        meuEmbed.style.backgroundColor = 'red';
    }
});
