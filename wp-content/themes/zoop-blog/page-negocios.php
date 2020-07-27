<?php
/**
 * The template for displaying all single posts
 * 
 * Template name: Negócios
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<?php include 'inc/menu-negocios.php'; ?>

	<div class="wrap white">

		<div class="headline-page">
			<div class="container">
				<div class="title">
					<p>Artigos sobre</p>
					<h1>Negócios</h1>
				</div>
				<div class="description">
					<h2>Todas as novidades sobre o mundo dos serviços financeiros</h2>
					<p>Quer oferecer soluções ainda melhores aos seus parceiros e aumentar a sua receita? Reunimos aqui todas as tendências, inovações, notícias e regulamentações que você precisa saber sobre o mercado dos serviços financeiros que vão ajudar a alavancar o seu negócio.</p>
				</div>
			</div>
		</div><!-- headline -->

		<div class="container">
			<div class="featured-category">
				<figure>
					<a href="">
						<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-category.jpg" alt="">
					</a>
				</figure>
				<article>
					<span class="category">Pagamentos</span>
					<a href=""><h1 class="title">Como escolher a melhor solução de conciliação bancária? 5 quesitos que não podem faltar!</h1></a>
					<p class="description">Como escolher um sistema de conciliação financeira seguro, o que não pode faltar em soluções assim e como essas ferramentas ajudam a garantir um bom fluxo de caixa é sobre isso que vamos conversar!</p>
				</article>
			</div><!-- Featured category -->
		</div><!-- featured category -->

		<div class="section-page list-posts">
			<div class="container">
				<div class="title-section">
					<h3 class="title">Artigos mais lidos</h3>
					<a href="#" class="more">Ver todos</a>
				</div>
				<div class="grid">
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
			</div>
		</div><!-- list posts -->

		<div class="featured-podcast">

		</div><!-- podcast illustration -->
	
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

<?php
get_footer();
