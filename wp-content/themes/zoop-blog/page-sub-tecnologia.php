<?php
/**
 * The template for displaying all single posts
 * 
 * Template name: Sub Tecnologia
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
	<?php include 'inc/menu-tecnologia.php'; ?>

	<div class="wrap white">

		<div class="headline-page">
			<div class="container">
				<div class="title sub">
					<p>Tecnologia/</p>
					<h1><?php the_title();?></h1>
				</div>
				<div class="description">
					<h2>Todas as novidades sobre o mundo dos serviços financeiros</h2>
					<p>Quer oferecer soluções ainda melhores aos seus parceiros e aumentar a sua receita? Reunimos aqui todas as tendências, inovações, notícias e regulamentações que você precisa saber sobre o mercado dos serviços financeiros que vão ajudar a alavancar o seu negócio.</p>
				</div>
			</div>
		</div><!-- headline -->
	
	</div><!-- wrap white -->

	<div class="wrap">

		<div class="section-page list-posts pdb-0">
			<div class="container">
				<div class="title-section">
					<h3 class="title">Últimos Artigos</h3>
				</div>
				<div class="grid masonry" data-columns>
					<div class="thumb-post">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-artigo.jpg" alt="">
							</a>
						</figure>
						<article>
							<span class="category">Pagamentos</span>
							<h2 class="title">Case iFood: Como construir a própria solução de pagamentos solução de pagamentos solução de pagamentos?</h2>
						</article>
					</div><!-- post -->
		
					<div class="thumb-post">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-artigo.jpg" alt="">
							</a>
						</figure>
						<article>
							<span class="category">Pagamentos</span>
							<h2 class="title">Case iFood: Como construir a própria solução de pagamentos?</h2>
						</article>
					</div><!-- post -->
		
					<div class="thumb-post">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-artigo.jpg" alt="">
							</a>
						</figure>
						<article>
							<span class="category">Pagamentos</span>
							<h2 class="title">Case iFood: Como construir a própria solução de pagamentos  solução de pagamentos?</h2>
						</article>
					</div><!-- post -->

					<div class="thumb-post">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-artigo.jpg" alt="">
							</a>
						</figure>
						<article>
							<span class="category">Pagamentos</span>
							<h2 class="title">Case iFood: Como construir a própria solução de pagamentos?</h2>
						</article>
					</div><!-- post -->
		
					<div class="thumb-post">
						<figure>
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-artigo.jpg" alt="">
							</a>
						</figure>
						<article>
							<span class="category">Pagamentos</span>
							<h2 class="title">Case iFood: Como construir a própria solução de pagamentos?</h2>
						</article>
					</div><!-- post -->
				</div>
				<div class="more-posts">
					Carregar mais
				</div>
			</div>
		</div><!-- list posts -->

		<?php if ( is_page(58) ) { 
		
		?>
 			<a href="" class="banner-vagas">
				<img src="<?php bloginfo('template_directory'); ?>/img/layout/banner-vagas.png" alt="">
			</a>

		<?php } ?>
<?php
get_footer();
