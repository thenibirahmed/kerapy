<?php
    global $wp_query;
    global $kerapy_option;
    $pagination = $kerapy_option['pagination_type'];
    $max_pages = $wp_query->max_num_pages;
    if( $max_pages > 1 ){
    ?>
    <div class="<?php if($pagination!='number'){echo 'd-none';} ?>">
        <?php
        the_posts_pagination(array(
            'screen_reader_text' => ' ',
            'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
            'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>',
            'type' => 'list'
        ));
        ?>
    </div>
    <?php 
        if($pagination=='button'){
     ?>
    <div class="view-more-button text-center loadmore-btn">
        <div class="primary-button inline-flex items-center gap-2">
            <span></span>
            <?php echo esc_html__('Load More', ''); ?>
        </div>
    </div>
    <?php } ?>
<?php } ?>