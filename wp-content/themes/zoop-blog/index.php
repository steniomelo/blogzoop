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
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div class="navbar">
    <div class="container">
        <div class="submenu-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">blog</a> 
            <span><?php wp_title('', true); ?></span>
        </div>
        <div class="menu-container">

            <ul class="menu">
                <li><a href="">Mais lidos</a></li>
                <li><a href="">Mais recentes</a></li>
                <li><a href="<?php echo esc_url( home_url( '/negocios' ) ); ?>">Negócios</a></li>
                <li><a href="<?php echo esc_url( home_url( '/tecnologia' ) ); ?>">Tecnologia</a></li>
            </ul>
            
            <div class="menu-search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
	<div class="container">
		<div class="featured-content">
			<article>
				<span class="category">Zoop</span>
				<a href=""><h1 class="title">Nossas iniciativas para combater a Covid-19</h1></a>
				<p class="description">Neste momento de solidariedade, autocuidado e cuidado com o próximo, a Zoop separou suas ações em três vertentes: clientes, sociedade e Zoopers. Confira nossas iniciativas na íntegra.</p>
			</article>
			<figure>
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-destaque.jpg" alt="">
				</a>
			</figure>
		</div><!-- Featured content -->
	</div>

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

	<div class="section-page white pdb-0">
		<div class="container pdlr-10 list-categories">
			<div class="title-section">
				<h3 class="title">Artigos mais lidos</h3>
			</div>

			<div class="grid">
				<div class="categories">
					<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-neg.png" alt="">
					<h3 class="title">negócios</h3>
					<div class="content-categories">
						<?php 
							wp_nav_menu(array(
								'container' => false,
								'menu' => 'menu negocios'
							));
						?>
					</div>
				</div>

				<div class="categories">
					<img src="<?php bloginfo('template_directory'); ?>/img/layout/img-tec.png" alt="">
					<h3 class="title">tecnologia</h3>
					<div class="content-categories tec">
						<?php 
							wp_nav_menu(array(
								'container' => false,
								'menu' => 'menu tecnologia'
							));
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container w-auto">
			<div class="call-to-action">
				<img src="<?php bloginfo('template_directory'); ?>/img/layout/ilustra.jpg" alt="">
				<div class="description">
					<p>Descubra o que a Zoop pode fazer para alavancar seu negócio!</p>
					<a href="#">Fale com a gente</a>
				</div>
			</div>
		</div>
	</div><!-- categories -->

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
