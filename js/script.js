$(document).ready(function() {
    $('.scrollup').click(function(){
        $('body').animate({scrollTop: 0}, 300);
        return false;
    });
    $('#fullpage').fullpage({
        scrollBar:true,
        verticalCentered:false,
        fixedElements: '.page-nav',
        navigation:true,
        slidesNavigation:true,
        scrollingSpeed:500,
        responsiveWidth:768,
        afterRender:function(){
            slideTimeout = setInterval(function(){
                $.fn.fullpage.moveSlideRight();
            }, 10000);
        },
    });
    
    $('.partners__container').slick({
        autoplay:true,
        autoplaySpeed:5000,
        arrows:false,
        dots:false,
        slidesToShow:5,
        slidesToScroll:5,
        speed:1000,
        autoplaySpeed:5000,
        easing:'swing',
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                }
            },            
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });
});

{

    var myCenter=new google.maps.LatLng(55.788945, 37.72926);

    function initialize(){
        var mapProp = {
            center:myCenter,
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("map"), mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
            icon:'img/map-icon.png',
            size: new google.maps.Size(20, 32)
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

}