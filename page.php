<?php get_header()?>

<?php get_template_part('template-parts/page-header'); ?>

<div class="py-5">
    <div class="container">
        <?php 
        if(have_posts()){
            the_post();
            the_content();
            wp_link_pages();
        }
        ?>
    </div>
</div>

<?php get_footer()?>