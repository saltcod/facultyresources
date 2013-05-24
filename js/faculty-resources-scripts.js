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
* Set a first and last on all menus
*
**/
$('nav ul li:first-child,nav ol li:first-child').addClass('first');
$('nav ul li:last-child,nav ol li:last-child').addClass('last');




// Set proper classes on sidebar menu items 
// If .children contains the current-page-item, 
// highlight the parent and that .children ul.

$('.children:has(li.current-page-item)').addClass('current-children');
$('.current-page-item .children ').addClass('current-children');
$(".menu > li").addClass('parent');
$('.current-children').parent().addClass('current-parent');
$('.current-page-ancestor').prev().addClass('prev-tool-cat');
$('.tool-category.current-parent').prev().addClass('prev-tool-cat');


// Disable links for tool-category menu items

$('.menu .tool-category > a').on('click', function(e){
  e.preventDefault();
});




// Add parent item to the sidebar menu

var body = $('body');
if ( body.hasClass('d2l-child') || body.hasClass('page-using-d2l') || body.hasClass('guides-desire2learn') ) {
  $('#menu-sidebar ul.menu').prepend('<li class="page_item parent-tool"><a href="http://localhost:8888/technologyresources/guides/desire2learn">Desire2Learn</a></li>');
} else if ( body.hasClass('lecture-capture-child') || body.hasClass('guides-lecture-capture') ){
  $('#menu-sidebar ul.menu').prepend('<li class="page_item parent-tool"><a href="http://localhost:8888/technologyresources/guides/lecture-capture">Lecture Capture</a></li>');
} else if ( body.hasClass('guides-online-rooms') || body.hasClass('online-rooms-child') ) {
  $('#menu-sidebar ul.menu').prepend('<li class="page_item parent-tool"><a href="http://localhost:8888/technologyresources/guides/online-rooms/">Online Rooms</a></li>');
} else if ( body.hasClass('guides-stor') || body.hasClass('stor-child') ) {
  $('#menu-sidebar ul.menu').prepend('<li class="page_item parent-tool"><a href="http://localhost:8888/technologyresources/guides/stor/stor-basics/getting-started/">stor</a></li>');

};



// Set a class on the prev/next menu item to the current parent

$('.tool-category.current-page-ancestor,.tool-category.current-page-item')
.prev().addClass('previous-item');

$('.tool-category.current-page-ancestor,.tool-category.current-page-item')
.next().addClass('next-item');



 // // Make sidebar menu an accordion
 // $('nav#menu-sidebar .menu > li.tool-category').click(function(e) { // limit click to children of secondarye
 //        var $el = $('ul',this); // element to toggle
 //        $('.menu > li > ul').not($el).slideUp(); // slide up other elements
 //        $el.stop(true, true).slideToggle(400); // toggle element
 //        $el.addClass('active');
 //        $('.children .children').hide();
 //        return false;
 //      });
 // $('.menu > li > ul > li').click(function(e) {
 //        e.stopPropagation();  // stop events from bubbling from sub menu clicks
 //      });



 // If sidebar menu has no children, add a class and indent sub menu

 (function(){
 
  if( $('.menu li').children('.children').length == 0 ){
    $('.menu').addClass('no-children');
     $('.menu .step-by-step').wrapAll('<div class="current-children-indent" />')
  }

 
})();




  // Add classes to table <td>s to allow for styling
  $('table td:nth-child(1), table th:first').addClass('first');


// Save us the indignity of having to scroll past the MUN header every time
if ( $('body').hasClass('logged-in') ) {
  $(document).scrollTop( $("#branding").offset().top - 25) ;
} else {
  $(document).scrollTop( $("#branding").offset().top ) ;
};




}); //Last