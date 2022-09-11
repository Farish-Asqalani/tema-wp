<!-- bagian footer dari website -->

<div class="ftb"></div>
<footer>
    <nav>
        <?php
        // wp_nav_menu() disini sama seperti yang ada diheader
        // bedanya ini khusus footer jadi terletak dibagian paling bawah website
        // $args = array('theme_location' => 'footer-menu');
        // wp_nav_menu($args);
        ?>
        Tema <a href="<?php home_url('name'); ?>"><?php echo bloginfo('name'); ?></a> By <a href="<?php get_author_posts_url(get_the_author_meta("ID")) ?>"><?php the_author(); ?></a>
    </nav>
    <!-- berguna untuk menampilkan nama, dan tanggal -->
    <!-- &copy: <?php //bloginfo('name'); echo " - ", date('Y') ?> -->
</footer>

    <!-- wp_footer() berfungsi untuk memberitahu kalau ini adalah footer -->
    <?php wp_footer(); ?>
</body>
</html>

