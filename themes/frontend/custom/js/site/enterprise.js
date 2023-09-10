$(document).ready(function () {
  $('.text-field-input').on('focus', function () {
    $(this).closest('.field-wrapper').addClass('focused');
  });

  $('.text-field-input').on('blur', function () {
    if ($(this).val() === '') {
      $(this).closest('.field-wrapper').removeClass('focused');
    }
  });

  $('.attribute-list').on('click', function () {
    $('.attribute-list div.selected').removeClass('selected');
    $(this).closest('.attribute').addClass('selected');
  });

  $('.model-list').on('click', function () {
    $('.model-list .model-div div.selected').removeClass('selected');
    $(this).closest('.model-list .model-div .model').addClass('selected');
  });

  var slider1 = tns({
    container: '.offer-carousel.trending .slider',
    items: 1.55,
    slideBy: 1,
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: false,
    loop: false,
    mouseDrag: true,
    responsive: {
      577: { items: 1.6, mouseDrag: true },
      1024: { items: 5.3, mouseDrag: true }
    }
  });

  $(window).on('load resize', function () {
    var viewportWidth = $(window).width();

    if (viewportWidth > 768) {
      if ($("#enterprise_sec_2").hasClass("hide")) {
        $("#enterprise_sec_2").removeClass("hide");

        if (!$("#enterprise_sec_2_mobile").hasClass("hide")) {
          $("#enterprise_sec_2_mobile").addClass("hide");
        }
      }
    } else {
      if (!$("#enterprise_sec_2").hasClass("hide")) {
        $("#enterprise_sec_2").addClass("hide");

        $("#enterprise_sec_2_mobile").removeClass("hide");
      }
    }
  });
});

$(function () {
  $(window).resize(function () {
    var viewportWidth = $(this).width();

    if (viewportWidth > 768) {
      if ($("#enterprise_sec_2").hasClass("hide")) {
        $("#enterprise_sec_2").removeClass("hide");

        if (!$("#enterprise_sec_2_mobile").hasClass("hide")) {
          $("#enterprise_sec_2_mobile").addClass("hide");
        }
      }
    } else {
      if (!$("#enterprise_sec_2").hasClass("hide")) {
        $("#enterprise_sec_2").addClass("hide");

        if ($("#enterprise_sec_2_mobile").hasClass("hide")) {
          $("#enterprise_sec_2_mobile").removeClass("hide");
        }
      }
    }
  });
});

// Effective Price Calculator
$('.effective-price-calculator').each(function () {
  tns({
    container: $(this).find('.selection.image .slider').get(0),
    items: 4.2,
    slideBy: 'page',
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: false,
    loop: false,
    responsive: {
      768: { items: 6.5, mouseDrag: true }
    }
  });
})

function getSelectedModels(_containerElem) {
  var _models = [];

  _containerElem.find('.selection.image .model.selected').each(function () {
    _models.push($(this).data('value'));
  })

  return _models;
}

function getSelectedStorage(_containerElem) {
  var _storage = [];

  _containerElem.find('.selection.rect .attribute.selected').each(function () {
    _storage.push($(this).data('value'));
  })

  return _storage;
}

function getSelectedColors(_containerElem) {
  var _colors = [];

  _containerElem.find('.selection.color .color-item.selected').each(function () {
    _colors.push($(this).data('value'));
  })

  return _colors;
}

$(document).on('click', '.effective-price-calculator .selection.image .model', function (e) {
  e.stopPropagation();

  var _containerElem = $(this).closest('.effective-price-calculator');

  $(this).toggleClass('selected');

  var selectedModels = getSelectedModels(_containerElem);

  console.log(selectedModels);
})

$(document).on('click', '.effective-price-calculator .selection.rect .attribute', function (e) {
  e.stopPropagation();

  var _containerElem = $(this).closest('.effective-price-calculator');

  $(this).toggleClass('selected');

  var selectedStorage = getSelectedStorage(_containerElem);

  console.log(selectedStorage);
})

$(document).on('click', '.effective-price-calculator .selection.color .color-item', function (e) {
  e.stopPropagation();

  var _containerElem = $(this).closest('.effective-price-calculator');

  $(this).toggleClass('selected');

  var selectedModels = getSelectedColors(_containerElem);

  console.log(selectedModels);
})

$("#frm_enterprise").on("submit", function (e) {
  e.preventDefault();
  
  $("#frm_enterprise").find("button[type='submit']").attr("disabled", "disabled");

  var base_url = $("base").attr("href");
  var form_data = $(this).serialize();

  var num_of_employess = $("#num_of_employees").find(".attribute.selected").data("value");
  var selected_model = $("#list_of_models").find(".model.selected").data("value");

  form_data += "&num_of_emp=" + num_of_employess + "&selected_model=" + selected_model;
  
  $.ajax({
    url: base_url + "site/enterprise",
    type: "post",
    data: form_data,
    dataType: 'json',
    success: function (response) {
      if (response) {
        $("#frm_enterprise").find("button[type='submit']").removeAttr("disabled");
        $("#frm_enterprise").addClass("d-none");

        if (response.status == true) {
          $("#frm_enterprise_error").addClass("d-none");
          $("#frm_enterprise_success").removeClass("d-none");
        } else {
          $("#frm_enterprise_success").addClass("d-none");
          $("#frm_enterprise_error").removeClass("d-none");
        }
      }
    }
  });
});