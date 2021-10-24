// Code based up FlexSlider Video demo:
// https://flexslider.woothemes.com/video.html
$(document).ready(function() {
  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
  $("#video-slider")
	//.fitVids()
	.flexslider({
  	animation:"slide",
  	useCSS:false,
  	smoothHeight: true,
  	slideshowSpeed: 3000,
	video: true,  
	  before: function(){ $("video").each( function() { $(this).get(0).load(); }); }
  });
});

function pauseslider() { $("#video-slider").flexslider("pause"); }
function playslider() { $("#video-slider").flexslider("play"); }
function resumeslider() { $("#video-slider").flexslider("next"); $("#video-slider").flexslider("play"); }

$(()=>{
  var createSlick = ()=>{
    let slider = $(".slider");

    slider.not('.slick-initialized').slick({
      autoplay: false,
      infinite: false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
	  arrows:false
    });	
  }

  createSlick();
})
