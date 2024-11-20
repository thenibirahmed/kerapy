jQuery(document).ready(function ($) {
   // infinite Scroll
   $('.js-post-container').infiniteScroll({
        path: '.next.page-numbers',
        append: '.js-post-container > .js-postcard',
        history: false,
        button: '.view-more-button',
        scrollThreshold: false,
        status: '.page-load-status'
    }).on('request.infiniteScroll', function() {
        // Add 'loading' class when loading starts
        $('.view-more-button').addClass('loading');
        $('.view-more-button span').append('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2Zm0 18a8 8 0 1 1 8-8A8 8 0 0 1 12 20Z" opacity="0.5"/><path fill="currentColor" d="M20 12h2A10 10 0 0 0 12 2V4A8 8 0 0 1 20 12Z"><animateTransform attributeName="transform" dur="1s" from="0 12 12" repeatCount="indefinite" to="360 12 12" type="rotate"/></path></svg>');
    })
    .on('load.infiniteScroll', function() {
        // Remove 'loading' class when loading completes
        $('.view-more-button').removeClass('loading');
        $('.view-more-button span').find('svg').remove();
    }); 
    


    $(".accordion-title").on("click", function(){
        $(this).parent().siblings().removeClass("active").children(".accordion-content").slideUp();
        $(this).parent().toggleClass("active").children(".accordion-content").slideToggle();
    });

})
