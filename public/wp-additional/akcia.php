<?php
require "../wp-load.php";
get_header();
;?>

    <div class="content-wrapper">

        <div class="content">
            <h1 class="title-page">Последние Акции  из мира туризма</h1>
            <div class="posts-list">
                <!-- post-mini-->
                <?php
                $param =[
                    'nopaging' => true,
                    'post_type' => ['akcia'],
                ];
                query_posts($param);?>
                <?php
                require_once '../wp-content/themes/project-3/maincontent.php';
                 get_footer() ;
                wp_reset_query();
                wp_reset_postdata();?>