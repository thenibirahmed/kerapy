<!DOCTYPE html>
<html <?php language_attributes()?>>
    <head>
        <title><?php bloginfo( 'title' )?><?php bloginfo( 'description' ) ? ' - ' . bloginfo( 'description' ) : ''?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Onest:wght@100..900&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>

		<?php wp_head()?>


        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
    </head>
    <body <?php body_class()?>>
        <div class="menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container py-md-4">
                    <a class="navbar-brand" href="landing.html">Kerapy</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
					<?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mx-auto mb-2 mb-lg-0 gap-md-4',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    <div>
						<a href="#" class="btn btn-outline-dark">Contact Us</a>
					</div>
                </div>
            </nav>
        </div>