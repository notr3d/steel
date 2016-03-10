	<footer class="container-fluid page-footer">  
        <div class="info">
            <div class="container info__wrapper">
			<button class="scrollup"></button>
                <span class="info__item">
                    <a href="home">Home</a>
                </span>
                <span class="info__item">
                    <a href="about">About</a>
                </span>
                <span class="info__item">
                    <a href="products">Products</a>
                </span>
                <span class="info__item">
                    <a href="contacts">Contacts</a>
                </span>
            </div>                        
        </div>
        <div class="copy">
            <div class="container copy__wrapper">
                <div class="col-sm-2 copy__item copy__item--phone">8 (555) 555-55-55</div>
                <div class="col-sm-2 copy__item copy__item--link"><a href="#">mail@mail.com</a> </div>           
                <div class="col-sm-8 copy__item copy__item--text">© Lorem, All rights reserved.</div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/intense.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.slimscroll.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fullPage.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.js"></script>
    <script>
        window.onload = function() {
            var elements = document.querySelectorAll( '.intense' );
            Intense( elements );
        }
    </script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>