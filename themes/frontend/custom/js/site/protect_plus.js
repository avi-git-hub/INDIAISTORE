$(window).on('load',function(){
   //$(".slider-item:first").trigger("click");
   $.ajax({
      type:'POST',
      data:'',
      url: base_url +'site/getProductCategory',
      dataType: 'json',
      success:function(response){
        console.log(response);
        
        $.each(response,function(index,data){
          $('#field_epc_category').append('<option value="'+data['category']+'">'+data['category']+'</option>');
        });
      }
   });
})
$(document).ready(function () {
  if ($(".category-listing-carousel").length > 0) {
    categoryListingSlider = tns({
      container: ".category-listing-carousel .slider",
      items: 2.5,
      slideBy: "page",
      autoplay: false,
      gutter: 10,
      nav: false,
      controls: true,
      arrowKeys: true,
      loop: true,
      responsive: {
        768: { items: 5.5, mouseDrag: true, loop: true },
      },
    });
  }

  $("#field_epc_category").change(function(){
        
        $("#field_protect_apple_care_mrp").val('');
        $("#field_apple_care_mrp").val('');
        var category = $(this).val();
        console.log(category);
        $.ajax({
          url: base_url +'site/getProtectPlusProducts',
          method: 'post',
          data: {category: category},
          dataType: 'json',
          success: function(response){
            console.log(response);
             // Remove options
            $('#field_apple_care_prod').find('option').not(':first').remove();
            // Add options
              $.each(response,function(index,data){
                $('#field_apple_care_prod').append('<option value="'+data['product_name']+'">'+data['product_name']+'</option>');
              });
            }
        });
  });

  $("#field_apple_care_prod").on('change', function(){
      var product_name = $("#field_apple_care_prod").val();
      console.log(product_name);
      $.ajax({
        url: base_url +'site/getProtectPlusPrices',
        method: 'post',
        data: {product_name: product_name},
        dataType: 'json',
        success: function(response){
          console.log(response);
             $("#field_protect_apple_care_mrp").val('₹ '+response[0]['protect_plus_with_applecare_mrp']);
             $("#field_apple_care_mrp").val('₹ '+response[0]['apple_care_mrp']);
          }
      });
  });
});
