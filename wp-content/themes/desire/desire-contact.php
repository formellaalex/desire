<?php
/**
 * Template Name: Contact Template
 */
?>
<div id="contact-container">
    <div class="contact-content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-9">
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php get_template_part('templates/content', 'page'); ?>
                                <?php endwhile; ?>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-text">
                                    <h6 class="title">EMAIL</h6>
                                    <h6 class="subtitle">info@desireglass.com</h6> <br />
                                    <h6 class="title">PHONE</h6>
                                    <h6 class="subtitle">+48 505 608 996</h6>
                                    <h6 class="subtitle">+48 506 336 182</h6> <br />
                                    <h6 class="title">ADDRESS</h6>
                                    <h6 class="subtitle">ul. Juraty 35</h6>
                                    <h6 class="subtitle">Gdansk 80-299</h6>
                                    <h6 class="subtitle">POLAND</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>