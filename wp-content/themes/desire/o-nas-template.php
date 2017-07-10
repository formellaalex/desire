<?php
/**
 * Template Name: About Template
 */
?>

<div class="about-content-container">
    <div class="about-content col col-sm-8 offset-sm-2">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>
    </div>
</div>
