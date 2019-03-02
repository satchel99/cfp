// Scroll To Top
jQuery(document).ready(function() {
	var offset = 220;
	var duration = 500;
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
			jQuery('.scrollup').fadeIn(duration);
			} 
			else {
				jQuery('.scrollup').fadeOut(duration);
			}
		});
		
	jQuery('.scrollup').click(function(event) {
	event.preventDefault();
	jQuery('html, body').animate({scrollTop: 0}, duration);
	return false;
	})
});
//==========================================


// Menu Function
jQuery(document).ready(function () {
	jQuery('nav').meanmenu();
});	

//==========================================


// Scrolling Menu
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('.main-nav a').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('.main-nav a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.main-nav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.main-nav a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
//==========================================


// Owl BG Slider
$(document).ready(function() {
	var owl = $("#owl-slider-bg");
		owl.owlCarousel({
		navigation : false,
		singleItem : true,
		autoPlay : $(this).data('data-auto-play'),
		transitionStyle : "fade"
	});
});
//==========================================


// Check Password
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $(".check-match").html("<i class='fa fa-times'></i>");
    else
        $(".check-match").html("<i class='fa fa-check'></i>");
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});
//==========================================


// Whiteboard Function
window.imgurClientId = 'f32c6385c66b037';
$(document).ready(function(){
  if (window.READTHEDOCS_DATA) {
    LC.setDefaultImageURLPrefix(
      '/' + READTHEDOCS_DATA.language +
      '/' + READTHEDOCS_DATA.version +
      'images/whiteboard-icons');
  } else {
    LC.setDefaultImageURLPrefix('images/whiteboard-icons');
  }
});
//==========================================


// DataTable
$(document).ready(function () {
	$('#dataTables-example').dataTable();
});
//==========================================