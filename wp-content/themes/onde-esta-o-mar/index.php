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

<?php
// O seguinte código vai no seu arquivo index.php

// Defina os parâmetros da consulta para o tipo de postagem personalizado
$args = array(
    'post_type' => 'eventos',
    'posts_per_page' => -1, // Altere o número de postagens exibidas conforme necessário
);

// Execute a consulta
$query = new WP_Query($args);
?>
<div class="cabecalho-body">
	<img style="width: 399px; height: 113px;" src="https://calendario.onde_esta_o_mar.org.br/wp-content/uploads/2022/12/Logo-onde_esta_o_mar-T4_1-1-768x219.png" alt="Logo onde_esta_o_mar">
	<h1 class="title-regatas">
		Onde esta o mar?
	</h1>
	<h3 class="form-onde_esta_o_mar">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSeSm61BMf95KqE2pJ6SbngRIdgG2_5QsL8j_SlePZgME7bZXw/viewform">
			UFRJ
		</a>
	</h3>
</div>
<?php


// Verifique se há postagens
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Aqui você pode exibir o conteúdo de cada postagem
        ?>
		<div class="evento-title">
			<?php the_title(); // Título da postagem ?>
		</div><?php
		
        
		$events = get_field('events', get_the_ID());


		$hero 			         = get_field('hero', get_the_ID());
		$title_hero 		     = $hero['title'];
		?><h1><?php echo $title_hero ?></h1> <?php 
		$text_hero 		         = $hero['text'];
		$background_image_hero 	 = $hero['background_image'];

		$transformacao_do_espaco = get_field('transformacao_do_espaco');
		$title_espaco 			 = $transformacao_do_espaco['title'];
		$text_espaco 			 = $transformacao_do_espaco['text'];
		$gif_espaco     		 = $transformacao_do_espaco['gif'];


		$antes_e_depois 	     = get_field('antes_e_depois');
		$text_aed 				 = $antes_e_depois['text'];
		$author_aed 			 = $antes_e_depois['author'];

		$explore_o_passado 		 = get_field('explore_o_passado');
		$title_eop  			 = $explore_o_passado['title'];
		$text_eop 				 = $explore_o_passado['text'];
		$cta_eop 				 = $explore_o_passado['cta'];
		$card_eop 				 = $explore_o_passado['card'];
		$image_card_eop 		 = $card_eop['image'];
		$year_eop 				 = $card_eop['year'];
		$text_eop 				 = $card_eop['text'];
		$text_button_eop 		 = $card_eop['text_button'];

		$footer 				 = get_field('footer');
		$image_footer 			 = $footer['image'];
		$text_author_footer 	 = $footer['text_author'];
		$tile_footer 			 = $text_author_footer['title'];
		$text_footer 			 = $text_author_footer['text'];

		?>
		<h1>
			<?php echo $title?> 
		</h1>
		<?php

		if ( !empty($events)){
			foreach ($events as $key => $event) {

				if(!empty($event['mes'])){ ?>
					<div class="mes">
						<?php echo $event['mes']; ?>
					</div><?php
					
				}

				if (!empty($event['informacao'])){
						foreach ($event['informacao'] as $key => $info) { ?>
						<div class="informacao"> <?php
								?><div class="data"> <?php
									if(!empty($info['data'])){?>
										
											<?php echo $info['data']; 
									}
								?></div>

								<div class="modalidade"><?php
									if(!empty($info['modalidade'])){?>
											<?php echo  $info['modalidade'];
									}
								?></div>

								<div class="local"><?php
									if(!empty($info['local'])){?>
											<p class="local-p">
											<?php echo  $info['local'];
											?></p><?php
									}
								?></div><?php

							?></div><?php
						}
				
				}

			}

		}

    endwhile;
else :
    // Caso não haja postagens
    echo 'Não foram encontradas postagens.';
endif;

// Restaura os dados originais do post
wp_reset_postdata();
?>


</main><!-- #site-content -->

<?php
get_footer();
