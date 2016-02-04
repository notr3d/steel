$(document).ready(function() {
    $('#fullpage').fullpage({
        scrollBar:true,
        verticalCentered:false,
        paddingTop:'0px',
        scrollingSpeed:500,
    });
    /*$('.slider').slick({
      autoplay:true,
      autoplaySpeed:2000,
      arrows:false,
      draggable:false,
      fade:true
    });*/
});

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