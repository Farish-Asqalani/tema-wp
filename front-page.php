<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            color: #f7f7f7;
        }

        footer {
        background-color: black;
        color: white;
        text-align: center;
        padding: 1em 0px;
        font-size: 18px;
        margin-top: 1em;
        }

        .singlef {
        grid-area: ft;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
        }

        .container {
            display: grid;
            grid-template-areas: 
            "about about about sb sb sb"
            "ft ft ft ft ft ft";
        }

        #front-page {
            margin: auto 74px;
            grid-area: about;
            inline-size: 700px;
            /* inline-size: min-content; */
        }

        ul li {
            text-decoration: none;
        }
        

        .sb1 {
            grid-area: sb;
            font-size: 20px;
            margin-top: 3rem;
        }

        a {
            text-decoration: none;
            color: #f7f7f7;
        }

        h3 {
            margin-left: 1em;
        }

        @media screen and (max-width: 720px) {

            body {
                margin: 0;
            }

            #front-page {
            margin: auto 74px;
            grid-area: about;
            inline-size: 230px;
        }
        .sb1 {
            grid-area: sb;
            font-size: 20px;
            margin-top: 3rem;
        }

        aside {
            text-align: center;
        }

        footer {
            grid-area: ft;
            background-color: black;
            color: white;
            text-align: center;
            padding: 1em 0px;
            font-size: 18px;
            margin-top: 1em;        
        }

        
        .singlef {
        grid-area: ft;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
        }

        .container {
            display: grid;
            grid-template-rows: auto 1fr auto;
            grid-template-areas: 
            "about about about about"
            "sb sb sb sb"
            "ft ft ft ft";
            /* display: flex; 
            flex-direction: column; */
        }

        }

    </style>
</head>
<body>
<div class="container">
<div id="front-page">
<h1>Selamat Datang!</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, illo. At, illo?</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem expedita, debitis, in voluptates sed animi tempora ratione laborum minus quos aliquam. Expedita iusto maxime aliquam? At recusandae id sit cumque!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas omnis, mollitia ratione libero alias aut, ipsa dolore, voluptatibus aspernatur debitis rem quo non delectus accusantium vero ut! Eligendi, qui asperiores.</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, voluptas. Fugit totam quaerat eligendi laborum ullam voluptates, vel cumque doloribus rem quis illum adipisci reiciendis quisquam debitis qui deleniti ad optio excepturi. Ea ipsam odio est enim maxime earum aliquid maiores velit alias fugit iusto harum, laudantium dolorem. Doloribus, illum in praesentium labore beatae cumque quisquam quae maiores dolor voluptates.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic ipsam exercitationem dolorum ex beatae. Veritatis officiis est qui ducimus perspiciatis, fugiat quis asperiores amet incidunt fuga quod id animi optio.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo est hic architecto dolores. Inventore nemo explicabo facilis doloribus. Amet laborum veritatis cupiditate ex beatae maiores modi tempora pariatur molestiae iusto.</p>
</div>
<aside class="sb1">
    <h3>Latest Post</h3>
    <ul>
        <?php dynamic_sidebar('sidebar1'); ?>
    </ul>
</aside>
</div>




<?php get_footer(); ?>

