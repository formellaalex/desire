<?php
/**
 * Template Name: Offer Type Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
   <?php
    $media = get_posts(array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'title',
        'order' => 'ASC'
    ));
    echo "<div class='row'> ";
    foreach ( $media as $m ) {
        echo "<div class='col-6 no-margin'> 
                <div class=\"thumbnail \"> 
                     <a href='".htmlspecialchars(wp_get_attachment_caption($m->ID))."'>
                        <div class='offer-text'> <h4> ".htmlspecialchars(get_the_title($m->ID))." </h4> </div>
                        <img class='img-responsive offer-model-image' src=\"".htmlspecialchars(wp_get_attachment_url($m->ID))."\"> 
                    </a>
                </div> 
            </div>";
    }
    echo "</div>"
    ?>
<?php endwhile; ?>
