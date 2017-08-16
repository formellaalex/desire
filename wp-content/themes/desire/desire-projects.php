<?php
/**
 * Template Name: Projects Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div id="project-main-slider">
<?php
$media = get_posts(array(
    'post_parent' => get_the_ID(),
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
));
echo "<ul class=\"bxslider\">";
foreach ( $media as $m ) {
    echo "<li style=\"background-image: url('".wp_get_attachment_url($m->ID)."\"</li>";
}
echo "</ul>";
?>
</div>
<div id="project-pager">
    <?php
        $media = get_posts(array(
            'post_parent' => get_the_ID(),
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ));
        echo "<ul id=\"bx-pager-projects\">";
        $index = 0;
        foreach ( $media as $m ) {
            echo "<li data-slideIndex=\"".$index."\"> <a href=\"\"><img src=\"".wp_get_attachment_url($m->ID)."\"/> </a> </li>";
            $index++;
        }
        echo "</ul>"
    ?>
</div>

<script>
    jQuery(document).ready(function(){

        var realSlider = jQuery('.bxslider').bxSlider({
            pagerCustom: '#bx-pager-projects',
            controls: false,
            mode: 'fade',
            auto: true
        });

        var realThumbSlider = jQuery("ul#bx-pager-projects").bxSlider({
            minSlides: 2,
            maxSlides: 20,
            slideWidth: 125,
            slideMargin: 5,
            moveSlides: 1,
            pager:false,
            speed:1000,
            hideControlOnEnd:true,
            nextText:'<span></span>',
            prevText:'<span></span>',
            onSlideBefore:function($slideElement, oldIndex, newIndex){
                /*$j("#sliderThumbReal ul .active").removeClass("active");
                 $slideElement.addClass("active"); */

            }
        });

        linkRealSliders(realSlider,realThumbSlider);

        if(jQuery("#bx-pager-projects li").length<9){
            jQuery("#bx-pager-projects .bx-next").hide();
        }

// sincronizza sliders realizzazioni
        function linkRealSliders(bigS,thumbS){

            jQuery("ul#bx-pager-projects").on("click","a",function(event){
                console.log("sunę");
                event.preventDefault();
                var newIndex = jQuery(this).parent().attr("data-slideIndex");
                bigS.goToSlide(newIndex);
            });
        }
    });
</script>

