<?php
/*
Template Name: blank page
*/
?>
    <?php get_header() ?>
        <!-- TITRE DE LA PAGE -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2 class="bandeau bandeau-mt0" id="page-news"><?php the_title(); ?></h2>
        
        <!-- AFFICHAGE DU POST -->
        <section class="body-news">
                        <?php the_content(); ?>
                        <?php
                        echo do_shortcode('[app_worker_monthly_calendar status="paid,confirmed, completed" worker_id=<?php echo get_current_user_id(); ?>]');
                        ?>
        </section>
        <?php endwhile; else: ?>
        <?php endif; ?>
        
    <?php get_footer() ?>

<script>
    (function () {
$(".app-scheduled_appointment")
    .find(".app-scheduled_appointment-info").hide().end()
    .on("click", function () {
        var $me = $(this),
            $out = $me.parents(".app-worker_monthly_calendar-wrapper").find(".app-worker_monthly_calendar-out"),
            $info = $me.find(".app-scheduled_appointment-info")
        ;
        $out.empty().hide().append($info.html()).slideDown("slow");
        return false;
    })
;
})();
</script>