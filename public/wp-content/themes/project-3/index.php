<?php get_header() ?>
<div class="content-wrapper">
            <div class="content">
                <h1 class="title-page">Последние новости и акции из мира туризма</h1>
                <div class="posts-list">
                    <!-- post-mini-->
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $param =['posts_per_page'=>4,
                            'post_type' => ['post', 'akcia'],
                            'paged' => $paged
                           ];
                    query_posts($param);
                    require_once 'maincontent.php';
                    get_footer();

?>