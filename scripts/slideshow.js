$(document).ready(function() {
    showSlides()
    function showSlides() {
      var images = [
        "images/slideshow/bigfam.jpg",
        "images/slideshow/3girls.jpg",
        "images/slideshow/ali2.jpg",
        "images/slideshow/asim.jpg",
        "images/slideshow/bowlers.jpg",
        "images/slideshow/goals.jpg",
        "images/slideshow/aliboys.jpg",
        "images/slideshow/fthassan.jpg",
        "images/slideshow/3boys.jpg",


      ];
      var currentIndex = 0;
      if(currentIndex <= images.length){
        setInterval(function(){
          $( "#slideshowImage" ).attr("src", images[currentIndex]);
            currentIndex++;
            if(currentIndex == images.length){
              currentIndex = 0;
            }
        }, 2500);
      }

      var images2 = [
        "images/slideshow/currentEB.jpg",
        "images/slideshow/2girls.jpg",
        "images/slideshow/alisethi.jpg",
        "images/slideshow/sarvar.jpg",
        "images/slideshow/sneak.jpg",
        "images/slideshow/fam.jpg",
        "images/slideshow/carpet.jpg",
        "images/slideshow/cute.jpg",
        "images/slideshow/alihype.jpg",

      ];
      var currentIndex2 = 0;
      if(currentIndex2 <= images2.length){
        setInterval(function(){
          $( "#slideshowImage2" ).attr("src", images2[currentIndex2]);
            currentIndex2++;
            if(currentIndex2 == images2.length){
              currentIndex2 = 0;
            }
        }, 2500);
      }
    }
})
