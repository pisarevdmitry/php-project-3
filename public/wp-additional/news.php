<?php
require "../wp-load.php";
get_header();
;?>

<div class="content-wrapper">

    <div class="content">
        <h1 class="title-page">Последние новости  из мира туризма</h1>
        <div class="posts-list">
            <!-- post-mini-->
            <?php
            $paged = (get_query_var('paged') ) ? get_query_var('paged') : 1;
            $param =[
            'paged' => $paged,
            's'=> get_search_query(),
            'post_type' => ['post']
            ];
            query_posts($param);?>
            <?php
            require_once '../wp-content/themes/project-3/maincontent.php';
             get_footer() ;
            ;?>
