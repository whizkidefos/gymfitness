<footer class="site-footer container">

    <div class="footer-content">
        <?php
            $args = array(
                'theme_location' => 'main-menu',
                'container'      => 'nav',
                'container_class'=> 'footer-menu'
            );
            wp_nav_menu( $args );
        ?>
        <p class="copyright">All Rights Reserved. &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?></p>
    </div>

</footer>



<?php wp_footer(); ?>
</body>
</html>