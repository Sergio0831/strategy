<?php

get_header();

?>

<div class="container">
    <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
            <h1>Our Blog</h1>
            <p class="lead">We are experts, engineers, authors, speakers, artists who creates astounding products for
                people.</p>
            <a href="#next" class="go-down js-smoothscroll"></a>
        </div>
    </div>
</div>
</section>
<!-- END templateux-hero -->

<section class="templateux-portfolio-overlap mb-5" id="next">
    <div class="container-fluid">
        <div class="row">

            <?php
            while(have_posts()) {
                the_post(); ?>
            <div class="col-md-6" data-aos="fade-up">
                <a class="post animsition-link" href="<?php the_permalink(); ?>">
                    <figure>
                        <img src="<?php echo get_the_post_thumbnail_url( null, 'post-thumbnail' ); ?>"
                            alt="Free Template" class="img-fluid">
                    </figure>
                    <div class="project-hover">
                        <div class="project-hover-inner">
                            <h2><?php the_title(); ?></h2>
                            <span><?php the_time("F y, Y"); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>

        </div>
        <div class="row pt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12 text-center">
                <a href="#" class="button button--red  mb-5">Load More Posts...</a>
            </div>
        </div>

    </div>
</section>



<?php

get_footer();

?>