<?php 
global $kerapy_option;
$btn_text = $kerapy_option['h-btn-text'];
$btn_url = $kerapy_option['h-btn-link'];
$btn_color = $kerapy_option['h-btn-color'];
$btn_bg_color = $kerapy_option['h-btn-bg'];

?>

<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head()?>
    <style>
        <?php echo wp_kses_post($kerapy_option['css_on_header']); ?>
    </style>
    <script>
        <?php echo wp_kses_post($kerapy_option['js_on_header']); ?>
    </script>
</head>
<body <?php body_class()?>>
    <style>
        <?php echo wp_kses_post($kerapy_option['css_on_body_start']); ?>
    </style>
    <script>
        <?php echo wp_kses_post($kerapy_option['js_on_body_start']); ?>
    </script>
<?php wp_body_open(); ?>
    <div class="menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container py-md-4">
                <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                    <?php 
                        if(!empty($kerapy_option['kerapy-logo']['url'])){
                            ?>
                            <img src="<?php echo esc_url($kerapy_option['kerapy-logo']['url']); ?>" alt="<?php echo bloginfo('name');?>">
                            <?php
                        }else{
                            echo bloginfo('name');
                        }
                    ?>
                </a>
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
                <?php 
                if(!empty($btn_text)){
                    ?>
                    <div>
                        <a href="<?php echo esc_url($btn_url); ?>" class="btn btn-outline-dark " >
                            <?php echo esc_html($btn_text);?>
                        </a>
                     </div>
                    <?php
                }?>
                
            </div>
        </nav>
    </div>