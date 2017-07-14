<?php
/**
 * Template Name: Projects Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<?php
$media = get_posts(array(
    'post_parent' => get_the_ID(),
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'orderby' => 'title',
    'order' => 'DESC'
));

echo "<ul class=\"bxslider\">";
foreach ( $media as $m ) {
    echo "<li style=\"background-image: url('".wp_get_attachment_url($m->ID)."\"</li>";
}
echo "</ul>";
echo "<ul id=\"bx-pager-projects\">";
$index = 0;
foreach ( $media as $m ) {
    echo "<li data-slide-index=\"".$index."\" href=\"\"><img class=\"projects-thumbnail\" src=\"".wp_get_attachment_url($m->ID)."\"/> </li>";
    $index++;
}
echo "</div>"
?>

<script>
    jQuery(document).ready(function(){

        var realSlider = jQuery('.bxslider').bxSlider({
            pagerCustom: '#bx-pager-projects',
            controls: false,
            mode: 'fade',
            auto: true
        });

        var realThumbSlider = jQuery("ul#bx-pager-projects").bxSlider({
            minSlides: 4,
            maxSlides: 4,
            slideWidth: 156,
            slideMargin: 12,
            moveSlides: 1,
            pager:false,
            speed:1000,
            infiniteLoop:false,
            hideControlOnEnd:true,
            nextText:'<span></span>',
            prevText:'<span></span>',
            onSlideBefore:function($slideElement, oldIndex, newIndex){
                /*$j("#sliderThumbReal ul .active").removeClass("active");
                 $slideElement.addClass("active"); */

            }
        });

        linkRealSliders(realSlider,realThumbSlider);

        if(jQuery("#bx-pager-projects li").length<5){
            jQuery("#bx-pager-projects .bx-next").hide();
        }

// sincronizza sliders realizzazioni
        function linkRealSliders(bigS,thumbS){

            jQuery("ul#bx-pager-projects").on("click","a",function(event){
                event.preventDefault();
                var newIndex = jQuery(this).parent().attr("data-slideIndex");
                bigS.goToSlide(newIndex);
            });
        }

//slider!=$thumbSlider. slider is the realslider
        function changeRealThumb(slider,newIndex){

            var $thumbS=jQuery("#bx-pager-projects");
            $thumbS.find('.active').removeClass("active");
            $thumbS.find('li[data-slideIndex="'+newIndex+'"]').addClass("active");

            if(slider.getSlideCount()-newIndex>=4)slider.goToSlide(newIndex);
            else slider.goToSlide(slider.getSlideCount()-4);

        }
    });
</script>

