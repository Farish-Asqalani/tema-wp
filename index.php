
<!--get_header() berfungsi untuk mengambil elemen didalam header-->
<?php get_header(); ?>

<div class="container">
<main>
    <div class="isi">

<?php 
if (have_posts()):
    //have_post()
        while (have_posts()): the_post();
        get_template_part("content");
endwhile;
    else:
        echo "Tidak ada post";
        endif;
?>
</div>
</main>
</div>

<!--get_footer() berfungsi untuk mengambil elemen didalam footer-->
<?php get_footer(); ?>
