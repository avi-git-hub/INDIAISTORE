//"use strict";

//loading screen
// $(window).on("load", function () {
//   setTimeout(function () {
//     $(".loaderScreen").fadeOut();
//   }, 500);
// });

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var base_url = $("base").attr("href");
var env = $("base").attr("data-env");

var reloadSource;

var searchAutocomplete = new autoComplete({
  selector: "input#q",
  container: "#search-results",
  minChars: 3,
  delay: 500,
  cache: false,
  source: function inputSource(searchTerm, suggestCallback) {
    reloadSource = function reloadSource(term) {
      inputSource(term, suggestCallback);
    };

    searchTerm = $.trim(searchTerm);

    if (searchTerm) {
      // dynamically fetch results
      $.getJSON("/site/home/get_search_results", { q: searchTerm }, function (data) {
        if (data.length == 0) {
          $(".search-no-result").show();
        }
        suggestCallback(data);
      });
    }

    // data format
    // [product-name, product-page-url]
    // var data = [
    //   ["Iphone 12", "https://www.google.com/iphone12"],
    //   ["Ipad", "https://www.google.com/ipad"],
    // ];
  },
  renderItem: function renderItem(item, search) {
    $(".search-no-result").hide();
    var _val = item[0];
    var _url = item[1];
    search = $.trim(search);

    var _val_match = new RegExp("(" + search + ")", "gi");

    var _val_key = item[0].replace(_val_match, '<span style="color:#ccc;font-weight:normal;">' + search + "</span>");

    return '<div class="autocomplete-suggestion" data-href="' + _url + '" data-val="' + _val + '">' + _val_key + "</div>";
  },
  onSelect: function onSelect(e, term, item) {
    var _url = $(item).data("href");

    //redirect to product page
    window.location.href = _url;
  }
});



/* ***************************** function definitions starts ***************************** */

function convert_to_slug(string) {
  return string.toLowerCase()
  //.replace(/[^\w ]+/g, "")
  .replace(/[^a-zA-Z0-9_ -]+/g, "").replace(/ +/g, "-");
}

function capitalize(s) {
  if (typeof s != "string") {
    return "";
  }

  return s.charAt(0).toUpperCase() + s.slice(1);
}

/* validate mobile no */
function mobileNumber(Number) {
  var IndNum = /^[0]?[6789]\d{9}$/;

  if (IndNum.test(Number)) {
    return true;
  }

  return false;
}

// show the loader whlist processing
// boolean parameter 'toggle'
function processLoader(toggle) {
  if (toggle == true) {
    $(".process_loader").fadeIn();
  } else if (toggle == false) {
    $(".process_loader").fadeOut();
  }

  return true;
}

function addAnimationDelayNavs() {
  $(".accordion > li").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayBottom() {
  $(".misc-links > li").each(function (i) {
    $(this).addClass("animated fadeInUp animationDelay8");
  });
}

function addAnimationDelayIphone() {
  $(".panel.iphone .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}
function addAnimationDelayMac() {
  $(".panel.mac .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayIpad() {
  $(".panel.ipad  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayWatch() {
  $(".panel.watch  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayTv() {
  $(".panel.tv  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayMusic() {
  $(".panel.music  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

//https://goodies.pixabay.com/javascript/auto-complete/demo.html
function closeSearch() {
  $(".search .trending").removeClass("focus");
  $(".search .search-input").removeClass("focus");
  $("#q").blur();
}

function getCurrentPosition(callback) {
  window.localStorage.removeItem("user_location_access");
  window.localStorage.removeItem("user_location_distance");
  window.localStorage.removeItem("user_location_lat");
  window.localStorage.removeItem("user_location_lng");

  if (!navigator.geolocation) {
    console.log("Geolocation is not supported by this browser.");
    return;
  }

  navigator.geolocation.getCurrentPosition(success, error);

  function success(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;

    window.localStorage.setItem("user_location_access", "granted");
    window.localStorage.setItem("user_location_distance", "5");
    window.localStorage.setItem("user_location_lat", lat);
    window.localStorage.setItem("user_location_lng", lng);
    callback();
    toggleLocationBadge();
  }

  function error() {
    if ("permissions" in navigator) {
      if ("query" in navigator.permissions) {
        navigator.permissions.query({
          name: "geolocation"
        }).then(function (result) {
          if (result.state == "granted") {
            window.localStorage.setItem("user_location_access", "granted");
          } else if (result.state == "prompt") {
            window.localStorage.setItem("user_location_access", "prompt");
          } else if (result.state == "denied") {
            window.localStorage.setItem("user_location_access", "denied");
          }
          result.onchange = toggleLocationBadge();
        }).catch(function (error) {
          window.localStorage.setItem("user_location_access", "denied");
          toggleLocationBadge();
        });
        return true;
      }
    }

    window.localStorage.setItem("user_location_access", "denied");
    toggleLocationBadge();
  }
}

function toggleLocationBadge() {
  var location_state = window.localStorage.getItem("user_location_access");
  var badge = $(".ii-icon-map-pin-badge");
  var map_pin = $(".ii-icon-map-pin");
  var classes = "animated flipInY continous-animation";

  if (location_state == "granted") {
    badge.addClass("location-allowed");
    map_pin.removeClass(classes);
  } else if (location_state == "denied") {
    badge.addClass("location-blocked");
    map_pin.removeClass(classes);
  } else {
    badge.removeClass("location-blocked location-allowed");
    map_pin.addClass(classes);
  }
}

function closeVisualCategoryMenu() {
  $(".visual-category-menu .category-item.active").removeClass("active");
  $(".visual-category-menu .product-panels .panel.active").removeClass("active");
  $(".visual-category-menu .category-item").removeClass("not-active");
}

/* ***************************** function definitions ends ***************************** */

/* ***************************** event listners start ***************************** */

$(document).on("click", "header nav .toggle-nav", function (e) {
  e.stopPropagation();
  closeSearch();
  closeVisualCategoryMenu();
  $("header .hamburger-menu").addClass("open");
  $(".accordion > li").addClass("animated fadeInUp");
  setTimeout(function () {
    $(".accordion > li").removeClass("animated fadeInUp");
  }, 2000);
  addAnimationDelayNavs();
  addAnimationDelayBottom();
});

$(document).on("click", "header .hamburger-menu .close-menu .ii-icon-close", function (e) {
  e.stopPropagation();
  $("header .hamburger-menu").removeClass("open");
  $(".accordion > li").removeClass("animated fadeInUp");
  $(".misc-links li").removeClass("animated fadeInUp animationDelay8");
});

// cat nav animation
$(document).on("click", ".category-item .box.iphone", function (e) {
  $(".panel.iphone .product").addClass("animated fadeIn");
  addAnimationDelayIphone();
});

$(document).on("click", ".category-item .box.mac", function (e) {
  $(".panel.mac  .product").addClass("animated fadeIn");
  addAnimationDelayMac();
});

$(document).on("click", ".category-item .box.ipad", function (e) {
  $(".panel.ipad .product").addClass("animated fadeIn");
  addAnimationDelayIpad();
});

$(document).on("click", ".category-item .box.watch", function (e) {
  $(".panel.watch .product").addClass("animated fadeIn");
  addAnimationDelayWatch();
});

$(document).on("click", ".category-item .box.tv", function (e) {
  $(".panel.tv .product").addClass("animated fadeIn");
  addAnimationDelayTv();
});

$(document).on("click", ".category-item .box.music", function (e) {
  $(".panel.music .product").addClass("animated fadeIn");
  addAnimationDelayMusic();
});

// on search focus
$(document).on("focus", "#q", function () {
  closeVisualCategoryMenu();
  $(".search .trending").addClass("focus");
  $(".search .search-input").addClass("focus");
  $(".clear").show();
  $(".search-no-result").hide();
});
// remove focus
$(document).on("click", function (e) {
  var target = $(e.target).closest(".search").length;
  if (target == 0) {
    $(".search-no-result").hide();
    closeSearch();
  }
});
// on search change
$(document).on("change keyup", "#q", function () {
  var _val = $(this).val().length;
  $(".search .trending").attr("data-search", _val);
  $(".search-no-result").hide();
});

// select trending item
$(document).on("click", ".trending .item", function (e) {
  e.stopPropagation();
  var _url = $(this).data("href");
  window.location.href = _url;

  //redirect to product page
  // var value = $(this).text();
  // $("#q").val(value);
  // $("#q").focus();
  // $(".search .trending").attr("data-search", value.length);
  // reloadSource(value);
});
// clear search
$(document).on("click", ".search .clear", function (e) {
  e.stopPropagation();
  // if (!$("#q").val()) {
  // } else {
  // }
  $(".search .trending").removeClass("focus");
  $(".clear").hide();

  // $("#q").focus();
  $(".search-no-result").hide();
  $("#q").val("");
  $(".search .trending").attr("data-search", 0);
  console.log("clean");
});
$(document).on("click", ".search .floating-search", function (e) {
  e.stopPropagation();
  closeVisualCategoryMenu();
  $("html, body").animate({
    scrollTop: 0 //$("section.search").offset().top - 50
  }, 500, function () {
    $("#q").focus();
    $(".search .trending").addClass("focus");
    $(".search .search-input").addClass("focus");
  });
});
$(window).scroll(function (event) {
  if ($("#q").length > 0) {
    var st = $(this).scrollTop();
    var qt = $("#q").offset().top;
    var wh = $(window).height();
    // if (st > qt + 100) {
    //   $(".search .floating-search").addClass("show");
    // } else {
    //   $(".search .floating-search").removeClass("show");
    // }
  }
});

$(document).on("click", ".visual-category-menu .category-item:not(.active)", function (e) {
  e.stopPropagation();
  closeSearch();
  $(".visual-category-menu .category-item.active").removeClass("active");
  $(".visual-category-menu .product-panels .panel.active").removeClass("active");
  var index = $(this).closest(".slider-item").index() + 1;
  $(this).addClass("active");
  $(".visual-category-menu .product-panels .listing > .panel:nth-child(" + index + ")").addClass("active");
});

$(document).on("click", ".visual-category-menu .category-item.active", function (e) {
  e.stopPropagation();
  closeSearch();
  closeVisualCategoryMenu();
});

//hide cat. menu when click outside
$(document).on("click", function (e) {
  e.stopPropagation();
  closeVisualCategoryMenu();
});

// hidding the cat menu on scroll
$(window).scroll(function () {
  if ($(this).scrollTop() > 300) {
    $(".visual-category-menu").fadeOut();
  } else {
    $(".visual-category-menu").fadeIn();
  }

  if ($(this).scrollTop() > 50) {
    $(".search-container").addClass("hide-input");
  } else {
    $(".search-container").removeClass("hide-input");
  }
});

//servify
$(document).on("click", ".servify-btn", function (e) {
  var win = window.open("https://tradein.servify.tech/?source=indiaistore", "_blank");
  if (win) win.focus();else alert("Please allow popups for this website");
});

//close instruction_wrapper on btn click
$(document).on("click", ".instruction_wrapper .btn", function () {
  $(".instruction_wrapper").hide(500);
  $("body").css({ "overflow-y": "auto" });
});

$(document).on("click", ".store_sms_modal_btn", function (e) {
  e.preventDefault();

  var store = $(this).parents(".details");
  var name = $.trim(store.find(".name").text());
  var address = $.trim(store.find(".address").text());
  var pincode = $.trim(store.find(".pincode").val());
  var is_open = $.trim(store.find(".is_open").val());
  var phone = $.trim(store.find(".num-link a:first").text());
  var store_type = $(this).parents(".store").attr("data-store-type");

  $("#field_sms_store_name").val(name);
  $("#field_sms_store_address").val(address);
  $("#field_sms_store_pincode").val(pincode);
  $("#field_sms_store_phone").val(phone);
  $("#field_sms_store_is_open").val(is_open);
  $("#field_sms_store_type").val(store_type);

  $("#store_sms_modal").modal("show");
});

$(document).on("keypress", "#field_sms_mob_num", function (e) {
  var a = [];
  var k = e.which;

  for (i = 48; i < 58; i++) {
    a.push(i);
  }if (a.indexOf(k) < 0) {
    e.preventDefault();
  }
});

$(document).on("click", "#store_send_sms_btn", function (e) {
  e.preventDefault();

  var field_mob_num = $.trim($("#field_sms_mob_num").val());

  var field_store_name = $.trim($("#field_sms_store_name").val());
  var field_store_address = $.trim($("#field_sms_store_address").val());
  var field_store_pincode = $.trim($("#field_sms_store_pincode").val());
  var field_store_phone = $.trim($("#field_sms_store_phone").val());
  var field_store_is_open = $.trim($("#field_sms_store_is_open").val());

  if (field_mob_num != "" && field_store_name != "" && field_store_address != "" && field_store_pincode != "") {
    if (mobileNumber(field_mob_num)) {
      $(".field_sms_msg").removeClass("alert-danger").empty().hide();

      var base_url = $("base").attr("href");

      $(this).attr("disabled", "disabled");

      $.ajax({
        data: {
          ph: field_mob_num,
          store_name: field_store_name,
          store_address: field_store_address,
          store_pincode: field_store_pincode,
          store_phone: field_store_phone,
          store_is_open: field_store_is_open
        },
        dataType: "json",
        type: "post",
        url: base_url + "store-locator/api-send-sms",
        success: function success(response) {
          $(".field_sms_msg").addClass(response.status === true ? "alert-success" : "alert-danger").html(response.message).show(500);

          $("#store_send_sms_btn").prop("disabled", false);

          $("#field_sms_mob_num").val("");
        },
        error: function error(_error) {
          $("#store_send_sms_btn").prop("disabled", false);
        }
      });
    } else {
      $(".field_sms_msg").addClass("alert-danger").html("Please enter a valid 10 digit mobile number").show(500);
    }
  } else {
    $(".field_sms_msg").addClass("alert-danger").html("Please provide your mobile number").show(500);
  }
});

$(document).on("hidden.bs.modal", "#store_sms_modal", function () {
  $("#field_sms_mob_num").val("");

  $("#store_send_sms_btn").prop("disabled", false);

  $(".field_sms_msg").removeClass("alert-danger alert-success").empty().hide();
});

/* ***************************** event listners start ***************************** */

$(document).ready(function () {

  // visual category menu
if ($(".visual-category-menu .slider").length > 0) {
  var _tns;

  var categoryMenuSlider = tns((_tns = {
    container: ".visual-category-menu .slider",
    items: 4.6,
    slideBy: "page",
    autoplay: false,
    gutter: 0,
    nav: false,
    controls: false,
    loop: false
  }, _defineProperty(_tns, "controls", false), _defineProperty(_tns, "responsive", {
    768: { items: 6 }
  }), _tns));
}


  getCurrentPosition(function () {});

  //apple devices no permission chrome
  toggleLocationBadge();

  $(".search .trending").each(function () {
    var $list = $(this);
    $list.find(".item:gt(5)").hide();
    if ($list.find(".item").length > 6) {
      $list.append('<a href="javascript:void(0);" class="discover more_less">Discover More</a>');
    }
  });

  $(".more_less").click(function () {
    var $btn = $(this);
    $(".search .trending").find(".item:gt(5)").slideToggle("fast");
    $btn.text($btn.text() == "Discover More" ? "Show Less" : "Discover More");
  });

  $("#tns1-mw .slider-item").click(function () {
    $(".category-item").addClass("not-active");
  });

  setTimeout(function () {
    //cashify
    document._cashify = document._cashify || {
      account: "cbf0c4176ca9537c378b0fc870b3f5e3",
      env: "prod",
      onLoad: function onLoad() {
        // use cashify-btn class to load mobile category on cashify
        $(document).on("click", ".cashify-btn", function (e) {
          // console.log("Clicked");
          e.preventDefault();
          CSH.showPopupFromRight();
          return false;
        });

        // use cashify-laptop-btn class to load mobile category on cashify
        $(document).on("click", ".cashify-laptop-btn", function (e) {
          // console.log("Clicked");
          e.preventDefault();
          CSH.showPopupFromRight({ category: "laptop" });
          return false;
        });
      }
    };

    (function (d, s, id) {
      var js,
          cshjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "https://s3n.cashify.in/lego/sdk/1.0.6/sdk.min.js";
      cshjs.parentNode.insertBefore(js, cshjs);
    })(document, "script", "csh-lego-jssdk");
  }, 0);
     var categoryListingSlider = tns({
  container: ".category-listing-carousel-icici .slider",
  items: 2,
  slideBy: "page",
  autoplay: false,
  gutter: 10,
  nav: false,
  controls: true,
    arrowKeys: true,
  loop: true,
  responsive: {
    768: { items: 3, mouseDrag: true, loop: true },
  },
});
});


//searchbarjs//

if (navigator.userAgent.match(/Android/i)

      // || navigator.userAgent.match(/webOS/i)

      || navigator.userAgent.match(/iPhone/i)

      || navigator.userAgent.match(/iPad/i)

      || navigator.userAgent.match(/iPod/i)

      || navigator.userAgent.match(/BlackBerry/i)

      || navigator.userAgent.match(/Windows Phone/i)) {


      } else {

        const texts = ['Locate a store near you…','Explore offers on iPhone 14','Explore offers on Mac'];
const input = document.querySelector('#q');
const animationWorker = function (input, texts) {
  this.input = input;
  this.defaultPlaceholder = this.input.getAttribute('placeholder');
  this.texts = texts;
  this.curTextNum = 0;
  this.curPlaceholder = '';
  this.blinkCounter = 0;
  this.animationFrameId = 0;
  this.animationActive = false;
  this.input.setAttribute('placeholder',this.curPlaceholder);

  this.switch = (timeout) => {
    this.input.classList.add('imitatefocus');
    setTimeout(
      () => { 
        this.input.classList.remove('imitatefocus');
        if (this.curTextNum == 0) 
          this.input.setAttribute('placeholder',this.defaultPlaceholder);
        else
          this.input.setAttribute('placeholder',this.curPlaceholder);

        setTimeout(
          () => { 
            this.input.setAttribute('placeholder',this.curPlaceholder);
            if(this.animationActive) 
              this.animationFrameId = window.requestAnimationFrame(this.animate)}, 
          timeout);
      }, 
      timeout);
  }

  this.animate = () => {
    if(!this.animationActive) return;
    let curPlaceholderFullText = this.texts[this.curTextNum];
    let timeout = 100;
    if (this.curPlaceholder == curPlaceholderFullText+'|' && this.blinkCounter==3) {
      this.blinkCounter = 0;
      this.curTextNum = (this.curTextNum >= this.texts.length-1)? 0 : this.curTextNum+1;
      this.curPlaceholder = '|';
      this.switch(100);
      return;
    }
    else if (this.curPlaceholder == curPlaceholderFullText+'|' && this.blinkCounter<3) {
      this.curPlaceholder = curPlaceholderFullText;
      this.blinkCounter++;
    }
    else if (this.curPlaceholder == curPlaceholderFullText && this.blinkCounter<3) {
      this.curPlaceholder = this.curPlaceholder+'|';
    }
    else {
      this.curPlaceholder = curPlaceholderFullText
        .split('')
        .slice(0,this.curPlaceholder.length+1)
        .join('') + '|';
      timeout = 150;
    }
    this.input.setAttribute('placeholder',this.curPlaceholder);
    setTimeout(
      () => { if(this.animationActive) this.animationFrameId = window.requestAnimationFrame(this.animate)}, 
      timeout);
  }

  this.stop = () => {
    this.animationActive = false;
    window.cancelAnimationFrame(this.animationFrameId);
  }

  this.start = () => {
    this.animationActive = true;
    this.animationFrameId = window.requestAnimationFrame(this.animate);
    return this;
  }
}

document.addEventListener("DOMContentLoaded", () => {
  let aw = new animationWorker(input, texts).start();
  input.addEventListener("focus", (e) => aw.stop());
  input.addEventListener("blur", (e) => {
    aw = new animationWorker(input, texts);
    if(e.target.value == '') setTimeout( aw.start, 2000);
  });
});


      }








// Effective Price Calculator
/* $(".effective-price-calculator").each(function () {
  tns({
    container: $(this).find(".selection.image .slider").get(0),
    items: 4.2,
    slideBy: "page",
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: false,
    loop: false,
    responsive: {
      768: { items: 6.5, mouseDrag: true },
    },
  });
});

function getSelectedModels(_containerElem) {
  var _models = [];
  _containerElem.find(".selection.image .model.selected").each(function () {
    _models.push($(this).data("value"));
  });
  return _models;
}
function getSelectedStorage(_containerElem) {
  var _storage = [];
  _containerElem.find(".selection.rect .attribute.selected").each(function () {
    _storage.push($(this).data("value"));
  });
  return _storage;
}
function getSelectedColors(_containerElem) {
  var _colors = [];
  _containerElem
    .find(".selection.color .color-item.selected")
    .each(function () {
      _colors.push($(this).data("value"));
    });
  return _colors;
}
$(document).on(
  "click",
  ".effective-price-calculator .selection.image .model",
  function (e) {
    e.stopPropagation();
    var _containerElem = $(this).closest(".effective-price-calculator");
    $(".selection.image .model.selected").not(this).removeClass("selected");
    $(this).toggleClass("selected");
    var selectedModels = getSelectedModels(_containerElem);
    console.log(selectedModels);
  }
);

$(document).on(
  "click",
  ".effective-price-calculator .selection.rect .attribute",
  function (e) {
    e.stopPropagation();
    var _containerElem = $(this).closest(".effective-price-calculator");
    $(".selection.rect .attribute.selected").not(this).removeClass("selected");
    $(this).toggleClass("selected");
    var selectedStorage = getSelectedStorage(_containerElem);
    console.log(selectedStorage);
  }
);

$(document).on(
  "click",
  ".effective-price-calculator .selection.color .color-item",
  function (e) {
    e.stopPropagation();
    var _containerElem = $(this).closest(".effective-price-calculator");
    $(".selection.color .color-item.selected")
      .not(this)
      .removeClass("selected");
    $(this).toggleClass("selected");
    var selectedColors = getSelectedColors(_containerElem);
    console.log(selectedColors);
  }
); */

//loading screen
$(window).on("load", function () {
  setTimeout(function () {
    $(".loaderScreen").fadeOut();
  }, 500);
});

var base_url = $("base").attr("href");
var env = $("base").attr("data-env");

var reloadSource;

var searchAutocomplete = new autoComplete({
  selector: "input#q",
  container: "#search-results",
  minChars: 3,
  delay: 500,
  cache: false,
  source: function inputSource(searchTerm, suggestCallback) {
    reloadSource = function (term) {
      inputSource(term, suggestCallback);
    };

    searchTerm = $.trim(searchTerm);

    if (searchTerm) {
      // dynamically fetch results
      $.getJSON("/site/home/get_search_results", { q: searchTerm }, function (data) {
        if (data.length == 0) {
          $(".search-no-result").show();
        }
        suggestCallback(data);
      });
    }

    // data format
    // [product-name, product-page-url]
    // var data = [
    //   ["Iphone 12", "https://www.google.com/iphone12"],
    //   ["Ipad", "https://www.google.com/ipad"],
    // ];
  },
  renderItem: function (item, search) {
    $(".search-no-result").hide();
    var _val = item[0];
    var _url = item[1];
    search = $.trim(search);

    var _val_match = new RegExp("(" + search + ")", "gi");

    var _val_key = item[0].replace(_val_match, '<span style="color:#ccc;font-weight:normal;">' + search + "</span>");

    return '<div class="autocomplete-suggestion" data-href="' + _url + '" data-val="' + _val + '">' + _val_key + "</div>";
  },
  onSelect: function (e, term, item) {
    var _url = $(item).data("href");

    //redirect to product page
    window.location.href = _url;
  },
});

/* ***************************** function definitions starts ***************************** */

function convert_to_slug(string) {
  return (
    string
      .toLowerCase()
      //.replace(/[^\w ]+/g, "")
      .replace(/[^a-zA-Z0-9_ -]+/g, "")
      .replace(/ +/g, "-")
  );
}

function capitalize(s) {
  if (typeof s != "string") {
    return "";
  }

  return s.charAt(0).toUpperCase() + s.slice(1);
}

/* validate mobile no */
function mobileNumber(Number) {
  const IndNum = /^[0]?[6789]\d{9}$/;

  if (IndNum.test(Number)) {
    return true;
  }

  return false;
}

// show the loader whlist processing
// boolean parameter 'toggle'
function processLoader(toggle) {
  if (toggle == true) {
    $(".process_loader").fadeIn();
  } else if (toggle == false) {
    $(".process_loader").fadeOut();
  }

  return true;
}

function addAnimationDelayNavs() {
  $(".accordion > li").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayBottom() {
  $(".misc-links > li").each(function (i) {
    $(this).addClass("animated fadeInUp animationDelay8");
  });
}

function addAnimationDelayIphone() {
  $(".panel.iphone .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}
function addAnimationDelayMac() {
  $(".panel.mac .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayIpad() {
  $(".panel.ipad  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayWatch() {
  $(".panel.watch  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayTv() {
  $(".panel.tv  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

function addAnimationDelayMusic() {
  $(".panel.music  .product").each(function (i) {
    $(this).addClass("animationDelay" + i);
  });
}

//https://goodies.pixabay.com/javascript/auto-complete/demo.html
function closeSearch() {
  $(".search .trending").removeClass("focus");
  $(".search .search-input").removeClass("focus");
  $("#q").blur();
}

function getCurrentPosition(callback) {
  window.localStorage.removeItem("user_location_access");
  window.localStorage.removeItem("user_location_distance");
  window.localStorage.removeItem("user_location_lat");
  window.localStorage.removeItem("user_location_lng");

  if (!navigator.geolocation) {
    console.log("Geolocation is not supported by this browser.");
    return;
  }

  navigator.geolocation.getCurrentPosition(success, error);

  function success(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;

    window.localStorage.setItem("user_location_access", "granted");
    window.localStorage.setItem("user_location_distance", "5");
    window.localStorage.setItem("user_location_lat", lat);
    window.localStorage.setItem("user_location_lng", lng);
    callback();
    toggleLocationBadge();
  }

  function error() {
    if ("permissions" in navigator) {
      if ("query" in navigator.permissions) {
        navigator.permissions
          .query({
            name: "geolocation",
          })
          .then(function (result) {
            if (result.state == "granted") {
              window.localStorage.setItem("user_location_access", "granted");
            } else if (result.state == "prompt") {
              window.localStorage.setItem("user_location_access", "prompt");
            } else if (result.state == "denied") {
              window.localStorage.setItem("user_location_access", "denied");
            }
            result.onchange = toggleLocationBadge();
          })
          .catch(function (error) {
            window.localStorage.setItem("user_location_access", "denied");
            toggleLocationBadge();
          });
        return true;
      }
    }

    window.localStorage.setItem("user_location_access", "denied");
    toggleLocationBadge();
  }
}

function toggleLocationBadge() {
  var location_state = window.localStorage.getItem("user_location_access");
  var badge = $(".ii-icon-map-pin-badge");
  var map_pin = $(".ii-icon-map-pin");
  var classes = "animated flipInY continous-animation";

  if (location_state == "granted") {
    badge.addClass("location-allowed");
    map_pin.removeClass(classes);
  } else if (location_state == "denied") {
    badge.addClass("location-blocked");
    map_pin.removeClass(classes);
  } else {
    badge.removeClass("location-blocked location-allowed");
    map_pin.addClass(classes);
  }
}

function closeVisualCategoryMenu() {
  $(".visual-category-menu .category-item.active").removeClass("active");
  $(".visual-category-menu .product-panels .panel.active").removeClass("active");
  $(".visual-category-menu .category-item").removeClass("not-active");
}

/* ***************************** function definitions ends ***************************** */

/* ***************************** event listners start ***************************** */

$(document).on("click", "header nav .toggle-nav", function (e) {
  e.stopPropagation();
  closeSearch();
  closeVisualCategoryMenu();
  $("header .hamburger-menu").addClass("open");
  $(".accordion > li").addClass("animated fadeInUp");
  setTimeout(function () {
    $(".accordion > li").removeClass("animated fadeInUp");
  }, 2000);
  addAnimationDelayNavs();
  addAnimationDelayBottom();
});

$(document).on("click", "header .hamburger-menu .close-menu .ii-icon-close", function (e) {
  e.stopPropagation();
  $("header .hamburger-menu").removeClass("open");
  $(".accordion > li").removeClass("animated fadeInUp");
  $(".misc-links li").removeClass("animated fadeInUp animationDelay8");
});

// cat nav animation
$(document).on("click", ".category-item .box.iphone", function (e) {
  $(".panel.iphone .product").addClass("animated fadeIn");
  addAnimationDelayIphone();
});

$(document).on("click", ".category-item .box.mac", function (e) {
  $(".panel.mac  .product").addClass("animated fadeIn");
  addAnimationDelayMac();
});

$(document).on("click", ".category-item .box.ipad", function (e) {
  $(".panel.ipad .product").addClass("animated fadeIn");
  addAnimationDelayIpad();
});

$(document).on("click", ".category-item .box.watch", function (e) {
  $(".panel.watch .product").addClass("animated fadeIn");
  addAnimationDelayWatch();
});

$(document).on("click", ".category-item .box.tv", function (e) {
  $(".panel.tv .product").addClass("animated fadeIn");
  addAnimationDelayTv();
});

$(document).on("click", ".category-item .box.music", function (e) {
  $(".panel.music .product").addClass("animated fadeIn");
  addAnimationDelayMusic();
});

// on search focus
$(document).on("focus", "#q", function () {
  closeVisualCategoryMenu();
  $(".search .trending").addClass("focus");
  $(".search .search-input").addClass("focus");
  $(".clear").show();
  $(".search-no-result").hide();
});
// remove focus
$(document).on("click", function (e) {
  var target = $(e.target).closest(".search").length;
  if (target == 0) {
    $(".search-no-result").hide();
    closeSearch();
  }
});
// on search change
$(document).on("change keyup", "#q", function () {
  var _val = $(this).val().length;
  $(".search .trending").attr("data-search", _val);
  $(".search-no-result").hide();
});

// select trending item
$(document).on("click", ".trending .item", function (e) {
  e.stopPropagation();
  var _url = $(this).data("href");
  window.location.href = _url;

  //redirect to product page
  // var value = $(this).text();
  // $("#q").val(value);
  // $("#q").focus();
  // $(".search .trending").attr("data-search", value.length);
  // reloadSource(value);
});
// clear search
$(document).on("click", ".search .clear", function (e) {
  e.stopPropagation();
  // if (!$("#q").val()) {
  // } else {
  // }
  $(".search .trending").removeClass("focus");
  $(".clear").hide();

  // $("#q").focus();
  $(".search-no-result").hide();
  $("#q").val("");
  $(".search .trending").attr("data-search", 0);
  console.log("clean");
});
$(document).on("click", ".search .floating-search", function (e) {
  e.stopPropagation();
  closeVisualCategoryMenu();
  $("html, body").animate(
    {
      scrollTop: 0, //$("section.search").offset().top - 50
    },
    500,
    function () {
      $("#q").focus();
      $(".search .trending").addClass("focus");
      $(".search .search-input").addClass("focus");
    }
  );
});
$(window).scroll(function (event) {
  if ($("#q").length > 0) {
    var st = $(this).scrollTop();
    var qt = $("#q").offset().top;
    var wh = $(window).height();
    // if (st > qt + 100) {
    //   $(".search .floating-search").addClass("show");
    // } else {
    //   $(".search .floating-search").removeClass("show");
    // }
  }
});

$(document).on("click", ".visual-category-menu .category-item:not(.active)", function (e) {
  e.stopPropagation();
  closeSearch();
  $(".visual-category-menu .category-item.active").removeClass("active");
  $(".visual-category-menu .product-panels .panel.active").removeClass("active");
  var index = $(this).closest(".slider-item").index() + 1;
  $(this).addClass("active");
  $(".visual-category-menu .product-panels .listing > .panel:nth-child(" + index + ")").addClass("active");
});

$(document).on("click", ".visual-category-menu .category-item.active", function (e) {
  e.stopPropagation();
  closeSearch();
  closeVisualCategoryMenu();
});

//hide cat. menu when click outside
$(document).on("click", function (e) {
  e.stopPropagation();
  closeVisualCategoryMenu();
});

// hidding the cat menu on scroll
$(window).scroll(function () {
  if ($(this).scrollTop() > 300) {
    $(".visual-category-menu").fadeOut();
  } else {
    $(".visual-category-menu").fadeIn();
  }

  if ($(this).scrollTop() > 50) {
    $(".search-container").addClass("hide-input");
  } else {
    $(".search-container").removeClass("hide-input");
  }
});

//servify
$(document).on("click", ".servify-btn", function (e) {
  var win = window.open("https://tradein.servify.tech/?source=indiaistore", "_blank");
  if (win) win.focus();
  else alert("Please allow popups for this website");
});

//close instruction_wrapper on btn click
$(document).on("click", ".instruction_wrapper .btn", function () {
  $(".instruction_wrapper").hide(500);
  $("body").css({ "overflow-y": "auto" });
});

$(document).on("click", ".store_sms_modal_btn", function (e) {
  e.preventDefault();

  const store = $(this).parents(".details");
  let name = $.trim(store.find(".name").text());
  let address = $.trim(store.find(".address").text());
  let pincode = $.trim(store.find(".pincode").val());
  let is_open = $.trim(store.find(".is_open").val());
  let phone = $.trim(store.find(".num-link a:first").text());
  let store_type = $(this).parents(".store").attr("data-store-type");

  $("#field_sms_store_name").val(name);
  $("#field_sms_store_address").val(address);
  $("#field_sms_store_pincode").val(pincode);
  $("#field_sms_store_phone").val(phone);
  $("#field_sms_store_is_open").val(is_open);
  $("#field_sms_store_type").val(store_type);

  $("#store_sms_modal").modal("show");
});

$(document).on("keypress", "#field_sms_mob_num", function (e) {
  var a = [];
  var k = e.which;

  for (i = 48; i < 58; i++) a.push(i);

  if (a.indexOf(k) < 0) {
    e.preventDefault();
  }
});

$(document).on("click", "#store_send_sms_btn", function (e) {
  e.preventDefault();

  var field_mob_num = $.trim($("#field_sms_mob_num").val());

  var field_store_name = $.trim($("#field_sms_store_name").val());
  var field_store_address = $.trim($("#field_sms_store_address").val());
  var field_store_pincode = $.trim($("#field_sms_store_pincode").val());
  var field_store_phone = $.trim($("#field_sms_store_phone").val());
  var field_store_is_open = $.trim($("#field_sms_store_is_open").val());

  if (field_mob_num != "" && field_store_name != "" && field_store_address != "" && field_store_pincode != "") {
    if (mobileNumber(field_mob_num)) {
      $(".field_sms_msg").removeClass("alert-danger").empty().hide();

      var base_url = $("base").attr("href");

      $(this).attr("disabled", "disabled");

      $.ajax({
        data: {
          ph: field_mob_num,
          store_name: field_store_name,
          store_address: field_store_address,
          store_pincode: field_store_pincode,
          store_phone: field_store_phone,
          store_is_open: field_store_is_open,
        },
        dataType: "json",
        type: "post",
        url: base_url + "store-locator/api-send-sms",
        success: function (response) {
          $(".field_sms_msg")
            .addClass(response.status === true ? "alert-success" : "alert-danger")
            .html(response.message)
            .show(500);

          $("#store_send_sms_btn").prop("disabled", false);

          $("#field_sms_mob_num").val("");
        },
        error: function (error) {
          $("#store_send_sms_btn").prop("disabled", false);
        },
      });
    } else {
      $(".field_sms_msg").addClass("alert-danger").html("Please enter a valid 10 digit mobile number").show(500);
    }
  } else {
    $(".field_sms_msg").addClass("alert-danger").html("Please provide your mobile number").show(500);
  }
});

$(document).on("hidden.bs.modal", "#store_sms_modal", function () {
  $("#field_sms_mob_num").val("");

  $("#store_send_sms_btn").prop("disabled", false);

  $(".field_sms_msg").removeClass("alert-danger alert-success").empty().hide();
});

/* ***************************** event listners start ***************************** */

$(document).ready(function () {

  // visual category menu
if ($(".visual-category-menu .slider").length > 0) {
  var categoryMenuSlider = tns({
    container: ".visual-category-menu .slider",
    items: 4,
    slideBy: "page",
    autoplay: false,
    gutter: 0,
    nav: false,
    controls: false,
    loop: false,
    controls: false,
    responsive: {
      768: { items: 6 },
    },
  });
}

  getCurrentPosition(function () {});

  //apple devices no permission chrome
  toggleLocationBadge();

  $(".search .trending").each(function () {
    var $list = $(this);
    $list.find(".item:gt(5)").hide();
    if ($list.find(".item").length > 6) {
      $list.append('<a href="javascript:void(0);" class="discover more_less">Discover More</a>');
    }
  });

  $(".more_less").click(function () {
    var $btn = $(this);
    $(".search .trending").find(".item:gt(5)").slideToggle("fast");
    $btn.text($btn.text() == "Discover More" ? "Show Less" : "Discover More");
  });

  $("#tns1-mw .slider-item").click(function () {
    $(".category-item").addClass("not-active");
  });

  setTimeout(function () {
    //cashify
    document._cashify = document._cashify || {
      account: "cbf0c4176ca9537c378b0fc870b3f5e3",
      env: "prod",
      onLoad: function () {
        // use cashify-btn class to load mobile category on cashify
        $(document).on("click", ".cashify-btn", function (e) {
          // console.log("Clicked");
          e.preventDefault();
          CSH.showPopupFromRight();
          return false;
        });

        // use cashify-laptop-btn class to load mobile category on cashify
        $(document).on("click", ".cashify-laptop-btn", function (e) {
          // console.log("Clicked");
          e.preventDefault();
          CSH.showPopupFromRight({ category: "laptop" });
          return false;
        });

        $(document).on("click", ".cashify-watch-btn", function (e) {
          console.log("Clicked");
          e.preventDefault();
          CSH.showPopupFromRight({ category: "smartwatch" });
          return false;
        });
      },
    };

    (function (d, s, id) {
      var js,
        cshjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "https://s3n.cashify.in/lego/sdk/1.0.6/sdk.min.js";
      cshjs.parentNode.insertBefore(js, cshjs);
    })(document, "script", "csh-lego-jssdk");
  }, 0);
    var categoryListingSlider = tns({
  container: ".category-listing-carousel-icici .slider",
  items: 2,
  slideBy: "page",
  autoplay: false,
  gutter: 10,
  nav: false,
  controls: true,
    arrowKeys: true,
  loop: true,
  responsive: {
    768: { items: 3, mouseDrag: true, loop: true },
  },
});
});

// Effective Price Calculator
/* $(".effective-price-calculator").each(function () {
  tns({
    container: $(this).find(".selection.image .slider").get(0),
    items: 4.2,
    slideBy: "page",
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: false,
    loop: false,
    responsive: {
      768: { items: 6.5, mouseDrag: true },
    },
  });
});

function getSelectedModels(_containerElem) {
  var _models = [];
  _containerElem.find(".selection.image .model.selected").each(function () {
    _models.push($(this).data("value"));
  });
  return _models;
}
function getSelectedStorage(_containerElem) {
  var _storage = [];
  _containerElem.find(".selection.rect .attribute.selected").each(function () {
    _storage.push($(this).data("value"));
  });
  return _storage;
}
function getSelectedColors(_containerElem) {
  var _colors = [];
  _containerElem
    .find(".selection.color .color-item.selected")
    .each(function () {
      _colors.push($(this).data("value"));
    });
  return _colors;
}
$(document).on(
  "click",
  ".effective-price-calculator .selection.image .model",
  function (e) {
    e.stopPropagation();
    var _containerElem = $(this).closest(".effective-price-calculator");
    $(".selection.image .model.selected").not(this).removeClass("selected");
    $(this).toggleClass("selected");
    var selectedModels = getSelectedModels(_containerElem);
    console.log(selectedModels);
  }
);

$(document).on(
  "click",
  ".effective-price-calculator .selection.rect .attribute",
  function (e) {
    e.stopPropagation();
    var _containerElem = $(this).closest(".effective-price-calculator");
    $(".selection.rect .attribute.selected").not(this).removeClass("selected");
    $(this).toggleClass("selected");
    var selectedStorage = getSelectedStorage(_containerElem);
    console.log(selectedStorage);
  }
);

$(document).on(
  "click",
  ".effective-price-calculator .selection.color .color-item",
  function (e) {
    e.stopPropagation();
    var _containerElem = $(this).closest(".effective-price-calculator");
    $(".selection.color .color-item.selected")
      .not(this)
      .removeClass("selected");
    $(this).toggleClass("selected");
    var selectedColors = getSelectedColors(_containerElem);
    console.log(selectedColors);
  }
); */


// var p = 0;

// var dmpos = 0;

// var arr = ['One stop destination', 'For exclusive offers on Apple Products'];
// var len = arr.length - 1;



// var t = setInterval(function(){
//     if(dmpos > len)
//     {
//         //dmpos = 0;
//         document.getElementById('preloader').style.display = 'none';
//         clearInterval(t);
//         $('.preloader').hide();
//     }
//     else if(dmpos <= len)
//     {
//         document.getElementById('dmtext').innerHTML = arr[dmpos];
//         dmpos = dmpos + 1;

//         console.log(arr[dmpos]);
//     }
// }, 1000);




//searchbarjs//

if (navigator.userAgent.match(/Android/i)

      // || navigator.userAgent.match(/webOS/i)

      || navigator.userAgent.match(/iPhone/i)

      || navigator.userAgent.match(/iPad/i)

      || navigator.userAgent.match(/iPod/i)

      || navigator.userAgent.match(/BlackBerry/i)

      || navigator.userAgent.match(/Windows Phone/i)) {


      } else {

        const texts = ['Locate a store near you…','Explore offers on iPhone','Explore offers on Mac'];
const input = document.querySelector('#q');
const animationWorker = function (input, texts) {
  this.input = input;
  this.defaultPlaceholder = this.input.getAttribute('placeholder');
  this.texts = texts;
  this.curTextNum = 0;
  this.curPlaceholder = '';
  this.blinkCounter = 0;
  this.animationFrameId = 0;
  this.animationActive = false;
  this.input.setAttribute('placeholder',this.curPlaceholder);

  this.switch = (timeout) => {
    this.input.classList.add('imitatefocus');
    setTimeout(
      () => { 
        this.input.classList.remove('imitatefocus');
        if (this.curTextNum == 0) 
          this.input.setAttribute('placeholder',this.defaultPlaceholder);
        else
          this.input.setAttribute('placeholder',this.curPlaceholder);

        setTimeout(
          () => { 
            this.input.setAttribute('placeholder',this.curPlaceholder);
            if(this.animationActive) 
              this.animationFrameId = window.requestAnimationFrame(this.animate)}, 
          timeout);
      }, 
      timeout);
  }

  this.animate = () => {
    if(!this.animationActive) return;
    let curPlaceholderFullText = this.texts[this.curTextNum];
    let timeout = 100;
    if (this.curPlaceholder == curPlaceholderFullText+'|' && this.blinkCounter==3) {
      this.blinkCounter = 0;
      this.curTextNum = (this.curTextNum >= this.texts.length-1)? 0 : this.curTextNum+1;
      this.curPlaceholder = '|';
      this.switch(100);
      return;
    }
    else if (this.curPlaceholder == curPlaceholderFullText+'|' && this.blinkCounter<3) {
      this.curPlaceholder = curPlaceholderFullText;
      this.blinkCounter++;
    }
    else if (this.curPlaceholder == curPlaceholderFullText && this.blinkCounter<3) {
      this.curPlaceholder = this.curPlaceholder+'|';
    }
    else {
      this.curPlaceholder = curPlaceholderFullText
        .split('')
        .slice(0,this.curPlaceholder.length+1)
        .join('') + '|';
      timeout = 150;
    }
    this.input.setAttribute('placeholder',this.curPlaceholder);
    setTimeout(
      () => { if(this.animationActive) this.animationFrameId = window.requestAnimationFrame(this.animate)}, 
      timeout);
  }

  this.stop = () => {
    this.animationActive = false;
    window.cancelAnimationFrame(this.animationFrameId);
  }

  this.start = () => {
    this.animationActive = true;
    this.animationFrameId = window.requestAnimationFrame(this.animate);
    return this;
  }
}

document.addEventListener("DOMContentLoaded", () => {
  let aw = new animationWorker(input, texts).start();
  input.addEventListener("focus", (e) => aw.stop());
  input.addEventListener("blur", (e) => {
    aw = new animationWorker(input, texts);
    if(e.target.value == '') setTimeout( aw.start, 2000);
  });
});


      }






