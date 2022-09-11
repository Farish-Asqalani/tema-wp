<!-- content merupakan isi dari content ketika postingan atau page diklik maka user akan terdirect ke halaman ini -->

<div class="container">
<main>
    <div class="isi">


<?php 
// if (have_posts()):
    //have_post()
        // while (have_posts()): the_post(); ?>
    <!--//the_post() berfungsi untuk mencek content apakah ada atau tidak-->

    <!--//the_title() berfungsi untuk mengeluarkan judul-->
    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
    <!--//the_content berfungsi untuk isi dari kontent page-->
    <p><?php //the_content();?></p>
    <p>
        <?= get_the_excerpt(); ?><a href="<?php the_permalink() ?>" class="baca"> Baca</a>        
    </p>
    <p class="info-meta">
        <span class="author"><a href="<?= get_author_posts_url(get_the_author_meta("ID")) ?>"><?php the_author(); ?></a></span>
        <?php echo " ", the_time( 'F j, Y' ); ?> at <?php the_time('g:i a'); ?>
    </p>
</div>
</main>
</div>


<!--get_footer() berfungsi untuk mengambil elemen didalam footer-->
<?php //get_footer(); ?>
