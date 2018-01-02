<?php
    //ça en ligne 1 sinon ça plante.
?>

    <div id="footer">
        <p> Copyright &#169;
            <?php print(date("Y")); ?>
                <?php bloginfo('name'); ?>
                    <br /> Site propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par La Team 123VETO

                    <a class="button" href="#popup1"> - Mentions légales</a>
        </p>

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="popup-txt">
                    <div class="uniform-article">
                        <?php query_posts('category_name=mentions'); ?>
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post();?>

                                    <!-- affichage des articles -->
                                    <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                    <div class="post" id="post-<?php the_ID(); ?>">
                                        <div class="post_content alignement_article">
                                            <div class="contenu_mentions">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <?php wp_footer(); ?>
