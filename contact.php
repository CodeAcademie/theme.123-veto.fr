<?php //123veto ?>
    <?php /*
	Template Name: contact

 */ ?>

        <?php get_header(); ?>

            <!--Formulaire de contact-->
                    <h2 class="bandeau bandeau-mt0">CONTACT</h2>

            <div class="contact">


                <div class="formulaire">
                    <div class="center-element-contact">
                    
                        <h2>Contact</h2>
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <?php the_post(); the_content(); ?>
                    </div>
                </div>




                <div class="localisation">
                   <div class="center-element-contact">
                    
                   <?php query_posts('category_name=contact'); ?>
                         <?php if(have_posts()) : ?>
                             <?php while(have_posts()) : the_post();?>
                                 <div class="">
                                 <div class="post" id="post-<?php the_ID(); ?>">
                                     <div class="">
                                         <div class="" id="">
                                             <?php the_post_thumbnail(array(250,250));?>
                                         </div>
                                         <div class="">
                                             <?php the_content(); ?>
                                         </div>
                                     </div>
                                 </div>
                                 </div>
                               <?php endwhile; ?>
                             <?php endif; ?>


                
                    

                     <script src='https://maps.googleapis.com/maps/api/js?key= AIzaSyA0cdTnj89cM1q4ponxuy3Le3zMqAuSIHw&v=3.exp'></script><div style='overflow:hidden;height:400px;width:500px;'><div id='gmap_canvas' style='height:400px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">                                  google maps carte                           </a></small></div><div><small><a href="http://youtubeembedcode.com">embed youtube</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(47.4322084,-2.0773735000000215),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(47.4322084,-2.0773735000000215)});infowindow = new google.maps.InfoWindow({content:'<strong>Clinique Vétérinaire 123 Veto</strong><br>32 rue du Vélodrome 44160 PONTCHATEAU<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>


                </div>
                </div>
            </div>
            <?php get_footer(); ?>