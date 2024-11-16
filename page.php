<?php 
    get_header();

    if ( \Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor() ) {
        while ( have_posts() ): 
            the_post();
            the_content();
        endwhile;
    } else {
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_title() ?></h1>
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        <?php
    }

    get_footer();
?>