/* ==========================================================================
   PROJECT
   ========================================================================== */
   
$( "#navproject_main a" ).click(function() {
    if ( $( this ).is( ".active" ) ){}
    else {
        $( this ).parent( "#navproject_main" ).children( "a" ).removeClass( "active" ); // ELIMINA ACTIVE DE NAV
        $( this ).addClass( "active" ); // AÑADE ACTIVE EN NAV

        $( ".project_box" ).hide(); // ELIMINA ACTIVE DE BOX
        if ( $( this ).is(":nth-child(1)") ) { // AÑADE ACTIVE EN EL PRIMER BOX
            $( this ).parent( "#navproject_main" ).next( "#project" ).children( ".project_box:nth-child(1)" ).fadeIn( "slow" );
        }
        if ( $( this ).is(":nth-child(2)") ) { // AÑADE ACTIVE EN EL SEGUNDO BOX
            $( this ).parent( "#navproject_main" ).next( "#project" ).children( ".project_box:nth-child(2)" ).fadeIn( "slow" );
        }
        if ( $( this ).is(":nth-child(3)") ) { // AÑADE ACTIVE EN EL TERCER BOX
            $( this ).parent( "#navproject_main" ).next( "#project" ).children( ".project_box:nth-child(3)" ).fadeIn( "slow" );
        }
    }
});

/* ==========================================================================
   FILTERS
   ========================================================================== */

$( "#filters" ).mixItUp();

/* ==========================================================================
   SCROLL TOP
   ========================================================================== */

// browser window scroll (in pixels) after which the "back to top" link is shown
  var offset = 300,
  //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
  offset_opacity = 1200,
  //duration of the top scrolling animation (in ms)
  scroll_top_duration = 700,
  //grab the "back to top" link
  $back_to_top = $('.cd-top');

//hide or show the "back to top" link
$(window).scroll(function(){
  ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
  if( $(this).scrollTop() > offset_opacity ) { 
    $back_to_top.addClass('cd-fade-out');
  }
});

//smooth scroll to top
$back_to_top.on('click', function(event){
  event.preventDefault();
  $('body,html').animate({
    scrollTop: 0 ,
    }, scroll_top_duration
  );
});