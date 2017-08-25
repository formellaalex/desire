<?php
/**
 * Template Name: Offer model Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div id="model-slider">
    <?php
    $media = get_posts(array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'title',
        'order' => 'ASC'
    ));

    $media = get_attached_media( 'image' );

    echo "<ul class=\"bxslider\">";
    foreach ( $media as $m ) {
        echo "<li style=\"background-image: url('".wp_get_attachment_url($m->ID)."\"</li>";
    }
    echo "</ul>";
    ?>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery('.bxslider').bxSlider({
            mode: 'fade',
            auto: true,
            pager: false,
            controls: false
        });
    });
</script>
