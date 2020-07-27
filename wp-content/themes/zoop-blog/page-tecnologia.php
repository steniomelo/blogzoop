<?php
/**
 * The template for displaying all single posts
 * 
 * Template name: Tecnologia
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

	<div class="wrap">

		<div class="headline-page tec">
			<div class="container">
				<div class="title">
					<h1>blog.tecnologia(‘<span class="typewrite" data-period="2000" data-type='[ "Produtos", "Análises", "Gestão", "Programação", "Carreira", "Releases" ]'></span>’)</h1>
				</div>
				<div class="description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue hendrerit risus, semper sed at sollicitudin vitae tellus sit. Suspendisse suspendisse in ac eleifend id mi vulputate ut semper. Non viverra aliquam tempus morbi mi, volutpat.</p>
				</div>
			</div>
		</div><!-- headline -->

		<div class="container">
			<div class="featured-category">
				<article>
					<span class="category">Gestão</span>
					<a href=""><h1 class="title">Como escolher a melhor solução de conciliação bancária? 5 quesitos que não podem faltar!</h1></a>
					<p class="description">Como escolher um sistema de conciliação financeira seguro, o que não pode faltar em soluções assim e como essas ferramentas ajudam a garantir um bom fluxo de caixa é sobre isso que vamos conversar!</p>
                </article>
                <figure>
					<a href="">
						<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-destaque-tec.png" alt="">
					</a>
				</figure>
			</div><!-- Featured category -->
		</div><!-- featured category -->

		<div class="section-page list-posts white">
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
	
	</div><!-- wrap black -->

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
