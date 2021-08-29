<?php get_header();

/* Template name: About */

?>

<section class="templateux-hero overlay" data-scrollax-parent="true">
    <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img
            src="<?php echo get_the_post_thumbnail_url( null, 'post-thumbnail' ); ?>" /></div>

    <div class="container">
        <div class="row align-items-center justify-content-center intro">
            <div class="col-md-10" data-aos="fade-up">
                <h1><?php the_title(); ?></h1>
                <p class="lead">
                <p class="lead"><?php echo get_post_meta(get_the_ID(), "descr", true ) ?></p>
                </p>
                <a href="#next" class="go-down js-smoothscroll"></a>
            </div>
        </div>
    </div>
</section>
<!-- END templateux-hero -->


<section class="templateux-section" id="next">

    <div class="container py-5" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12 clearfix mb-3">
                <h2>We Are Experts</h2>
            </div>
            <div class="col-md-6">
                <p><?php the_field("firstparagraph"); ?></p>
                <p><?php the_field("secondparagraph"); ?></p>
            </div>

            <div class="col-md-6">
                <p><?php the_field("thirdparagraph"); ?></p>
            </div>
        </div>



        <div class="row templateux-section">
            <div class="col-md-12 clearfix mb-5">
                <?php
                $aboutpageTeam = new WP_Query([
                    'post_type'   => 'team',
                ])
                ?>
                <h2>Team</h2>
            </div>
            <?php

                while( $aboutpageTeam->have_posts() ){
                    $aboutpageTeam->the_post()?>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="block-38 ">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="<?php echo get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>">
                            <h3 class="block-38-heading"><?php the_title(); ?></h3>
                            <p class="block-38-subheading"><?php echo get_post_meta(get_the_ID(), "position", true ) ?>
                            </p>
                        </div>
                        <div class="block-38-body">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata(); ?>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="owl-carousel dots-overlap wide-slider">
                    <div class="item"><img src="<?php echo get_theme_file_uri( "assets/images/hero_1.jpg" ) ?>"
                            alt="Free Template" class="img-fluid"></div>
                    <div class="item"><img src="<?php echo get_theme_file_uri( "assets/images/hero_2.jpg" ) ?>"
                            alt="Free Template" class="img-fluid"></div>
                    <div class="item"><img src="<?php echo get_theme_file_uri( "assets/images/hero_3.jpg" ) ?>"
                            alt="Free Template" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <!-- END row -->
    </div>
    </div>
</section>
<!-- END section -->

<section class="templateux-section">


    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix mb-5" data-aos="fade-up">
                <?php
                $experts = new WP_Query([
                    'post_type'   => 'experts',
                    'order' => 'ASC',
                ])
                ?>
                <h2>We Are Experts</h2>
            </div>
        </div>
        <div class="row">
            <?php 
                  while($experts->have_posts()) {
                    $experts->the_post() ?>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="media templateux-media mb-4">
                    <div class="mr-4 icon">
                        <span class="<?php echo get_post_meta(get_the_ID(), "icon", true ) ?> display-3"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>

            <?php }  wp_reset_postdata(); ?>

        </div>
        <!-- END row -->
    </div>
</section>

<?php get_footer(); ?>