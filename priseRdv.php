<?php /*

    Template Name: RDV

*/ ?>

    <?php get_header(); ?>

           <h2 class="bandeau bandeau-mt0">PRISE DE RENDEZ-VOUS</h2>

            <div class="RDV">
                <div class="center-RDV">
                    <div class="select-RDV">
                        <?php the_post(); the_content(); ?>
                    </div>
                </div>
                <!--<div class="localisation">
                <img src="img/dr-aurelie.jpg" alt="">
                </div>-->
                </div>
            </div>

        <?php get_footer(); ?>