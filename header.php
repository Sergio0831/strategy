<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>

</head>

<body>

    <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

        <header class="templateux-navbar" data-aos="fade-down">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-3">
                        <div class="site-logo"><a <?php if(is_page("about")) echo "class='text-white'" ?>
                                href="<?php echo site_url("/") ?>" class="animsition-link">Strategy</a></div>
                    </div>
                    <div class="col-sm-9 col-9 text-right">

                        <button class="hamburger hamburger--spin toggle-menu ml-auto js-toggle-menu" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>

                        <nav class="templateux-menu js-templateux-menu" role="navigation">
                            <ul class="list-unstyled">
                                <li <?php if (is_page("portfolio")) echo "class='active'" ?>><a
                                        <?php if(is_page("about")) echo "class='text-white'" ?>
                                        href="<?php echo site_url("portfolio")?>" class="animsition-link">Work</a></li>
                                <li <?php if (is_page("about")) echo "class='active'" ?>><a
                                        <?php if(is_page("about")) echo "class='text-white'" ?>
                                        href="<?php echo site_url("/about")?>" class="animsition-link">About</a></li>
                                <li <?php if (get_post_type() == "post") echo "class='active'" ?>><a
                                        <?php if(is_page("about")) echo "class='text-white'" ?>
                                        href="<?php echo site_url("/blog")?>" class="animsition-link">Blog</a></li>
                                <li <?php if (is_page("contact")) echo "class='active'" ?>><a
                                        <?php if(is_page("about")) echo "class='text-white'" ?>
                                        href="<?php echo site_url("/contact")?>" class="animsition-link">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>