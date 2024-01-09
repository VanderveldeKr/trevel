<footer>
        <div class="container">
            <div class="footer-wrapper">
                <ul>
                    <li><?php echo carbon_get_theme_option( 'footer_hoz' ); ?></li>
                    <li><a href="<?php echo wp_get_attachment_url( carbon_get_theme_option('contact_politic') );?>" Target = "_blank"><?php echo carbon_get_theme_option( 'footer_politic' ); ?></a></li>
                    <li><?php echo carbon_get_theme_option( 'footer_prav' ); ?></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>