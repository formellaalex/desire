<?php
/**
 * Template Name: Offer Template
 */
?>

<div class="container offer-container">
    <div class="row offer-row text-center">
            <div id="stoly-image" class="gallery-product col-6 col-xs-4 col-md-4 col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">STOŁY</h4>
                </div>
                <div class="offer-image"> </div>
            </div>
            <div id="oswietlenie-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">LAMPY</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="lustra-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">LUSTRA</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="drzwi-image" class="gallery-product col-6 col-xs-4 col-md-4 col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">DRZWI</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="blaty-image" class="gallery-product col-6 col-xs-4 col-md-4 col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">BLATY</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="lazienka-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">ŁAZIENKI</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="akcesoria-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">AKCESORIA</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="inne-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">INNE</h4>
                </div>
                <div class="offer-image"> </div>
            </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $(".offer-image").mouseover(function() {
            $(this).css("background", "none");
            $(this).parent().find(".gallery-text").css("background", "rgba(0,0,0,0.75)");
        });

        $(".offer-image").mouseout(function() {
            $(this).css("background", "rgba(2, 72, 112, 0.75)");
            $(this).parent().find(".gallery-text").css("background", "none");
        });

        $(".gallery-text").mouseover(function() {
            $(this).css("background", "rgba(0,0,0, 0.75)");
            $(this).parent().find(".offer-image").css("background", "none");
        });

        $(".gallery-text").mouseout(function() {
            $(this).css("background", "none");
            $(this).parent().find(".offer-image").css("background", "rgba(0,0,0,0.75)");
        });
    });
</script>