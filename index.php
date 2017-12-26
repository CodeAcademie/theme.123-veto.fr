<?php get_header(); ?>

    <div id="header" style='background-image:url(<?php header_image(); ?>)'>
        <div class="header-corp">
            <!-- logo -->
            <div class="logo-img img-responsive"></div>
            <!-- infos -->
            <div class="info">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?>&nbsp<?php bloginfo('description'); ?></a></h1>
                
                <h2 class="names">Dr Eric Wintz - Dr Aurélie Mayoussier</h2>
                <div class="horaires">
                	<?php query_posts('category_name=horaire'); ?>
                	<?php if(have_posts()) : ?>
                		<?php while(have_posts()) : the_post();?>
                	  	<div class="horaires" id="post-<?php the_ID(); ?>">
                	    	<div class="contenu_article horaires">
                	    		<?php the_content(); ?>
                	      </div>
                	    </div>
                	  <?php endwhile; ?>
							<?php endif; ?> </div>
            </div>
        </div>
    </div>


    <div class="page">
        <!-- aside -->
        <?php get_sidebar(); ?>
            <div class="content">
                <!-- le bloc team pour le hover est stocké dans le pc 26 -->
                <div id="bloc-team">
                    <h2 class="bandeau bandeau-mt0" id="bandeau_presentation">L'équipe à votre service</h2>

                    <!-- DOCTEUR I -->
                    <div class="docteurs">
                        <?php query_posts('category_name=presentation'); ?>
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post();?>
                                    <div class="team-member">
                                        <h3 title="<?php the_title(); ?>"><?php the_title(); ?></h3>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article article-presentation">
                                                <div class="imgPage" id="imgPage">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>
                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                        <?php endif; ?>
                    </div>

                </div>


                <!-- CAROUSEL -->
                <div id="bloc-carousel">
                    <h2 class="bandeau bandeau-mt0 bandeau-carousel ">Découverte de la clinique</h2>
                    <div class="index-separator-0"></div>

                    <!-- new carousel -->
                    <?php query_posts('category_name=carousel'); ?>
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) : the_post();?>
                                <?php the_content(); ?>
                                    <?php endwhile; ?>
                                        <?php endif; ?>

                </div>

                <!-- SAVOIR-FAIRE 1 2 3 VETO -->
                <div id="bloc-large-savoirfaire">
                    <h2 class="bandeau bandeau-mt0" id="bandeauNSF">Notre savoir-faire</h2>
                    <div class="index-separator-0"></div>
                    <div id="bloc-medium-savoirfaire">
                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                1
                            </div>
                            <?php query_posts('category_name=NotreSavoirFaire1'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>
                                        <div>
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                2
                            </div>
                            <?php query_posts('category_name=NotreSavoirFaire2'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>
                                        <div>
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>


                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                3
                            </div>
                            <?php query_posts('category_name=NotreSavoirFaire3'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>
                                        <div>
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="bloc-small-savoirfaire">
                            <div class="fa-sf">
                                V
                            </div>
                            <?php query_posts('category_name=NotreSavoirFaireV'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>
                                        <div>
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>
                    </div>
                </div>


                <!-- PRESTATIONS -->
                <?php 
                    $presta_url = get_post_permalink(get_page_by_title ( 'Prestations' )->ID); 
                    $conseil_url = get_post_permalink(get_page_by_title ( 'Fiche conseil' )->ID); 
                    $vente_url = get_post_permalink(get_page_by_title ( 'Espace vente' )->ID); 
                 ?>

                <section>
                    <div class="section-header">
                        <h2 class="bandeau">Nos prestations</h2>
                    </div>
                    <section class="formeindex">

                        <div class="icone-generique">
                            <div id ="i_consul" class="center-generique">
                                <?php include("img/svg/prestation_svg/prestation_stethoscope.php"); ?>          
                                <button class="bouton-generique" onclick="location.href='<?= $presta_url ?>';">Consultation</button>
                            </div>

                            <div id="i_imagerie" class="center-generique">
                                <?php include("img/svg/prestation_svg/prestation_camera.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $presta_url ?>';">Imagerie</button>
                            </div>                                                       
                            <!-- bloc 3/6 -->
                            <div id="i_analyses" class="center-generique">
                                <?php include("img/svg/prestation_svg/prestation_microscope.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $presta_url ?>';">Analyses</button>                                
                            </div>
                            <!-- bloc 4/6 -->
                            <div id="i_chirurgie" class="center-generique">     
                            <?php include("img/svg/prestation_svg/prestation_scalpel.php"); ?>          
                                <button class="bouton-generique" onclick="location.href='<?= $presta_url ?>';">Chirurgie</button>                                
                            </div>
                            <!-- bloc 5/6 -->
                            <div id="i_hosp" class="center-generique">     
                            <?php include("img/svg/prestation_svg/prestation_hopital.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $presta_url ?>';">Hospitalisation</button>                                
                            </div>
                            <!-- bloc 6/6 -->
                            <div id="i_nac" class="center-generique">    
                            <?php include("img/svg/prestation_svg/prestation_lapin.php"); ?>                             
                                <button class="bouton-generique" onclick="location.href='<?= $presta_url ?>';">NAC</button>                                
                            </div>
                        </div>
                    </section>

                    <!-- CONSEILS -->
                    
                        <h2 class="bandeau">Nos Conseils</h2>
                    <!-- ICONES -->       
                        <div class="icone-generique">
                            <div id="i_dents" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_dent.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Dents</button>
                            </div>

                            <div id="i_yeux" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_eyecat.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Yeux / Oreilles</button>
                            </div>

                            <div id="i_pelage" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_pelage.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Pelage</button>
                            </div>
                            
                            <div id="i_parasites" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_parasite.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Parasites</button>
                            </div>
                        </div>
                        
                        <div class="icone-generique">
                            <div id="i_vaccinChien" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_vaccin_chien.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Vaccin Chien</button>
                            </div>

                            <div id="i_vaccinChat" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_vaccin_chat.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Vaccin Chat</button>
                            </div>
                        

                            <div id="i_identification" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_barcode.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Identification</button>
                            </div>
                            
                            <div id="i_education" class="center-generique">
                                <?php include("img/svg/conseil_svg/conseil_education.php"); ?>
                                <button class="bouton-generique" onclick="location.href='<?= $conseil_url ?>';">Education</button>
                            </div>
                        </div>
                        </section>
                    
                    
                    <!-- VENTES -->
                    <div class="section-header">
                        <h2 class="bandeau">VENTES</h2>
                    </div>
                        <section id="formeindex" class="formeindex ente-index">
                            <div class="icone-gerique">
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_croquette.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Croquettes</button>
                                </div>

                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_antiparasitaire.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Vermifuges</button>
                                </div>

                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_shampooing.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Shampoings</button>
                                </div>
                                
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_brosse.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Brosses</button>
                                </div>
                                
                                <div class="center-generique">
                                    <?php include("img/svg/vente_svg/vente_collier.php"); ?>
                                    <button class="bouton-generique" onclick="location.href='<?= $vente_url ?>';">Colliers et laisses</button>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- <section>
                    <div class="section-header">
                        <h2 class="bandeau">Nos prestations</h2>
                    </div>
                        <section class="formeindex">

                        <div class="icone-generique">
                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_stethoscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('consultation')">Consul.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_camera.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('imagerie')">Imagerie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_microscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('analyse')">Analyses</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_scalpel.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('chirurgie')">Chirurgie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_hopital.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('hospitalisation')">Hosp.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_lapin.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('nac')">NAC</button>
                            </div>
                        </div>
                    </section> -->

            </div>
    </div>

    <?php get_footer(); ?>

    <script type="text/javascript">
    $(window).scroll(function(){
    if( $(window).scrollTop() > 2000){
      console.log($(window).scrollTop());
    }
  });
    </script>




        </body>

        </html>