/* var gmap_script = document.createElement('script');

gmap_script.setAttribute("async", "async");
gmap_script.setAttribute("defer", "defer");
gmap_script.setAttribute("src", "https://maps.googleapis.com/maps/api/js?key=" + $("main").data("gmap-key")); //  + "&callback=mapInitialize"

document.body.appendChild(gmap_script); */

var map;
var geocoder;
var marker = [];

var base_url = $('base').attr('href');
var s3_url = $('base').attr('data-s3-url');

// --------------------------------------------------
// function definitions
// --------------------------------------------------
function get_nearby_partner_stores_data(lat, lng, distance) {
  $.ajax({
    data: {
      lat: lat,
      lng: lng,
      distance: distance,
    },
    dataType: 'json',
    type: 'post',
    url: base_url + 'site/store_locator/get_nearby_partner_stores_data',
    success: function (response, status) {
      var data = response.str;
      var infowindow_details = response.infowindow_details;
      var address_details = response.address_details;
      var multi_brand_store_address_details = response.multi_brand_store_address_details;
      var partners_html = response.partner_html;
      var partners_html = response.partner_html;

      //var is_mobile = $("main").attr("data-is_mobile");

      if (infowindow_details.length > 0 || address_details.length > 0 || multi_brand_store_address_details.length > 0) {
        if (address_details.length > 0) {
          var temp_html = '';

          temp_html += "<div class='row'>";
          temp_html += "  <div class='col-md-4 pr-0 pl-0'>";
          temp_html += "    <div class='stores_list stores_list_online_apr_aar'></div>";
          temp_html += '  </div>';

          temp_html += "  <div class='col-md-8 pr-0 pl-0'>";
          temp_html += "    <div id='map' class='get-store-location hidden-xs'></div>";
          temp_html += '  </div>';
          temp_html += '</div>';

          $('#aar_sec').html(temp_html);

          // map code
          mapInitialize();

          if (marker.length > 0) {
            clearLocations();
          }

          var arr1 = data.split('|');

          var infowindow = new google.maps.InfoWindow({
            maxWidth: 390,
          });

          var i = 0,
            arr1_length = arr1.length;

          for (i; i < arr1_length; i++) {
            var arr2 = arr1[i].split('==');

            marker = new google.maps.Marker({
              position: new google.maps.LatLng(arr2[1], arr2[2]),
              map: map,
              icon: base_url + 'files/uploads/store_locator/g-map-pins/' + arr2[4],
            });

            marker.setMap(map);
            map.setZoom(15);

            if (i === 0) {
              map.setCenter(new google.maps.LatLng(arr2[1], arr2[2]));
            }

            google.maps.event.addListener(
              marker,
              'click',
              (function (marker, i) {
                return function () {
                  //var arr3 = arr1[i].split("==");
                  //infowindow.setContent(arr3[0]);
                  /* infowindow.setContent(infowindow_details[i]);
      
                infowindow.open(map, marker); */

                  $(".store[data-store-id='" + (i + 1) + "']")
                    .find('.cta_get_directions')
                    .trigger('click');
                };
              })(marker, i)
            );
          }

          $('.stores_list_online_apr_aar').html('').append(address_details);
        } else {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any APR Stores in your selected area. Please check the Multi Brand Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="mbs_switch mbs_switch_active" href="#multibrand_sec">SEE MULTI BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#aar_sec').html('').append(error_markup);
        }

        if (multi_brand_store_address_details.length > 0) {
          var temp_html2 = "<div class='grid stores_list_online_multi_brand masonry'></div>";

          $('#multibrand_sec').html(temp_html2);

          $('.stores_list_online_multi_brand').html('').append(multi_brand_store_address_details);
        } else {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any Multi Brand Stores in your selected area. Please check the AAR/APR Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="aar_switch aar_switch_active" href="#aar_sec">SEE AAR/APR BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#multibrand_sec').html('').append(error_markup);
        }

        // Do a resize once more when all the images finish loading
        waitForImages();
      } else {
        /* if ((infowindow_details.length <= 0) && (address_details.length <= 0)) {
          $("#aar_sec").css("height", (is_mobile) ? "" : "88px");

          $("#multibrand_sec").css("height", (is_mobile) ? "" : "88px");
        } */

        if (address_details.length <= 0) {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any APR Stores in your selected area. Please check the Multi Brand Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="mbs_switch mbs_switch_active" href="#multibrand_sec">SEE MULTI BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#aar_sec').html('').append(error_markup);
        }

        if (multi_brand_store_address_details.length <= 0) {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any Multi Brand Stores in your selected area. Please check the AAR/APR Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="aar_switch aar_switch_active" href="#aar_sec">SEE AAR/APR BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#multibrand_sec').html('').append(error_markup);
        }
      }

      if (partners_html != '') {
        $('.notification').show();
        $('#locator_online_stores_section').find('.stores').html(partners_html);
      } else {
        error_markup = '<div class="not_found_wrapper mt-5">';
        error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

        error_markup += '   <div class="text-center">';
        error_markup += '     <h2>Oops!</h2>';

        error_markup += '     <p>We could not find any Online Partner stores in your selected area.</p>';
        error_markup += '   </div>';
        error_markup += '</div>';

        $('.notification').hide();
        $('#locator_online_stores_section').html(error_markup);
      }

      $('.store_front').fadeOut();
      $('.main_window').fadeIn();
    },
  });
}

function get_partners_by_loc() {
  getCurrentPosition(function () {
    var dis = window.localStorage.getItem('user_location_distance');
    var lat = window.localStorage.getItem('user_location_lat');
    var lng = window.localStorage.getItem('user_location_lng');
    get_nearby_partner_stores_data(lat, lng, dis);
  });
}


function mapInitialize() {
  var mapCanvas = document.getElementById('map');

  var mapOptions = {
    center: new google.maps.LatLng(21.0, 78.0),
    scrollwheel: false,
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoomControlOptions: {
      position: google.maps.ControlPosition.TOP_RIGHT,
    },
  };

  map = new google.maps.Map(mapCanvas, mapOptions);

  geocoder = new google.maps.Geocoder();
}

function clearLocations() {
  info_Window = new google.maps.InfoWindow({
    maxWidth: 390,
  });

  info_Window.close();

  var i = 0,
    marker_length = marker.length;

  for (i; i < marker_length; i++) {
    marker[i].setMap(null);
  }

  markers = [];
}

function draw_coords(chosen_state, chosen_city) {
  $.ajax({
    data: {
      city: chosen_city,
      state: chosen_state,
    },
    dataType: 'json',
    type: 'post',
    url: base_url + 'site/store_locator/get_all_partner_store_data',
    success: function (response, status) {
      console.log(response);
      var data = response.str;
      var infowindow_details = response.infowindow_details;
      var address_details = response.address_details;
      var multi_brand_store_address_details = response.multi_brand_store_address_details;
      var partners_html = response.partner_html;
      var error_markup = '';

   
      if (infowindow_details.length > 0 || address_details.length > 0 || multi_brand_store_address_details.length > 0) {
        if (address_details.length > 0) {
          var temp_html = '';
          temp_html += "<div class='row'>";
          temp_html += "<div class='col-md-4 pr-0 pl-0'>";
          temp_html += "  <div class='stores_list stores_list_online_apr_aar'></div>";
          temp_html += '</div>';

          temp_html += "<div class='col-md-8 pr-0 pl-0'>";
          temp_html += "  <div id='map' class='get-store-location hidden-xs'></div>";
          temp_html += '</div>';
          temp_html += '</div>';

          $('#aar_sec').html(temp_html);

          // map code
          mapInitialize();

          if (marker.length > 0) {
            clearLocations();
          }

          var arr1 = data.split('|');

          var infowindow = new google.maps.InfoWindow({
            maxWidth: 390,
          });

          var i = 0,
            arr1_length = arr1.length;

          for (i; i < arr1_length; i++) {
            var arr2 = arr1[i].split('==');

            marker = new google.maps.Marker({
              position: new google.maps.LatLng(arr2[1], arr2[2]),
              map: map,
              icon: base_url + 'files/uploads/store_locator/g-map-pins/' + arr2[4],
            });

            marker.setMap(map);
            map.setZoom(15);

            if (i === 0) {
              map.setCenter(new google.maps.LatLng(arr2[1], arr2[2]));
            }

            google.maps.event.addListener(
              marker,
              'click',
              (function (marker, i) {
                return function () {

                  $(".store[data-store-id='" + (i + 1) + "']")
                    .find('.cta_get_directions')
                    .trigger('click');
                };
              })(marker, i)
            );
          }
          // map code

          $('.stores_list_online_apr_aar').html('').append(address_details);
        } else {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any APR Stores in your selected area. Please check the Multi Brand Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="mbs_switch mbs_switch_active" href="#multibrand_sec">SEE MULTI BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#aar_sec').html('').append(error_markup);
        }

        if (multi_brand_store_address_details.length > 0) {
          var temp_html2 = "<div class='grid stores_list_online_multi_brand masonry'></div>";

          $('#multibrand_sec').html(temp_html2);

          $('.stores_list_online_multi_brand').html('').append(multi_brand_store_address_details);
        } else {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any Multi Brand Stores in your selected area. Please check the AAR/APR Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="aar_switch aar_switch_active" href="#aar_sec">SEE AAR/APR BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#multibrand_sec').html('').append(error_markup);
        }

        // Do a resize once more when all the images finish loading
        waitForImages();
      } else {
        /* if ((infowindow_details.length <= 0) && (address_details.length <= 0)) {
          $("#aar_sec").css("height", (is_mobile) ? "" : "88px");

          $("#multibrand_sec").css("height", (is_mobile) ? "" : "88px");
        } */

        if (address_details.length <= 0) {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any APR Stores in your selected area. Please check the Multi Brand Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="mbs_switch mbs_switch_active" href="#multibrand_sec">SEE MULTI BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#aar_sec').html('').append(error_markup);
        }

        if (multi_brand_store_address_details.length <= 0) {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any Multi Brand Stores in your selected area. Please check the AAR/APR Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="aar_switch aar_switch_active" href="#aar_sec">SEE AAR/APR BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#multibrand_sec').html('').append(error_markup);
        }
      }

      if (partners_html != '') {
        $('.notification').show();
        $('#locator_online_stores_section').find('.stores').html(partners_html);
      } else {
        error_markup = '<div class="not_found_wrapper mt-5">';
        error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

        error_markup += '   <div class="text-center">';
        error_markup += '     <h2>Oops!</h2>';

        error_markup += '     <p>We could not find any Online Partner stores in your selected area.</p>';
        error_markup += '   </div>';
        error_markup += '</div>';

        $('.notification').hide();
        $('#locator_online_stores_section').html(error_markup);
      }

      processLoader(false);
    },
  });
}


function draw_coords_pincode(choosen_pincode) {
  console.log("test", choosen_pincode);
  $.ajax({
    data: {
      pincode: choosen_pincode,
    },
    dataType: 'json',
    type: 'post',
    url: base_url + 'site/store_locator/get_all_partner_store_data_by_pincode',
    success: function (response, status) {
      console.log(response);
      var data = response.str;
      var infowindow_details = response.infowindow_details;
      var address_details = response.address_details;
      var multi_brand_store_address_details = response.multi_brand_store_address_details;
      var partners_html_pincode = response.partner_html;
      var error_markup = '';

   console.log(partners_html_pincode);
      if (infowindow_details.length > 0 || address_details.length > 0 || multi_brand_store_address_details.length > 0) {
        if (address_details.length > 0) {
          var temp_html = '';
          temp_html += "<div class='row'>";
          temp_html += "<div class='col-md-4 pr-0 pl-0'>";
          temp_html += "  <div class='stores_list stores_list_online_apr_aar'></div>";
          temp_html += '</div>';

          temp_html += "<div class='col-md-8 pr-0 pl-0'>";
          temp_html += "  <div id='map' class='get-store-location hidden-xs'></div>";
          temp_html += '</div>';
          temp_html += '</div>';

          $('#aar_sec').html(temp_html);

          // map code
          mapInitialize();

          if (marker.length > 0) {
            clearLocations();
          }

          var arr1 = data.split('|');

          var infowindow = new google.maps.InfoWindow({
            maxWidth: 390,
          });

          var i = 0,
            arr1_length = arr1.length;

          for (i; i < arr1_length; i++) {
            var arr2 = arr1[i].split('==');

            marker = new google.maps.Marker({
              position: new google.maps.LatLng(arr2[1], arr2[2]),
              map: map,
              icon: base_url + 'files/uploads/store_locator/g-map-pins/' + arr2[4],
            });

            marker.setMap(map);
            map.setZoom(15);

            if (i === 0) {
              map.setCenter(new google.maps.LatLng(arr2[1], arr2[2]));
            }

            google.maps.event.addListener(
              marker,
              'click',
              (function (marker, i) {
                return function () {

                  $(".store[data-store-id='" + (i + 1) + "']")
                    .find('.cta_get_directions')
                    .trigger('click');
                };
              })(marker, i)
            );
          }
          // map code

          $('.stores_list_online_apr_aar').html('').append(address_details);
        } else {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any APR Stores in your selected area. Please check the Multi Brand Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="mbs_switch mbs_switch_active" href="#multibrand_sec">SEE MULTI BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#aar_sec').html('').append(error_markup);
        }

        if (multi_brand_store_address_details.length > 0) {
          var temp_html2 = "<div class='grid stores_list_online_multi_brand masonry'></div>";

          $('#multibrand_sec').html(temp_html2);

          $('.stores_list_online_multi_brand').html('').append(multi_brand_store_address_details);
        } else {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any Multi Brand Stores in your selected area. Please check the AAR/APR Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="aar_switch aar_switch_active" href="#aar_sec">SEE AAR/APR BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#multibrand_sec').html('').append(error_markup);
        }

        // Do a resize once more when all the images finish loading
        waitForImages();
      } else {
        /* if ((infowindow_details.length <= 0) && (address_details.length <= 0)) {
          $("#aar_sec").css("height", (is_mobile) ? "" : "88px");

          $("#multibrand_sec").css("height", (is_mobile) ? "" : "88px");
        } */

        if (address_details.length <= 0) {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any APR Stores in your selected area. Please check the Multi Brand Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="mbs_switch mbs_switch_active" href="#multibrand_sec">SEE MULTI BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#aar_sec').html('').append(error_markup);
        }

        if (multi_brand_store_address_details.length <= 0) {
          error_markup = '<div class="not_found_wrapper">';
          error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

          error_markup += '   <div class="text-center">';
          error_markup += '     <h2>Oops!</h2>';

          error_markup += '     <p>We could not find any Multi Brand Stores in your selected area. Please check the AAR/APR Stores near you.</p>';

          error_markup += '     <a data-toggle="pill" class="aar_switch aar_switch_active" href="#aar_sec">SEE AAR/APR BRANDS STORE</a>';
          error_markup += '   </div>';
          error_markup += '</div>';

          $('#multibrand_sec').html('').append(error_markup);
        }
      }

      if (partners_html_pincode != '') {
        console.log("Partners are available");
        $('.notification').show();
        $(".stores").css({
          'background-color':'#FFFFFF',
          'color':'#212529',
        });
        $('#locator_online_stores_section').find('.stores').html(partners_html_pincode);
      } else {
        console.log("Partners are not available");
        error_markup = '<div class="container"><div class="stores"><div class="not_found_wrapper mt-5">';
        error_markup += '   <img src="' + s3_url + 'files/uploads/store_locator/not_found.png">';

        error_markup += '   <div class="text-center">';
        error_markup += '     <h2>Oops!</h2>';

        error_markup += '     <p>We could not find any Online Partner stores in your selected area.</p>';
        error_markup += '   </div>';
        error_markup += '</div></div></div>';

        $('.notification').hide();
        $('#locator_online_stores_section').html(error_markup);
      }

      processLoader(false);
    },
    error: function(response){
      processLoader(false);
        console.log(response);
    }
  });
}

function loadMapMarker(store) {
  if (marker != null) {
    marker.setMap(null);
  }

  var geoLocation = [parseFloat($(store).attr('latitude')), parseFloat($(store).attr('longitude'))];

  var icon_image = $(store).attr('icon');

  var latlng = new google.maps.LatLng(geoLocation[0], geoLocation[1]);

  var address = $(store).find('.address');
  var title = $(store).find('.title').text();
  var txt = address.text() + ', ' + address.attr('city') + ', ' + address.attr('country');

  marker = new google.maps.Marker({
    position: latlng,
    title: txt,
    animation: google.maps.Animation.DROP,
    icon: base_url + 'files/uploads/store_locator/g-map-pins/' + icon_image,
  });

  /* var html = "";

  html += "<div>";
  html += " <a href='https://www.google.com/maps/dir/Current+Location/" + geoLocation["0"] + "," + geoLocation["1"] + "' target='_blank' class='get-direction-link'>";
  html += "   <img src='" + s3_url + "themes/frontend/images/uploads/icon/get-direction.png' alt='Get Directions Icon' /> Get Direction";
  html += " </a>";
  html += "</div>";

  html += "<div class='map_pin'>";
  html += " <div class='store-infowindow store_tile'>";
  html += "   <div class='title'>" + $(store).attr("data-storename") + "</div>";

  html += "   <div class='address margin-bottom-5'>" + $(store).attr("data-address") + "</div>";

  html += "   <div>Phone : " + $(store).attr("data-phone") + "</div>";

  html += "   <a href='https://www.google.com/maps/dir/Current+Location/" + geoLocation["0"] + "," + geoLocation["1"] + "' target='_blank' class='get-direction-link'>";
  html += "     <img src='" + s3_url + "themes/frontend/images/uploads/icon/get-direction.png' alt='Get Directions Icon' /> Get Direction";
  html += "   </a>";
  html += " </div>";
  html += "</div>"; */

  var store_wrapper_html = "<div class='store_ctr'>" + $(store).attr('data-store-id') + '.</div>';
  store_wrapper_html +=
    "<div class='store_details store_tile' data-store-type='" +
    $(store).attr('data-store-type') +
    "' data-store-id='" +
    $(store).attr('data-store-id') +
    "' data-storename='" +
    $(store).attr('data-storename') +
    "' data-address='" +
    $(store).attr('data-address') +
    "' data-pincode='" +
    $(store).attr('data-pincode') +
    "' data-phone='" +
    $(store).attr('data-phone') +
    "'>" +
    $(store).find('.store_details').html() +
    '</div>';

  //infoHTML = $(html).prepend(store_wrapper_html).html();
  store_wrapper_html = store_wrapper_html.replace('cta_get_directions', 'cta_get_directions2');
  store_wrapper_html = store_wrapper_html.replace('>Get Directions', " target='_blank'>Get Directions");

  var infoHTML = '<div class="store-infowindow">' + store_wrapper_html + '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: infoHTML,
    maxWidth: 390,
  });

  map.setCenter(latlng);
  map.setZoom(15);

  marker.setMap(map);

  infowindow.open(map, marker);
}

function resizeMasonryItem(item) {
  /* Get the grid object, its row-gap, and the size of its implicit rows */
  var grid = document.getElementsByClassName('masonry')[0],
    rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap')),
    rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));

  var rowSpan = Math.ceil((item.querySelector('.store').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));

  /* Set the spanning as calculated above (S) */
  item.style.gridRowEnd = 'span ' + rowSpan;

  /* Make the images take all the available space in the cell/item */
  if (item.getAttribute('data-loopid') && item.getAttribute('data-loopid') > 0) {
    item.setAttribute('data-loopid', 1); // kept this code just not to keep if condition blank
  } else {
    item.querySelector('.store').style.height = rowSpan * 10 + 'px';
    item.setAttribute('data-loopid', 1);
  }
}

function resizeAllMasonryItems() {
  // Apply spanning to all the masonry items
  // Loop through all the items and apply the spanning to them using `resizeMasonryItem()` function.
  // Get all item class objects in one list
  var all_masonry_items = document.getElementsByClassName('grid-item');
  var i = 0,
    item_count = all_masonry_items.length;

  // Loop through the above list and execute the spanning function to each list-item (i.e. each masonry item)
  for (i; i > item_count; i++) {
    resizeMasonryItem(all_masonry_items[i]);
  }
}

function waitForImages() {
  // Get all item class objects in one list
  var all_masonry_items = document.getElementsByClassName('grid-item');
  var i = 0,
    item_count = all_masonry_items.length;
  var item;

  for (i; i < item_count; i++) {
    imagesLoaded(all_masonry_items[i], function (instance) {
      item = instance.elements[0];

      resizeMasonryItem(item);
    });
  }
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// masonary
// resize all the grid items on the load and resize events
var masonryEvents = ['load', 'resize'];

masonryEvents.forEach(function (event) {
  window.addEventListener(event, resizeAllMasonryItems);
});
// masonary

$('#frmstate').on('change', function () {
  var chosen_state = $(this).val();
console.log(chosen_state);
  $('#frmstate_2')
    .find("option[value='" + chosen_state + "']")
    .attr('selected', 'selected');

  if (chosen_state !== '') {
    $.ajax({
      type: 'post',
      url: base_url + 'site/components/get_cities',
      data: {
        state_id: chosen_state,
      },
      dataType: 'json',
      success: function (cities) {
        var i = 0,
          no_of_cities = cities.length;

        if (no_of_cities > 0) {
          $('#frmcity, #frmcity_2')
            .empty()
            .append(
              $('<option>', {
                value: '',
                text: 'Select City',
              })
            );

          for (i; i < no_of_cities; i++) {
            $('#frmcity, #frmcity_2').append(
              $('<option>', {
                value: cities[i].id,
                text: cities[i].text,
              })
            );
          }

          /* var urlParams = getUrlVars();

          if (Object.keys(urlParams).length > 0) {
            city = urlParams.city;

            if (typeof city !== "undefined") {
              city = city.replace(/\+/g, "-");

              $("#frmcity")
                .val(city)
                .trigger("change");

              $("#search_submit").trigger("click");
            }
          } */
        }
      },
    });
  } else {
    $('#frmcity, #frmcity_2')
      .empty()
      .append(
        $('<option>', {
          value: '',
          text: 'Select City',
        })
      );
  }
});

$('#frmcity').on('change', function () {
  $('#frmcity_2')
    .find("option[value='" + $(this).val() + "']")
    .attr('selected', 'selected');
});

$('.find_nearby').on('click', function () {
  if ($('#frmstate').find('option:selected').val() !== '') {
    $('#frmstate').val('').trigger('change');
  }

  var location_status = window.localStorage.getItem('user_location_access');

  switch (location_status) {
    case 'granted':
    case 'prompt':
      get_partners_by_loc();
      break;

    case 'denied':
      if ($('body').attr('data-is-mobile') == 0 || $.trim($('base').attr('data-browser-type')) == 'Chrome') {
        $('.instr_wrapper').show();
        $('body').css({ 'overflow-y': 'hidden' });
      } else {
        alert('Please turn on your location services and allow us to find your nearest store.');
      }
      break;

    case '':
    default:
      alert('Please turn on your location services and allow us to find your nearest store.');
  }
});

$('.location a').click(function () {
  var location_status = window.localStorage.getItem('user_location_access');

  switch (location_status) {
    case 'granted':
    case 'prompt':
      get_partners_by_loc();
      break;

    case 'denied':
      if ($('body').attr('data-is-mobile') == 0 || $.trim($('base').attr('data-browser-type')) == 'Chrome') {
        $('.instr_wrapper').show();
        $('body').css({ 'overflow-y': 'hidden' });
      } else {
        alert('Please turn on your location services and allow us to find your nearest store.');
      }
      break;

    case '':
    default:
      alert('Please turn on your location services and allow us to find your nearest store.');
  }

  $('html, body').animate(
    {
      scrollTop: $('section.locate-store').offset().top - 100,
    },
    500
  );
});

$('#got_it').on('click', function () {
  $('.instr_wrapper').fadeOut(500);
});

$('#frmstate_2').on('change', function () {
  var chosen_state = $(this).val();

  $('#frmstate')
    .find("option[value='" + chosen_state + "']")
    .attr('selected', 'selected');

  if (chosen_state !== '') {
    $.ajax({
      type: 'post',
      url: base_url + 'site/components/get_cities',
      data: {
        state_id: chosen_state,
      },
      dataType: 'json',
      success: function (cities) {
        var i = 0,
          no_of_cities = cities.length;

        if (no_of_cities > 0) {
          $('#frmcity, #frmcity_2')
            .empty()
            .append(
              $('<option>', {
                value: '',
                text: 'Select City',
              })
            );

          for (i; i < no_of_cities; i++) {
            $('#frmcity, #frmcity_2').append(
              $('<option>', {
                value: cities[i].id,
                text: cities[i].text,
              })
            );
          }
        }
      },
    });
  } else {
    $('#frmcity, #frmcity_2')
      .empty()
      .append(
        $('<option>', {
          value: '',
          text: 'Select City',
        })
      );
  }
});

$('#frmcity_2').on('change', function () {
  $('#frmcity')
    .find("option[value='" + $(this).val() + "']")
    .attr('selected', 'selected');
});

$(document).on('click', '.store_details .cta_get_directions', function (e) {
  if ($('#pg_store_locator_new').attr('data-is-mobile') === 'N') {
    e.preventDefault();

    var chosen_store = $(this).closest('.store');

    loadMapMarker(chosen_store);
  }
});

$(document).on('click', '.mbs_switch', function () {
  $('.hideit').hide();

  setTimeout(function () {
    waitForImages();
  }, 500);
});

$(document).on('click', '.aar_switch', function () {
  $('.hideit').show();
});

$(document).on('click', '.aar_switch_active', function () {
  $('#offline_store_band li.aarli a').addClass('active');

  $('#offline_store_band li.mbsli a').removeClass('active');
});

$(document).on('click', '.mbs_switch_active', function () {
  $('#offline_store_band li.aarli a').removeClass('active');

  $('#offline_store_band li.mbsli a').addClass('active');
});

$(document).on('click', "[data-target='#search_band']", function () {
  if ($(this).attr('aria-expanded') === 'false') {
    // or $(this).hasClass("collapsed")
    $(this).find('i').removeClass('ii-icon-arrow-up').addClass('ii-icon-arrow-down');
  } else {
    $(this).find('i').removeClass('ii-icon-arrow-down').addClass('ii-icon-arrow-up');
  }
});

/**
 * --------------------------------------------------------------------------
 * SMS Functionality
 * --------------------------------------------------------------------------
 */
$(document).on('click', '.trigger_modal_send_sms', function (e) {
  e.preventDefault();

  var store = $(this).closest('.store_tile');

  $('#field_store_name').val(store.attr('data-storename'));
  $('#field_store_address').val(store.attr('data-address'));
  $('#field_store_pincode').val(store.attr('data-pincode'));
  $('#field_store_phone').val(store.attr('data-phone'));
  $('#field_store_type').val(store.attr('data-store-type'));
  //$("#field_store_is_open").val(store.find(".is_open").text());

  $('#modal_send_sms').modal('show');
});

$(document).on('keypress', '#field_mob_num', function (e) {
  var a = [];
  var k = e.which;

  for (i = 48; i < 58; i++) a.push(i);

  if (a.indexOf(k) < 0) {
    e.preventDefault();
  }
});

$(document).on('click', '#btn_send_sms', function (e) {
  e.preventDefault();

  $(this).attr('disabled', 'disabled');

  var field_mob_num = $.trim($('#field_mob_num').val());

  var field_store_name = $.trim($('#field_store_name').val());
  var field_store_address = $.trim($('#field_store_address').val());
  var field_store_pincode = $.trim($('#field_store_pincode').val());
  var field_store_phone = $.trim($('#field_store_phone').val());
  var field_store_is_open = $.trim($('#field_store_is_open').val());

  if (
    field_mob_num !== '' &&
    field_store_name !== '' &&
    field_store_address !== '' &&
    field_store_pincode !== '' &&
    field_store_phone !== '' // && (field_store_is_open !== "")
  ) {
    if (/^\d+$/.test(field_mob_num)) {
      if (field_mob_num.length === 10) {
        $('.field_msg').removeClass('alert-danger').empty().addClass('hidden');

        $.ajax({
          async: false,
          data: {
            ph: field_mob_num,
            store_name: field_store_name,
            store_address: field_store_address,
            store_pincode: field_store_pincode,
            store_phone: field_store_phone,
            store_is_open: field_store_is_open,
          },
          dataType: 'json',
          type: 'post',
          url: base_url + 'store-locator/api-send-sms',
          success: function (response) {
            $('.field_msg')
              .addClass(response.status === true ? 'alert-success' : 'alert-danger')
              .html(response.message)
              .removeClass('hidden');

            $('#btn_send_sms').removeAttr('disabled', 'disabled');

            $('#field_mob_num').val('');
          },
        });
      } else {
        $('.field_msg').addClass('alert-danger').html('Please provide a valid 10 digit mobile number').removeClass('hidden');

        $('#btn_send_sms').removeAttr('disabled', 'disabled');
      }
    } else {
      $('.field_msg').addClass('alert-danger').html('Please enter a valid mobile number').removeClass('hidden');
    }
  } else {
    $('.field_msg').addClass('alert-danger').html('Please provide your mobile number').removeClass('hidden');

    $('#btn_send_sms').removeAttr('disabled', 'disabled');
  }
});

$(document).on('hide.bs.modal', '#modal_send_sms', function () {
  $('#field_mob_num').val('');

  $('.field_msg').removeClass('alert-danger alert-success').addClass('hidden');
});
/**
 * --------------------------------------------------------------------------
 * SMS Functionality
 * --------------------------------------------------------------------------
 */
/**
 * --------------------------------------------------------------------------
 * Event Listeners
 * --------------------------------------------------------------------------
 */

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(document).ready(function () {
  get_partners_by_loc();

  $('#form_state_city').validate({
    rules: {
      frmstate: {
        required: true,
      },
      frmcity: {
        required: true,
      },
    },
    rules: {
      frmstate: {
        required: {
          depends: function(element) {
            return $('#pincode').val() === "";
          }
        }
      },
      frmcity: {
        required: {
          depends: function(element) {
            return $('#pincode').val() === "";
          }
        }
      },
      pincode: {
        required: {
          depends: function(element) {
            return $('#frmstate').val() === "" && $('#frmcity').val() === "";
          }
        },
        minlength: 6,
      },
      stateCityOrPincode: {
        stateCityOrPincodeRequired: true
      }
    },
    /* messages: {
      frmstate: {
        required: "Please choose a state.",
      },
      frmcity: {
        required: "Please choose a city.",
      }
    }, */
    errorPlacement: function () {
      return false;
    },
    /* errorElement: 'span',
    errorLabelContainer: '.errorTxt', */
    submitHandler: function (form) {
      processLoader(true);

      $('#search_submit').attr('disabled', 'disabled');

      var chosen_state = $.trim($('#frmstate').find('option:selected').val());
      var chosen_city = $.trim($('#frmcity').find('option:selected').val());
      var choosen_pincode = $.trim($('#pincode').val());
      

      if (chosen_state !== '' && chosen_city !== '') {
        draw_coords(chosen_state, chosen_city);

        $('#order_offline').find('.tab-content').fadeIn(500);
      } else if(choosen_pincode !== ''){
        console.log(choosen_pincode);
        draw_coords_pincode(choosen_pincode);
        $('#order_offline').find('.tab-content').fadeIn(500);
      } else {
        $('#order_offline').find('.tab-content').fadeOut(500);
      }

      if (window.localStorage.getItem('user_location_access')) {
        var user_location_access = window.localStorage.getItem('user_location_access');

        if (user_location_access == 'denied') {
          if ($('#frmcity').val() == '') {
            $('#store-locator-addresses').fadeOut('500');

            $('.get-store-location').fadeIn('500');
          } else {
            $('#store-locator-addresses').fadeIn('500');

            $('.get-store-location').fadeIn('500');
          }
        }
      }

      $('.store_front').fadeOut();
      $('.main_window').fadeIn();

      $('#search_submit').removeAttr('disabled');
    },
  });

  $.validator.addMethod("stateCityOrPincodeRequired", function(value, element) {
    var state = $('#frmstate_2').val();
    var city = $('#frmcity_2').val();
    var pincode = $('#pincode_2').val();
    
    return (state !== "" && city !== "") || pincode !== "";
  }, "Please enter either state and city or only pincode.");

  
  $('#form_state_city_2').validate({
    rules: {
      frmstate_2: {
        required: {
          depends: function(element) {
            return $('#pincode_2').val() === "";
          }
        }
      },
      frmcity_2: {
        required: {
          depends: function(element) {
            return $('#pincode_2').val() === "";
          }
        }
      },
      pincode_2: {
        required: {
          depends: function(element) {
            return $('#frmstate_2').val() === "" && $('#frmcity_2').val() === "";
          }
        },
        minlength: 6,
      },
      stateCityOrPincode: {
        stateCityOrPincodeRequired: true
      }
    },
    /* messages: {
      frmstate_2: {
        required: "Please choose a state.",
      },
      frmcity_2: {
        required: "Please choose a city.",
      }
    }, */
    errorPlacement: function () {
      return false;
    },
    /* errorElement: 'span',
    errorLabelContainer: '.errorTxt', */
    submitHandler: function (form) {
      processLoader(true);

      $('#search_submit_2').attr('disabled', 'disabled');

     

      var chosen_state = $.trim($('#frmstate_2').find('option:selected').val());
      var chosen_city = $.trim($('#frmcity_2').find('option:selected').val());
      var choosen_pincode = $.trim($('#pincode_2').val());


      if (chosen_state !== '' && chosen_city !== '') {

        console.log(chosen_state, chosen_city);

        draw_coords(chosen_state, chosen_city);

        $('#order_offline').find('.tab-content').fadeIn(500);

      } else if(choosen_pincode !== ''){
        console.log(choosen_pincode);
        draw_coords_pincode(choosen_pincode);
        $('#order_offline').find('.tab-content').fadeIn(500);
      }else {
        $('#order_offline').find('.tab-content').fadeOut(500);
      }

      if (window.localStorage.getItem('user_location_access')) {
        var user_location_access = window.localStorage.getItem('user_location_access');

        if (user_location_access == 'denied') {
          if ($('#frmcity').val() == '') {
            $('#store-locator-addresses').fadeOut('500');

            $('.get-store-location').fadeIn('500');
          } else {
            $('#store-locator-addresses').fadeIn('500');

            $('.get-store-location').fadeIn('500');
          }
        }
      }

      $('.store_front').fadeOut();
      $('.main_window').fadeIn();

      $('#search_submit_2').removeAttr('disabled');
    },
  });

  $('.instr_wrapper').hide();
  $('.hideit').show();
  $('.main_window').hide();

  // KM Distance Slider
  var skipSlider = document.querySelector('.slider-skip');

  noUiSlider.create(skipSlider, {
    start: [5],
    // tooltips: [ false, wNumb({ decimals: 1 }), true ],
    connect: [true, false],
    snap: true,
    range: {
      min: [5],
      '25%': [10, 10],
      '50%': [15, 15],
      '75%': [20, 20],
      max: [25],
    },
    pips: {
      mode: 'range',
      density: 20,
    },
  });

  // getting value on each update
  skipSlider.noUiSlider.on('change', function (values, handle, unencoded) {
    console.log(window.localStorage.getItem('user_location_access'));

    if (window.localStorage.getItem('user_location_access') === 'denied') {
      if ($('#pg_store_locator_new').attr('data-is-mobile') === 'Y') {
        alert('Please turn on your location services and allow us to find your nearest store.');
      } else {
        $('.instr_wrapper').show();
      }

      skipSlider.noUiSlider.set([5]);

      return false;
    }

    var lat = window.localStorage.getItem('user_location_lat');
    var lng = window.localStorage.getItem('user_location_lng');

    if (lat && lng) {
      var chosen_km = parseInt(values[0]);

      window.localStorage.setItem('user_location_distance', chosen_km);

      get_nearby_partner_stores_data(lat, lng, chosen_km);
    }
  });
  // KM Distance Slider
});
// --------------------------------------------------
// document ready
// --------------------------------------------------

// --------------------------------------------------
// window load
// --------------------------------------------------
$(window).on('load', function () {
  $('#pg_store_locator_new').removeClass('invisible');
});
// --------------------------------------------------
// window load
// --------------------------------------------------
