jQuery(function($) {

/* 
    Lets use a hammer to kill these flies. 
    We've stripped out the width and height attributes via a filter in functions.php
    This will apply to new images placed in new/existing posts. Not old ones. 
    This hammer will strip the attributes out of existing posts. 
    We regret what we've done here. 

    */
    $('article img').each(function(){ 
        $(this).removeAttr('width')
        $(this).removeAttr('height');
    });



 /**
  * Animate the sidebar's top margin when the page loads
  *
  */ 

    //   $('body.tool-landing-page #secondary h2').animate({ 
    //     'opacity': 1
    // }, 1600);

    //   $('body.tool-landing-page #secondary').animate({ 
    //     'margin-top': 0
    // }, 1000);




 /**
  * Set a first and last on all menus
  *
  **/
  $('nav ul li:first-child,nav ol li:first-child').addClass('first');
  $('nav ul li:last-child,nav ol li:last-child').addClass('last');

 

 /**
  * Set proper classes on sidebar menu items 
  * 
  * If .children contains the current-page-item, 
  * highlight the parent and that .children ul.
  * 
  */ 

   

   $('.children:has(li.current-page-item)').addClass('current-children');
    
   $('.current-page-item .children ').addClass('current-children');
   
   $(".menu > li").addClass('parent');
 
   $('.current-children').parent().addClass('current-parent');

  $('.current-page-ancestor').prev().addClass('prev-tool-cat');
  $('.tool-category.current-parent').prev().addClass('prev-tool-cat');


 /**
  * Add parent item to the sidebar menu
  */ 
  if ( $('body').hasClass('d2l-child')  ) {
    $('#menu-sidebar ul.menu').prepend('<li class="page_item parent-tool">Desire2Learn</li>');
  };





    //Stop playing Captivate videos when you close the modal
    $('.watch-video-modal').on('hide', function(){
        console.log('closed');
    })


    // Add classes to table <td>s to allow for styling
    $('table td:nth-child(1), table th:first').addClass('first');


}); //Last