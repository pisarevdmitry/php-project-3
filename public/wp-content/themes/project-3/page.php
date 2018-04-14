<?php get_header() ?>
<div class="main-content">
    <div class="content-wrapper">

        <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="title-page"><?php the_title() ?></h1>
                <div>
                    <?php the_content() ?>
                </div>

            <?php endwhile; else: ?>
                <p><?php _e('Not found');?></p>
            <?php endif; ?>
        </div>
        <!-- sidebar-->
        <div class="sidebar">
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Теги</div>
                <div class="sidebar-item__content">
                    <?php wp_tag_cloud(['format' => 'list']); ?>

                </div>
            </div>
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="category-list">
                        <?php
                        echo wp_list_categories(['hierarchical'=> true,'title_li' => ''])
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
