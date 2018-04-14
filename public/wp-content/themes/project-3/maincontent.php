<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="post-wrap">
    <div class="post-thumbnail">
        <img src="<?php echo my_thumb()?>" alt="Image поста" class="post-thumbnail__image">
        <div class="akcia">
            <?php if (get_post_type() === 'akcia') {
                echo "Акция";
            }; ?>
        </div>
    </div>
    <div class="post-content">
        <div class="post-content__post-info">
            <div class="post-date"><?php the_date(); ?></div>
        </div>
        <div class="post-content__post-text">
            <div class="post-title">
                <?php the_title(); ?>
            </div>
            <p>
                <?php the_excerpt(); ?>
            </p>
        </div>
        <div class="post-content__post-control">
            <a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a>
        </div>
    </div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Not found');?></p>
<?php endif;

?>

</div>

<div class="pagenavi-post-wrap">
    <?php the_posts_pagination(['prev_text'=> __('«'), 'next_text' => __('»')]);
    wp_reset_postdata();
    wp_reset_query();

    ?>
</div>
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
        <div class="calendar">
            <?php get_calendar() ?>
        </div>
    </div>
</div>
</div>