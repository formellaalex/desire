<?php
/**
 * Template Name: Offer Template
 */
?>

<div class="container offer-container">
    <div class="row offer-row text-center">
            <div id="stoly-image" class="gallery-product col-6 col-xs-4 col-md-4 col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">TABLES</h4>
                </div>
                <div class="offer-image"> </div>
            </div>
            <div id="oswietlenie-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">LAMPS</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="lustra-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">MIRRORS</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="drzwi-image" class="gallery-product col-6 col-xs-4 col-md-4 col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">DOORS</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="blaty-image" class="gallery-product col-6 col-xs-4 col-md-4 col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">DECKS</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="lazienka-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">BATHROOMS</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="akcesoria-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">ACCESSORIES</h4>
                </div>
                <div class="offer-image"> </div>
            </div>

            <div id="inne-image" class="gallery-product col-6 col-xs-4 col-md-4  col-lg-3 no-margin">
                <div class="text-center gallery-text">
                    <h4 class="title">OTHERS</h4>
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