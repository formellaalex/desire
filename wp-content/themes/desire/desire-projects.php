<?php
/**
 * Template Name: Projects Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<?php
$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1
);

$query_images = new WP_Query( $query_images_args );

$images = array();
foreach ( $query_images->posts as $image ) {
    $images[] = wp_get_attachment_url( $image->ID );
}

$media = get_attached_media( 'image' );

echo "<ul class=\"bxslider\">";
foreach ( $media as $m ) {
    echo "<li style=\"background-image: url('".wp_get_attachment_url($m->ID)."\"</li>";
}
echo "</ul>";
echo "<div id=\"bx-pager-projects\">";
$index = 0;
foreach ( $media as $m ) {
    echo "<a data-slide-index=\"".$index."\" href=\"\"><img class=\"projects-thumbnail\" src=\"".wp_get_attachment_url($m->ID)."\"/> </a>";
    $index++;
}
echo "</div>"
?>

<script>
    jQuery(document).ready(function(){

        jQuery('.bxslider').bxSlider({
            pagerCustom: '#bx-pager-projects',
            controls: false,
            mode: 'fade',
            auto: true
        });
    });
</script>

