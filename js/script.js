$(document).ready(function() {
	
    $('.scrollup').click(function(){
        $('body').animate({scrollTop: 0}, 300);
        return false;
    });
	
    $('#fullpage').fullpage({
        //scrollBar:true,
        verticalCentered:false,
        fixedElements: '.page-nav',
        navigation:true,
        slidesNavigation:true,
	    scrollOverflow: true,
        scrollingSpeed:500,
        //responsiveWidth:1280,
		//responsiveHeight:600,
		//fitToSection:false,
        afterRender:function(){			
            slideTimeout = setInterval(function(){
                $.fn.fullpage.moveSlideRight();
            }, 15000);
        },
    });
    
    $('.partners__container').slick({
        autoplay:true,
        autoplaySpeed:10000,
        arrows:false,
        dots:false,
        slidesToShow:4,
        slidesToScroll:4,
        speed:1000,
        autoplaySpeed:5000,
        easing:'swing',
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },            
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
	
});

{	
    var myCenter=new google.maps.LatLng(54.212438, 37.646569);
    function initialize(){
        var mapProp = {
            center:myCenter,
            scrollwheel:false,
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("map"), mapProp);
        var marker=new google.maps.Marker({
            position:myCenter,
            icon:'/wp-content/themes/steel_wp/img/map-icon.png',
            size: new google.maps.Size(20, 32)
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
}

{
	function init() {
		window.addEventListener('scroll', function(e){
			var distanceY = window.pageYOffset || document.documentElement.scrollTop,
				shrinkOn = 100,
				header = $('.page-nav__wrapper');
			if (distanceY > shrinkOn) {
				$(header).addClass('page-nav__wrapper--small');
				
			} else {
				if ($(header).hasClass('page-nav__wrapper--small')) {
					$(header).removeClass('page-nav__wrapper--small');
				}
			}
		});
	}
	window.onload = init();
}
