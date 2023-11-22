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

const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);


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

    imagens.forEach(function(imagem) {
        const arrowIcon = imagem.querySelector('i.fa-arrow-up');

        imagem.addEventListener('mouseover', function(event) {
            const currentImage = event.currentTarget;
            const newImageSrc = currentImage.getAttribute('data-new-image');

            currentImage.src = newImageSrc;
            currentImage.style.transition = 'transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out';
            currentImage.style.transform = `scale(1.1)`;
            currentImage.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.3)';

            if (arrowIcon) {
                arrowIcon.classList.remove('fa-arrow-up');
                arrowIcon.classList.add('fa-arrow-right');
            }
        });

        imagem.addEventListener('mouseout', function(event) {
            const currentImage = event.currentTarget;
            const originalImageSrc = currentImage.getAttribute('data-original-image');

            currentImage.src = originalImageSrc;
            currentImage.style.transition = 'transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out';
            currentImage.style.transform = 'scale(1)';
            currentImage.style.boxShadow = 'none';

            if (arrowIcon) {
                arrowIcon.classList.remove('fa-arrow-right');
                arrowIcon.classList.add('fa-arrow-up');
            }
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
