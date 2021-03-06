<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page-banner' ) ?>
    <div class="entry-content">
        <p><?php the_content(); ?></p>
    </div>
    <?php endwhile; else: ?>

    <?php get_template_part( 'template-parts/content', 'none' ) ?>

<?php endif; ?>

<?php get_footer(); ?>