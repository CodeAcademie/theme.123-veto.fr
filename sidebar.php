<?php 
    //ça en ligne 1 sinon ça plante.
?>
<?php $rdvPage = get_post_permalink(get_page_by_title ( 'Prise de RDV' )->ID);  ?>
<a href="<?php echo $rdvPage; ?>"><button id="priseRDV">Prise de RDV<p>Cliquez ici</p></button></a>
<div class="sidebar">
    <ul>
    <!-- calendar -->
        <li>
            <div class="aside-separator"></div>
        </li>
        
        <li id="actu">
           
            <h2>news letters</h2>
            <div id="content">
               <?php query_posts('category_name=news'); ?>
                <?php if(have_posts()) : ?>
                <?php $counter =0; ?>
                <?php while(have_posts() && $counter<3) : the_post();?>
                <?php $counter++ ?>
                <!-- affichage des articles -->
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
                <div class= "post" id="post-<?php the_ID(); ?>"> 
                    <div class= "post_content">
                        <?php the_post_thumbnail(array(250,250));?>
                        <p class="postmetadata">
                            <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                        </p>
                    </div> 
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- <a href="#"><button class="normal-button">News Letters</button></a> -->
            </div>
        
            <div class="aside-separator"></div>
            
        </li>
        
        <li id="contact">
            <?php query_posts('category_name=contactSideBar'); ?>
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post();?>
                        <div class="">
                            <!-- <h3 title="<?php the_title(); ?>"><?php the_title(); ?></h3> -->
                            <div class="post" id="post-<?php the_ID(); ?>">
                                <div class="">
                                    <div class="" id="">
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

        
                <p>
                    <a href="https://www.facebook.com/"><i class="fa fa-2x fa-facebook icone-prestation"></i></a>

                    <a href="https://plus.google.com/"><i class="fa fa-2x fa-google-plus-official icone-prestation"></i></a>
                </p>
                
                <div class="aside-separator"></div>

        </li>

    </ul> 
</div>
