<!-- single.php berguna untuk menampilkan seluruh content page -->
<!-- single.php akan dipanggil jika kita disalah satu kontent -->
<?php get_header(); ?>

<div class="container-isi">
<main class="isi">
<?php 
if (have_posts()):
//             have_post()
        while (have_posts()): the_post(); ?>
<!--        //the_post() berfungsi untuk mencek content apakah ada atau tidak-->

<!--        //the_title() berfungsi untuk mengeluarkan judul-->
    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
    <p class="info-meta">
        <?php echo the_time( 'F j, Y' ); ?> at <?php the_time('g:i a'); ?>
    </p>
<!--        //the_content berfungsi untuk isi dari kontent page-->
    <p><?php the_content();?></p>
<?php
        endwhile;
        endif;
?>
</main>
</div>

<div class="singlef">
    <div class="next">
        <?php the_post_navigation("next"); ?>
</div>
    <?php get_footer(); ?>
</div>

