<?php
/**
 * Template Name: Home
 */
get_header(); ?>
<main>
<div class="content">
    <ul class="list">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post();?>
                <li class="item">
                    <h3>
                        <a href="<?php the_permalink() ?>">
                            <?php
                            if ( function_exists( 'add_theme_support' ) )
                                the_post_thumbnail( array(250,9999), array('class' => 'prew') );
                            ?>
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <?php the_excerpt(); ?>
                    <div class="descr">
                        <span class="authorr"> by <?php the_author(); ?></span>
                        <span class="commentss"> <?php comments_popup_link('/ 0 comments /', '/ 1 comments /', '/ % comments /') ?> </span>
                        <span class="datee"> <?php the_date();?> </span>
                    </div>
                </li>


            <?php endwhile; ?>
            <?php the_posts_pagination( array(
            'end_size' => 2,
            'mid_size' => 2,
            ) );?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </ul>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>