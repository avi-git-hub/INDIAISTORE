"use strict";

$(document).on("click", ".main-menu .logo", function (e) {
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: "India iStore Logo"
  });
});

$(document).on("click", ".icon.location", function (e) {
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: "Location Icon"
  });
});

$(document).on("click", ".icon.at-work", function (e) {
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: "Store Locator Icon"
  });
});

$(document).on("click", ".icon.offers", function (e) {
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: "Offers Icon"
  });
});

$(document).on("click", "nav .bars", function (e) {
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: "Menu"
  });
});

$(document).on("click", ".hamburger-menu li:not(.has-menu) a", function (e) {
  var eventLabel = void 0;
  var prod_name = $(this).attr("data-prod-name");
  var menu_name = $(this).attr("data-menu-name");
  if (prod_name) {
    eventLabel = "Menu- " + menu_name + "- " + prod_name;
  } else {
    eventLabel = "Menu- " + menu_name;
  }
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: eventLabel
  });
});

$(document).on("click", "footer .explore li a", function (e) {
  var eventLabel = "Footer- Explore " + $.trim($(this).text());
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: eventLabel
  });
});

$(document).on("click", "footer .offers li a", function (e) {
  var eventLabel = "Footer- " + $.trim($(this).text());
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: eventLabel
  });
});

$(document).on("click", "footer .has-sub-menu li:nth-child(1) a", function (e) {
  var eventLabel = "Footer- " + $.trim($(this).text());
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: eventLabel
  });
});

$(document).on("click", "footer .social-icons li  a", function (e) {
  var eventLabel = "Footer- " + $(this).attr("data-social-name");
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: eventLabel
  });
});

$(document).on("click", ".floating-wigdet-store", function (e) {
  var eventLabel = "Floating Store Locator Icon";
  ga("send", {
    hitType: "event",
    eventCategory: "Engagement",
    eventAction: "Click",
    eventLabel: eventLabel
  });
});

/* scroll positions gtag trigger */

var scrollPostions = { 25: true, 50: true, 75: true, 100: true };

$(document).on("scroll", function () {
  var scrollPer = Math.ceil($(window).scrollTop() / ($(document).height() - $(window).height()) * 100);

  switch (true) {
    case scrollPer >= 25 && scrollPer < 50 && scrollPostions["25"]:
      scrollFunction(25);
      break;

    case scrollPer >= 50 && scrollPer < 75 && scrollPostions["50"]:
      scrollFunction(25);
      scrollFunction(50);
      break;

    case scrollPer >= 75 && scrollPer < 100 && scrollPostions["75"]:
      scrollFunction(25);
      scrollFunction(50);
      scrollFunction(75);
      break;

    case scrollPer === 100 && scrollPostions["100"]:
      scrollFunction(25);
      scrollFunction(50);
      scrollFunction(75);
      scrollFunction(100);
      break;

    default:
      break;
  }
});

function scrollFunction(scrollPer) {
  if (scrollPostions[scrollPer]) {
    ga("send", {
      hitType: "event",
      eventCategory: "Scroll",
      eventAction: "Click",
      eventLabel: scrollPer + "% Page Scroll"
    });
    scrollPostions[scrollPer] = false;
  }
}

/* scroll positions gtag trigger ends*/