jQuery(function($) {


$('.gallery').each(function() {
    var slideshow = $(this);
    var $nav = $('<a class="prev" href="#">Prev</a><a class="next" href="#">Next</a>').insertBefore(this);

    var next = slideshow.parent().find('.next');
    var prev = slideshow.parent().find('.prev');

    slideshow.cycle({
        fx: 'fade',
        speed: 'fast',
        timeout: 0, 
        next: next, 
        prev: prev,
        slideResize: false,
        slideExpr: '.gallery-item',
        before: function(){
           $(this).parent().find('.current').removeClass();
           var max = -1;
    $(".current img").each(function() {
        var h = $(this).height(); 
        max = h > max ? h : max;
    });
    console.log(max);

    $('.gallery-item').css('height', max)
     },
      after: function(){
           $(this).addClass('current');
     }


     });
});
 
    // Calculate and assign the height of .gallery-item
    



// $('.gallery').each(function() {
//     var $nav = $('<a class="prev" href="#">Prev</a><a class="next" href="#">Next</a>').insertBefore(this);
    
//     var p = this.parentNode;
//     $(this).cycle({
//         timeout: 0,
//         prev:   $('.prev', p),
//         next:   $('.next', p) 
//     });
// });
    // Captivate Modals
    // hide() the modal first, then show() it before handing it to Bootstrap
    

    // Let's try again. 
    // First:   Clone the video object
    // Then :   .remove() it
    // Then :   clone() it on clicking the button
 

    $(function(){
        var video = $('.content-video embed');
        video.clone();
        video.detach();
        console.log(video);
        
        $('h3').on('click', function(){
            console.log('clicked');
            $('.modal-body').append(video);
            $('#watch-video-modal').modal('show');
        });
    });
   
    $('a.close').on('click', function(){
        $('#watch-video-modal').detach();
       console.log('detached');
    });
 


    $('body.tool-landing-page #secondary h2').animate({ 
        'opacity': 1
    }, 1600);

    $('body.tool-landing-page #secondary').animate({ 
        'margin-top': 0
    }, 1000);



    //  //Fade some stuff in on page load
    //  $(function(){
    //     $('img').animate({ 'opacity': 1 }, 200);
        
    //     $('.page-using-d2l-illustrated img.cloud').animate({ 'margin-top' : '15px' }, 800);
        
    // });

     
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


    // Add classes to table <td>s to allow for styling
    $('table td:nth-child(1), table th:first').addClass('first');


}); //Last