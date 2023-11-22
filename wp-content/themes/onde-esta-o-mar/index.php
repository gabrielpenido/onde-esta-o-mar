<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage onde_esta_o_mar
 * @since onde_esta_o_mar 1.0
 */

get_header();
?>

<main id="site-content">

<div class="Hero" id="hero">
	<div class="section-hero">
		<h1 class="h1-section-hero">Onde está o mar?</h1>
		<p class=p-sectionHero>Das Ondas à Cidade: <br>
			A transformação do espaço através dos panoramas
		</p>
		<img class="seta-section-hero" src="/wp-content/uploads/2023/11/Gif-seta.gif" alt="">
	</div>
</div>


<div class="transform-espaco" id="transforming">
	<div class="transform-espaco-container">
		<h1 class="title-transform-espaco">
			Transformação do espaço
		</h1>
		<div class="transform-espaco-content">
			<div class="transform-text">
				<p class="p-transfom-text">
				Iniciamos a nossa jornada na história, em 1519, onde um navegador chamado Fernão de Magalhães ergueu uma pequena capela para se casar com uma indígena, chamada de Luzia. E então ela foi usada e criada para afirmar essa história de amor. Mas além disso, recebeu a imagem da Nossa Senhora dos Navegantes. <br><br>
				Já em 1751, dois proprietários de uma chácara cedem um terreno para a construção de uma pequena igreja à beira mar e a frente do Morro do Castelo, dando espaço para a Irmandade de Santa Luzia. <br><br>
				E com um tempo, a paisagem foi sendo transformada para se adaptar a uma determinada evolução, que previa o desmonte do Morro do Castelo, que possuía habitações e a criação de um aterro que dava fim a uma linda praia. Porém permanecendo a Igreja de Santa Luzia e a Santa Casa da Misericórdia. Com isso, a partir de 1924, tal igreja jamais terá a mesma vista que um dia já possuiu
				</p>
			</div>

			
			<div class="transform-gif">
				<img class="img-transform-gif" src="/wp-content/uploads/2023/11/Gif-do-aterro_finalmente.gif" alt="">
			</div>
		</div>
	</div>
</div>


<div class="compare-transform" >
	<div class="compare-transform-container">
		<div>
			<div class="text-compare-transform">
				<img class="aspas-compare-transform" src="/wp-content/uploads/2023/11/unnamed-file.png" alt="">
				<p class="p-compare-transform">
				Existe, com o tempo, e sempre haverá, uma dimensão de degradação e dispersão. Nenhuma coisa organizada, nenhum ser organizado pode escapar da degradação, desorganização, dispersão. Nenhum ser vivo pode escapar da morte. Perfumes evaporam, vinhos azedam, montanhas se achatam, flores murcham, coisas vivas e sóis voltam ao pó […].
				</p>
				<p class="p-autor-compare-transform">
				Edgar Morin, La nature de la nature, 1977
				</p>
			</div>
			<p class="reference-compare-transform reference-desktop">
				Demolição do Morro do Castelo; tomada da atual avenida Almirante Barroso,<br>
				Rio de Janeiro RJ - Acervo Instituto Moreira Salles [Wikimedia Commons]
			</p>
		</div>
		<div class="embed-compare-transform embed-compare-desktop">
			<iframe frameborder="0" class="juxtapose" width="543" height="304" src="https://cdn.knightlab.com/libs/juxtapose/latest/embed/index.html?uid=87a163d0-7cdb-11ee-b5be-6595d9b17862"></iframe>
		</div>

		<div class="embed-compare-transform embed-compare-mobile">
			<iframe frameborder="0" class="juxtapose" width="100%" height="304" src="https://cdn.knightlab.com/libs/juxtapose/latest/embed/index.html?uid=87a163d0-7cdb-11ee-b5be-6595d9b17862"></iframe>
		</div>

		<p class="reference-compare-transform reference-mobile">
				Demolição do Morro do Castelo; tomada da atual avenida Almirante Barroso,<br>
				Rio de Janeiro RJ - Acervo Instituto Moreira Salles [Wikimedia Commons]
			</p>
	</div>
</div>

<div class="explore" id="tour" >
	<div class="explore-container">
		<p class="title-explore-container">
			Explore <br> o passado e o presente
		</p>
		<p class="text-explore-container">
			E agora, você terá a oportunidade de explorar e visitar essas paisagens que existiram nessa mesma região. Inclusive, onde foi a antiga <strong>Praia de Santa Luzia</strong> até a agitada <strong>Rua de Santa Luzia</strong>, nos dias de hoje.
		</p>

		<p class="cta-explore-container">
			Clique nos tempos abaixo e explore.
		</p>

		<div class="cards-explore-container">
			<!-- Estrutura do card 1 -->
			<div class="card">
				<div class="img-card-explore" style="background-image: url('http://onde-esta-o-mar.local/wp-content/uploads/2023/11/Card-1-1.png')">
					<div class="content-card-explore">
						<p class="date-card-explore">1866</p>
						<p class="text-card-explore">
							Inicialmente era um local litorâneo, que recebeu banhistas e navegadores, com um belo entorno montanhoso.
						</p>
						<div class="btn-card-explore" data-modal="modal1">
							<i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i>
						</div>
					</div>
				</div>
			</div>

			<!-- Estrutura do modal 1 -->
			<div class="modal" id="modal1">
				<div class="modal-content">
					<span class="close">&times;</span>
					<iframe width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7XX39?logo=1&info=1&fs=1&vr=0&sd=1&thumbs=1&inst=pt"></iframe>
				</div>
			</div>

			<div class="card">
				<div class="img-card-explore" style="margin-left: 20px; margin-right: 20px; background-image: url('http://onde-esta-o-mar.local/wp-content/uploads/2023/11/Card-2-1.png')">
					<div class="content-card-explore">
						<p class="date-card-explore">1921</p>
						<p class="text-card-explore">
							As mudanças começaram a surgir, como a criação da rua, o desmonte dos morros e o aterro parcial da praia.
						</p>
						<div class="btn-card-explore" data-modal="modal2">
							<i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i>
						</div>
					</div>
				</div>
			</div>

			<!-- Estrutura do modal 2 -->
			<div class="modal" id="modal2">
				<div class="modal-content">
					<span class="close">&times;</span>
					<iframe width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7XX37?logo=1&info=1&fs=1&vr=0&sd=1&thumbs=1&inst=pt"></iframe>
				</div>
			</div>


			<div class="card">
				<div class="img-card-explore" style="background-image: url('http://onde-esta-o-mar.local/wp-content/uploads/2023/11/Card-3-1.png')">
					<div class="content-card-explore">
						<p class="date-card-explore">2023</p>
						<p class="text-card-explore"> 
							No tempo atual, observamos uma via totalmente urbanizada, sem qualquer sombra de uma paisagem paradisíaca já vista anteriormente.
						</p>
						<div class="btn-card-explore" data-modal=modal3>
							<i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i>
						</div>
					</div>
				</div>
			</div>


			<!-- Estrutura do modal 3 -->
			<div class="modal" id="modal3">
				<div class="modal-content">
					<span class="close">&times;</span>
					<iframe width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7XX3q?logo=1&info=1&fs=1&vr=0&sd=1&thumbs=1&inst=pt"></iframe>
				</div>
			</div>

		</div>
	</div>
</div>

</main><!-- #site-content -->

<?php
get_footer();
