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


    //Stop playing Captivate videos when you close the modal
    $('.watch-video-modal').on('hide', function(){
        console.log('closed');
    })





}); //Last