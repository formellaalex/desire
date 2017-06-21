<?php
/**
 * Template Name: About Template
 */
?>

<div class="o-nas-content-container">
    <div class="o-nas-content col-md-8 offset-md-2 pull-right">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>
    </div>
</div>
