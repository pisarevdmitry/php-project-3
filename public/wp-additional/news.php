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
            $param =[
             'nopaging' => true,
            'post_type' => ['post']
            ];
            query_posts($param);?>
            <?php
            require_once '../wp-content/themes/project-3/maincontent.php';
             get_footer() ;
            ;?>
