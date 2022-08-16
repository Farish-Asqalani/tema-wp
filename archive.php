<!-- archive berguna untuk memberitahu user kalau postingan ini merupkana kategori apa dan siapa authornya -->

<!--get_header() berfungsi untuk mengambil elemen didalam header-->
<?php get_header(); ?>

<div class="container">
<main>
    <div class="isi">

<?php 
if (have_posts()): ?>

    <p class="penanda">
        <?php 
        // is_category() berfungsi untuk memberitahu ini ada dikategori apa
        if(is_category()){
            echo "Halaman Kategori"; single_cat_title();
            // is_author() berguna untuk memberitahu siapa author dari postingan ini
        } else if(is_author()){
            echo get_the_author() . " " . "Page";
        } else {
            echo "Halaman Archive";
        }
        
        ?>
    </p>

    <?php 
    // ngeloop postingan
    //have_post()
        while (have_posts()): the_post(); 
        get_template_part("content");
        endwhile;
        endif;
?>
</div>
</main>
</div>

<!--get_footer() berfungsi untuk mengambil elemen didalam footer-->
<?php get_footer(); ?>
