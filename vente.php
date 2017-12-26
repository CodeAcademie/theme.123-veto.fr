<?php //fix bug header ?>

    <?php
/*
Template Name: vente
*/
?>

        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div class="page">
                <?php get_sidebar(); ?>

                    <div class="content">
                       <h2 class="bandeau bandeau-mt0">ESPACE VENTE</h2>
                        <section class="formeindex">
                            <div class="uniform-article">
                                <?php query_posts('category_name=titre-intro-vente'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

                                            <!-- affichage des articles -->
                                            <!--<h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>-->
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <div class="post_content alignement_article">
                                                    <div class="contenu_article">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                                <?php endif; ?>
                                                <div class="index-separator"></div>
                            </div>

                            <div class="vente">
                                <div id="croquettes" class="separation">
                                <div class="numero animation anim">
																<?php include("img/svg/vente_svg/vente_croquette.php"); ?>
																</div>
                                    <h3>croquettes</h3>
                                    <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

                                    <div class="uniform-article" id="article-croquettes">
                                        <?php query_posts('category_name=croquettes'); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()) : the_post();?>

                                                    <!-- affichage des articles -->
                                                    <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                                    <div class="index-separator"></div>
                                                    <div class="post" id="post-<?php the_ID(); ?>">
                                                        <div class="post_content alignement_article">
                                                            <div class="imgPage">
                                                                <?php the_post_thumbnail(array(250,250));?>
                                                            </div>

                                                            <div class="contenu_article">
                                                                <?php the_content(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div id="vermifuges" class="separation">
                                    <div class="numero animation anim">
																		<?php include("img/svg/vente_svg/vente_antiparasitaire.php"); ?>
																		</div>
                                    <h3>vermifuges & antipara.</h3>
                                    <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

                                    <div class="uniform-article" id="article-vermifuges">
                                        <?php query_posts('category_name=vermifuges'); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()) : the_post();?>

                                                    <!-- affichage des articles -->
                                                    <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                                    <div class="index-separator"></div>
                                                    <div class="post" id="post-<?php the_ID(); ?>">
                                                        <div class="post_content alignement_article">
                                                            <div class="imgPage">
                                                                <?php the_post_thumbnail(array(250,250));?>
                                                            </div>

                                                            <div class="contenu_article">
                                                                <?php the_content(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div id="shampoings" class="separation">
                                   <div class="numero animation anim">
																	 <?php include("img/svg/vente_svg/vente_shampooing.php"); ?>
																	 </div>
                                    <h3>shampoings</h3>
                                    <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

                                    <div class="uniform-article" id="article-shampoings">
                                        <?php query_posts('category_name=shampoings'); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()) : the_post();?>

                                                    <!-- affichage des articles -->
                                                    <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                                    <div class="index-separator"></div>
                                                    <div class="post" id="post-<?php the_ID(); ?>">
                                                        <div class="post_content alignement_article">
                                                            <div class="imgPage">
                                                                <?php the_post_thumbnail(array(250,250));?>
                                                            </div>

                                                            <div class="contenu_article">
                                                                <?php the_content(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div id="brosses" class="separation">
                                    <div class="numero animation anim">
										<?php include("img/svg/vente_svg/vente_brosse.php"); ?>
									</div>
                                    <h3>brosses</h3>
                                    <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

                                    <div class="uniform-article" id="article-brosses">
                                        <?php query_posts('category_name=brosses'); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()) : the_post();?>

                                                    <!-- affichage des articles -->
                                                    <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                                    <div class="index-separator"></div>
                                                    <div class="post" id="post-<?php the_ID(); ?>">
                                                        <div class="post_content alignement_article">
                                                            <div class="imgPage">
                                                                <?php the_post_thumbnail(array(250,250));?>
                                                            </div>

                                                            <div class="contenu_article">
                                                                <?php the_content(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div id="colliers" class="separation">
                                    <div class="numero animation anim">
																		<?php include("img/svg/vente_svg/vente_collier.php"); ?>
																		</div>
                                    <h3>Colliers et laisses</h3>
                                    <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

                                    <div class="uniform-article" id="article-colliers">
                                        <?php query_posts('category_name=colliers-laisses'); ?>
                                            <?php if(have_posts()) : ?>
                                                <?php while(have_posts()) : the_post();?>

                                                    <!-- affichage des articles -->
                                                    <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                                    <div class="index-separator"></div>
                                                    <div class="post" id="post-<?php the_ID(); ?>">
                                                        <div class="post_content alignement_article">
                                                            <div class="imgPage">
                                                                <?php the_post_thumbnail(array(250,250));?>
                                                            </div>

                                                            <div class="contenu_article">
                                                                <?php the_content(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                        </section>
                    </div>
                            </div>

                    <?php get_footer(); ?>

                        </body>

                        </html>