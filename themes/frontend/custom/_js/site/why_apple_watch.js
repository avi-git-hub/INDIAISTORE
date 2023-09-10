// $('.nav-pills li a').click(function (e) {
//   e.preventDefault();
//  $(this).tab('show');

//   //removing active class from other selected/default tab
//  $(".nav-pills li a .active").removeClass("active");

//  //adding active class to current clicked tab
//  $(this).parent().addClass("active");
// });

var elementPosition = $('#fixed').offset();

$(window).scroll(function(){
        if($(window).scrollTop() > elementPosition.top){
              $('#fixed').css('position','fixed').css('top','70px');
        } else {
            $('#fixed').css('position','static');
        }    
});
var util = {
    mobileMenu() {
      $("#nav").toggleClass("nav-visible");
      
    },
    windowResize() {
      if ($(window).width() > 800) {
        $("#nav").removeClass("nav-visible");
      }
    },
    scrollEvent() {
      var scrollPosition = $(document).scrollTop();
      
      $.each(util.scrollMenuIds, function(i) {
        var link = util.scrollMenuIds[i],
            container = $(link).attr("href"),
            containerOffset = $(container).offset().top,
            containerHeight = $(container).outerHeight(),
            containerBottom = containerOffset + containerHeight;
  
        if (scrollPosition < containerBottom - 20 && scrollPosition >= containerOffset - 20) {
          $(link).addClass("active");
        } else {
          $(link).removeClass("active");
        }
      });
    }
  };
  
  $(document).ready(function() {
    
    util.scrollMenuIds = $("a.nav-link[href]");
    $("#menu").click(util.mobileMenu);
    $(window).resize(util.windowResize);
    $(document).scroll(util.scrollEvent);
    
  });
  
var content = $(".section-video");
$(window).on("scroll", function(e) {
    var el = content.filter(function(i, el) {
      return el.getBoundingClientRect().bottom >= parseInt($(el).css("height"))
    })
    , sectionId = el.prev(".section-video").is(content) 
                  ? el.prev(".section-video").attr("id") 
                  : content.eq(-1).attr("id");
    console.log(sectionId);
    if(sectionId == 'section-img-1-d'){
      $("#fixed").css("display","none");
    } else if(sectionId == 'section-img-9'){
      $("#fixed").css("display","none");
    } else {
      $("#fixed").css("display","block");
    }
    if(sectionId == "section1" || sectionId == "section2" || sectionId == "section3" || sectionId == "section4"){
        console.log(1);
        $('.nav-item').removeClass("active");
        $('.nav-item a[href="#section2"]').tab('show');
    } else if(sectionId == "section-img-1" || sectionId == "section-img-2" || sectionId == "section-img-3" || sectionId == "section-img-4" || sectionId == "section-img-5" || sectionId == "section-img-6" || sectionId == "section-img-7"  || sectionId == "section-img-8"){
        console.log(2);
        $('.nav-item').removeClass("active");
        $('.nav-item a[href="#section1"]').tab('show');
    } else {
        console.log(3);
        $('.nav-item').removeClass("active");
        $('.nav-item a[href="#section1"]').tab('show');
    }
}).scroll();
function scrolldivtab1() {
  window.scroll(0, findPosition(document.getElementById("section-img-space-1")));
}
function scrolldivtab2() {
  window.scroll(0, findPosition(document.getElementById("video-heading-video")));
}
function findPosition(obj) {
  var currenttop = 0;
  if (obj.offsetParent) {
      do {
          currenttop += obj.offsetTop;
      } while ((obj = obj.offsetParent));
      return [currenttop];
  }
}
$(document).ready(function(){
    $(".nav-item a").on('click', function(e){
      $(".nav-item a").removeClass('active');
          var id = $(this).attr('id');
          console.log(id);
        
          $("#"+id).addClass("active");
          if(id == 'nav-home-tab'){
            $("#fixed").css("display","block");
            $("#fixed").css("opacity","1");
            scrolldivtab1()
          } else if(id='nav-profile-tab'){
            scrolldivtab2()
          }
    });
});