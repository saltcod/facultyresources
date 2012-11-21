jQuery(function($) {


    $('body.tool-landing-page #secondary h2').animate({ 
        opacity: 1
    }, 1600);

    $('body.tool-landing-page #secondary').animate({ 
        'margin-top': 0
    }, 1000);

     

     //Fade some stuff in on page load
     $(function(){
        $('img').animate({ opacity: 1 }, 200);
        
        $('.page-using-d2l-illustrated img.cloud').animate({ 'margin-top' : '15px' }, 800);
        
      });
        
     
      // jQuery Accordion for tool landing pages
      // Store variables
     
    var accordion_head = $('.accordion > li > a'),
        accordion_body = $('.accordion li > .sub-menu');

    // Open the first tab on load

    accordion_head.first().addClass('active').next().slideDown(200);

    // Click function

    accordion_head.on('click', function(event) {

        // Disable header links

        event.preventDefault();
    		$('.accordion').toggleClass('is-collapsed');

        // Show and hide the tabs on click

        if ($(this).attr('class') != 'active'){
            accordion_body.slideUp('normal');
            $(this).next().stop(true,true).slideToggle('normal');
            accordion_head.removeClass('active');
            $(this).addClass('active');
        }

    }); 
      



    // Toggle Captivate videos
    $(document).ready(function() {
        var container = $( ".content-video" );

        // Bind the link to toggle the slide.
        $( "h3 a" ).click(
        function( event ){
            event.preventDefault();   // Prevent the default event—ie: prevent the link from acting like a link.

        // Toggle the slide based on its current visibility.
        if (container.is( ":visible" )){
            container.slideUp( 400 );
            $( "h3 a" ).html('<i class="icon-facetime-video"></i>Watch a video <i class="icon-chevron-right second"></i>'); 
                } else {
                container.slideDown( 400 );
                $( "h3 a" ).html('<i class="icon-circle-arrow-up"></i> Close the video');
                }
            }
        ); 
 
    });



}); //Last