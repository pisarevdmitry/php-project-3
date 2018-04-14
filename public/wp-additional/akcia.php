<?php
require "../wp-load.php";
get_header();
query_posts(['post_type' => 'post']);?>

    <div class="content-wrapper">

        <div class="content">
            <h1 class="title-page">Последние Акции  из мира туризма</h1>
            <div class="posts-list">
                <!-- post-mini-->
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $param =[
                    'post_type' => ['akcia'],
                    'paged' => $paged,

                ];
                query_posts($param);?>
                <?php
                require_once '../wp-content/themes/project-3/maincontent.php';
                 get_footer() ;
                wp_reset_query();
                wp_reset_postdata();?>