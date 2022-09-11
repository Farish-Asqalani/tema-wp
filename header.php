<!-- bagian header -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?>></title>
    <!-- Untuk mengkoneksikan styke.css dari folder asset -->
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?> /asset/css/style.css">
    <!--  wp_head() bergunsi untuk memberitahu kalau ini adalah header nya  -->
    <!--  Dan berguna untuk menload script css atau js  -->
    <?php wp_head(); ?>
</head>
<body>
    
    <header>
        <nav>
            <ul class="logo1">
                <li class="logo"><a href="<?= home_url(); ?>">Tulisan</a></li>
            </ul>
            <?php
            // berfungsi untuk mengambil menu dari main
            $args = array('theme_location' => 'main_menu');
            wp_nav_menu();
            ?>
        </nav>
        <!-- Berfungsi untuk menampilkan judul dari project -->
        <!-- <h1><a href="#"></a></h1> -->
    </header>

