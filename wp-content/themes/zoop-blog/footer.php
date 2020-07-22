<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

    <div class="get-informed">
		<div class="container">
			<div class="text">
				<h4 class="title">Se informe com a Zoop!</h4>
				<p>Se inscreva na nossa newsletter e receba os nossos conteúdos.</p>
			</div>
			
			<div class="newsletter">
				<form action="">
					<input type="text" placeholder="Seu e-mail">
					<button>Enviar</button>
				</form>
			</div>
		</div>
	</div><!-- get informed -->

</div><!-- #page -->

<!-- scripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/lib/modernizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lib/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lib/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lib/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lib/maskedinput.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lib/salvattore.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
