<div class="navbar">
    <div class="container">
        <div class="submenu-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">blog</a> 
            <span><a href="<?php echo esc_url( home_url( '/negocios' ) ); ?>">negócios</a></span>
        </div>
        <div class="menu-container">
            
            <?php 
                wp_nav_menu(array(
                    'container' => false,
                    'menu' => 'menu negocios'
                ));
            ?>
            
            <div class="menu-search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>