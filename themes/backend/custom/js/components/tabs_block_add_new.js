$(document).on("change", "#tb_section_for", function(e) {
  e.preventDefault();
  
  $(".tb_section_for").addClass("d-none");

  if ($(this).val() == "Category") {
    $("#tb_section_for_category_wrapper").removeClass("d-none");
  } else if ($(this).val() == "Product") {
    $("#tb_section_for_product_wrapper").removeClass("d-none");
  }
});

$(document).on("change", ".tb_tab_content_type", function(e) {
  e.preventDefault();
  
  $(".tb_tab_content_banner_wrapper, .tb_tab_content_html_wrapper").addClass("d-none");
  
  var tab_id = $(this).closest(".card").data("tab");
  
  if ($(this).val() == "banner-upload") {
    $(".card[data-tab='" + tab_id + "']").find(".tb_tab_content_banner_wrapper").removeClass("d-none");
  } else if ($(this).val() == "custom-html") {
    $(".card[data-tab='" + tab_id + "']").find(".tb_tab_content_html_wrapper").removeClass("d-none");
  }
});

$(document).on("click", "#btn_add_new_tab", function(e) {
  e.preventDefault();
  
  console.log($("#tabs").children().last());
});

$(function() {
  $("#tb_section_desc, #tb_tab_1_content_html ").summernote();
});