$(document).ready(function(){
  $('.screenshot_slider').owlCarousel({
    center: true,
    items:3,
    loop:false, 
    margin:40,
    lazyLoad: true,
    autoplay: false,
    dots: true,
    nav: true,
    autoHeight: true,
    navText: ["<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/owl-prev.png'>","<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/owl-next.png'>"],
    responsive:{
      0:{
        items:4,
        margin:40,
        autoHeight: true
    },
    600:{
      items:3,
      margin:40,
      autoHeight: true
  }
    }
  
  
    
  
  });
  
  
  
  
  $('.owl-carousel-sliudes-icon').owlCarousel({
    center: false,
    loop: true,
    margin: 20,
    // stagingPadding: 0,
    nav: true,
    arrows:true,
    nav: true,
    navText: ["<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/prev-btn.png'>","<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/next-btn.png'>"],
    autoplay: false,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 4,
        margin: 10
      },
      600: {
        items: 5.5
      },
      1000: {
        items: 5.5
      }
    }
  });
  
  $(".stories").click(function(){
    $("#parent-devisible").show();
     });
     $("#close-r-slide").click(function(){
        $("#parent-devisible").hide();
       });
  
       
       const clickableDiv = document.getElementById("clickableDiv");
       const overlay = document.getElementById("overlay");
       const closeButton = document.getElementById("closeButton");
       
       clickableDiv.addEventListener("click", function() {
         overlay.style.display = "block";
       });
       
       closeButton.addEventListener("click", function() {
         overlay.style.display = "none";
       });
  
  
       //-------//
  
       $("#closeButton").click(function(){
        $("#popup").hide();
       });
       
       $("#clickableDiv").click(function(){
        $("#popup").show();
       });
  


     //-------//

     $("#closeButton").click(function(){
      $("#popup").hide();
      $("#overlay").hide();
     });
     
    //  $("#clickableDiv").click(function(){
    //   $("#popup").show();
    //  });

     $(".clickableDiv").click(function(){
      console.log("1212313");
      var dataindex = $(this).parent().data('index');
      console.log(dataindex);
      $('.screenshot_slider').trigger('to.owl.carousel', dataindex)
      $("#overlay").show();
      $(".popupstory").show();
     });

});