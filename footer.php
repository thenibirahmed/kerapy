<?php 
global $kerapy_option;
$footer_right_text = $kerapy_option['footer_right_copyright'];
$footer_menu = $kerapy_option['footer_menu'];
?>   
<footer class="text-white pt-5 footer-bg-color">
    <div class="container py-md-4">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <?php dynamic_sidebar('kerapy-footer-1') ?>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <?php dynamic_sidebar('kerapy-footer-2') ?>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <?php dynamic_sidebar('kerapy-footer-3') ?>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <?php dynamic_sidebar('kerapy-footer-4') ?>
            </div>
        </div>
        <hr class="bg-light mt-5 mb-4">
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between pb-3 gap-2">
            <?php 
                if($footer_menu){
                    wp_nav_menu(array(
                        'menu' => $footer_menu,
                        'menu_class' => 'd-flex flex-wrap list-unstyled gap-3 mb-0',
                        'before' => '<div class="footer-list-item">'
                    ));
                }
            ?>
            <div>
                <p class="mb-0 footer-list-item"><?php echo esc_html($footer_right_text); ?></p>
            </div>
        </div>
        
    </div>
</footer>
<style>
    <?php echo wp_kses_post($kerapy_option['css_on_body_end']); ?>
</style>
<script>
    <?php echo wp_kses_post($kerapy_option['js_on_body_end']); ?>
</script>
<?php wp_footer(); ?>
</body>
</html>