<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Onde esta o mar
 * @since onde-esta-o-mar 1.0
 */

?>

<footer>

	<div class="footer" id="sobre">
		<div class="footer-container">
			<div class="img-footer-container">
				<img class="img-block-footer" src="http://onde-esta-o-mar.local/wp-content/uploads/2023/11/20231101_114834-2-1.png" alt="">
			</div>

			<div class="text-footer-container">
				<div style="display: grid; grid-template-columns: 33% 33% 33%; justify-content: center; justify-items: center;">
					<div style="width: 128px;">
						<p class="name-footer-container">
							jhenifer penido
						</p>
						<p class="text-footer-container">
							Sou estudante de Arquitetura e Urbanismo, na FAU UFRJ, com muita criatividade e desejo em compartilhar o conhecimento acadêmico por meio das mídias digitais. Com isso, auxiliei no conteúdo e desenvolvimento criativo do projeto para que ele fosse interessante até o fim.
						</p>
					</div>
					<div style="width: 128px;">
						<p class="name-footer-container">
							Brígida bastos 
						</p>
						<p class="text-footer-container">
							Sou estudante de Arquitetura e Urbanismo na FAU UFRJ, com ênfase na criação de produtos que proporcionem uma boa experiência.  Fui responsável por desenvolver o design visual e a funcionalidade do site, com o objetivo de proporcionar uma experiência de alta qualidade.
						</p>
					</div>
					<div style="width: 128px;">
						<p class="name-footer-container">
							Luis victor
						</p>
						<p class="text-footer-container">
							Sou estudante de Arquitetura e Urbanismo, na FAU UFRJ, Com Habilidades em modelagem e representação 3D.  Fui responsável pelo desenvolvimento dos panoramas dos tempos passados para que você pudesse ter uma experiência de imersão em uma paisagem rica em conhecimentos da história do rio, fruto de diversas colagens temporais.
						</p>
					</div>
				</div>

			
			</div>
		</div>

		<div class="footer-underline"></div>

		<div class="footer-copy-container">
			<div>
				<p class="footer-autor-project">
					Projeto desenvolvido no laboratório Narrativas Visuais 2023.2, administrado pelo Laboratório de Análise Urbana e Representação Digital - Programa de Pós-Graduação em Urbanismo – Faculdade de Arquitetura e Urbanismo – Universidade Federal do Rio de Janeiro.
				</p>
			</div>
			<div class="footer-logo-fau">
				<img src="http://onde-esta-o-mar.local/wp-content/uploads/2023/11/cropped-Laurd_simples_cor-amarelo-3.png" alt="" class="footer-img-fau">
				<img src="http://onde-esta-o-mar.local/wp-content/uploads/2023/11/prourb-3.png" alt="" class="footer-img-fau">
				<img src="http://onde-esta-o-mar.local/wp-content/uploads/2023/11/FAU_logotipo_CMYK_sintese-300x126-4.png" alt="" class="footer-img-fau">
				<img src="http://onde-esta-o-mar.local/wp-content/uploads/2023/11/marca-ufrj-horizontal-completa-positiva-3.png" alt="" class="footer-img-fau">
			</div>
		</div>

		<div style="margin:0;" class="footer-underline"></div>


		<div class="footer-develop-container">
			<div>
				<p class="footer-dev-project">
					Desenvolvido por <a style="color: #FFF; text-decoration: none;" href="https://www.linkedin.com/in/gabriel-penido-60599b179/"> Gabriel Penido </a>
				</p>
			</div>
			<div>
				<p class="footer-copy-mar">
					© Copyright Onde está o mar. todos os direitos reservado		
				</p>
			</div>
		</div>

	</div>

	<!-- <div class="dropdown">
    <button onclick="toggleDropdown()" class="dropdown-button">Jhenifer Penido</button>
    <div id="dropdown-content" class="dropdown-content">
        <p class="name-footer-container">Jhenifer Penido</p>
        <p class="text-footer-container">
            Sou estudante de Arquitetura e Urbanismo, na FAU UFRJ, com muita criatividade e desejo em compartilhar o conhecimento acadêmico por meio das mídias digitais. Com isso, auxiliei no conteúdo e desenvolvimento criativo do projeto para que ele fosse interessante até o fim.
        </p>
    </div>
</div> -->

<style>
	.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 10px;
    z-index: 1;
	color: white;
}

.dropdown-button {
    background-color: black;
    border: none;
    cursor: pointer;
	color: white;
}

.dropdown-button:focus {
    outline: none;
}
</style>

<script>


function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdown-content");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }
}



document.addEventListener('DOMContentLoaded', function() {
    const imagens = document.querySelectorAll('.img-card-explore');

    // Lista de caminhos das novas imagens (uma para cada imagem original)
    const novasImagens = [
        'http://onde-esta-o-mar.local/wp-content/uploads/2023/11/Card-1.png',
        'http://onde-esta-o-mar.local/wp-content/uploads/2023/11/Card-2.png',
        'http://onde-esta-o-mar.local/wp-content/uploads/2023/11/Card-3.png'
    ];

    // Lista de caminhos das imagens originais
    const imagensOriginais = Array.from(imagens).map(imagem => imagem.src);

    // Adicionar evento para cada imagem
    imagens.forEach(function(imagem, index) {
        // Salvar o tamanho original da imagem
        const tamanhoOriginal = imagem.getBoundingClientRect();

        // Adicionar evento quando passar o mouse sobre a imagem
        imagem.addEventListener('mouseover', function() {
            imagem.src = novasImagens[index]; // Trocar para a nova imagem associada
            imagem.style.transition = 'transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out'; // Transições suaves
            imagem.style.transform = `scale(1.1)`; // Aumentar a imagem quando o mouse passar sobre ela
            imagem.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.3)'; // Adicionar sombra na imagem
        });

        // Adicionar evento quando o mouse sair da imagem
        imagem.addEventListener('mouseout', function() {
            imagem.src = imagensOriginais[index]; // Retornar para a imagem original
            imagem.style.transition = 'transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out'; // Transições suaves
            imagem.style.transform = 'scale(1)'; // Redefinir o tamanho da imagem quando o mouse sair dela
            imagem.style.boxShadow = 'none'; // Remover a sombra da imagem
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.link-menu a');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            

            // Remover a classe 'pink' de todos os links
            links.forEach(function(item) {
                item.classList.remove('pink');
            });

            // Adicionar a classe 'pink' apenas ao link clicado
            link.classList.add('pink');
        });
    });
});



</script>

<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

</footer>

<?php wp_footer(); ?>
<script defer src="script.js"></script>
	</body>
</html>
