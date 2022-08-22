<!-- merupakan halaman utama atau halaman home pada website nantinya -->

<!--get_header() berfungsi untuk mengambil elemen didalam header-->
<?php get_header(); ?>

<div class="container">
<main>
    <div class="isi">

<?php 
// looping untuk memunculkan postingan
if (have_posts()):
    //have_post()
        while (have_posts()): the_post();
        get_template_part("content");
endwhile;
    else:
        // jika tidak ada postingan maka tampilkan tulisan dibawah 
        echo "Tidak ada post"; 
        endif;
?>
</div>
</main>
<aside class="sb">
    <h3>Category</h3>
    <ul>
        <div class="isisb">
        <?php dynamic_sidebar('sidebar2'); ?>
        </div>
    </ul>
</aside>
</div>




<!--get_footer() berfungsi untuk mengambil elemen didalam footer-->
<div class="footer">
<?php get_footer(); ?>
</div>


