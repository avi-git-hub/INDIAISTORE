<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store_locator extends MX_Controller
{
  public $master_db;
  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('components_model', 'compo_m');
    $this->load->model('store_locator_model', 'sto_loc_m');
  }

  public function load_store_locator()
  {
    $data = [
      'page_data' => [
        'title' => 'Store Locator',
        'styles' => [
          'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/10.1.0/nouislider.min.css',
        ],
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/10.1.0/nouislider.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js',
          'https://maps.googleapis.com/maps/api/js?key=' . GOOGLE_MAPS_API_KEY,
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    //store locator state
    $states = memcached_get('store-locator-states-list');

    if (!$states) {
      $states = $this->compo_m->getStates();

      memcached_save('store-locator-states-list', $states, 3600);
    }

    $data['states'] = $states;

    $this->load->view('template_frontend', $data);
  }


  public function load_store_locator_new()
  {
    $data = [
      'page_data' => [
        'title' => 'Store Locator',
        'styles' => [
          'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/10.1.0/nouislider.min.css',
        ],
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/10.1.0/nouislider.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js',
          'https://maps.googleapis.com/maps/api/js?key=' . GOOGLE_MAPS_API_KEY,
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    //store locator state
    $states = memcached_get('store-locator-states-list');

    if (!$states) {
      $states = $this->compo_m->getStates();

      memcached_save('store-locator-states-list', $states, 3600);
    }

    $data['states'] = $states;

    $this->load->view('template_frontend', $data);
  }

  public function get_nearby_partner_stores_data()
  {

    // error_reporting(-1);
    // ini_set('display_errors', 1);

    $lat = $this->input->post('lat');
    $lng = $this->input->post('lng');
    $distance = $this->input->post('distance');

    $lat = (float)$lat;
    $lng = (float)$lng;

    $nearby_partner_stores_data = $this->sto_loc_m->get_nearby_partner_stores_data($lat, $lng, $distance);

    // $partners = $nearby_partner_stores_data['partners'];

    // $partners_details = json_decode(json_encode($nearby_partner_stores_data['partners_details']), true);

    $str   = '';
    $count = 0;

    $infowindow_details = [];
    $address_details    = [];

    $storeNo = 1;

    foreach ($nearby_partner_stores_data['monoBrandStores'] as $sl) {
      $icon = $storeNo . '.png';
      $icon_path = PATH_FILES_UPLOADS . 'store_locator/g-map-pins/' . $icon;

      if (@getimagesize($icon_path)) {
        $icon_image = $icon; //$sl['icon_alphabet'] . '.png';
      } else {
        $icon_image = 'pin.png';
      }

      if ($sl['lat'] != '') {
        if ($count > 0) {
          $str .= '|';
        }

        $str   .= (isset($sl['store']) ? $sl['store'] : '') . '==' . $sl['lat'] . '==' . $sl['lng'] . '==' . (isset($sl['SlNo']) ? $sl['SlNo'] : '') . '==' . $icon;
        $count = $count + 1;
      }

      $infowindow_details_markup = '<div class="store store_tile storeLeftPin" data-store-id="' . $storeNo . '" data-store-type="' . $sl['type'] . '" data-storename="' . $sl['name'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '" id="store-' . $sl['id'] . '" latitude="' . $sl['lat'] . '" longitude="' . $sl['lng'] . '" icon="' . $icon . '">';
      $infowindow_details_markup .= ' <div class="store_ctr">' . $storeNo . '.</div>';

      $infowindow_details_markup .= ' <div class="store_details">';
      $infowindow_details_markup .= '   <h4 class="store_name">' . $sl['name'] . '</h4>';

      $infowindow_details_markup .= '   <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

      if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
        $infowindow_details_markup .= '<p class="store_email" style="display: none;">';
        $infowindow_details_markup .= ' <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
        $infowindow_details_markup .= '</p>';
      }

      if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
        $infowindow_details_markup .= '<p class="store_contact">';
        $phone_numbers = explode(',', $sl['phone']);

        foreach ($phone_numbers as $phone) {
          $ph = strtr($phone, array('-' => '', ' ' => ''));

          $infowindow_details_markup .= '<a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
        }

        $infowindow_details_markup .= '</p>';
      }

      $infowindow_details_markup .= '<a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" role="button" class="btn cta_get_directions ga_get_direction" target="_blank">Get Directions</a>';

      $infowindow_details_markup .= '<a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</a>';

      $infowindow_details_markup .= '</div>';
      $infowindow_details_markup .= '</div>';

      $infowindow_details[] = $infowindow_details_markup;

      // $is_store_open_style = (strtolower($sl['is_open']) == 'yes') ? 'color: green;' : 'color: red;'; // animation: blinker 0.6s linear infinite
      // $is_store_delivering_style = (strtolower($sl['is_delivering']) == 'yes') ? 'color: green;' : 'color: red;'; // animation: blinker 0.6s linear infinite */

      $address_details_markup = '<div class="store store_tile storeLeftPin" data-store-id="' . $storeNo . '" data-store-type="' . $sl['type'] . '" data-storename="' . $sl['name'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '" id="store-' . $sl['id'] . '" latitude="' . $sl['lat'] . '" longitude="' . $sl['lng'] . '" icon="' . $icon . '">';
      $address_details_markup .= '  <div class="store_ctr">' . $storeNo . '.</div>';

      $address_details_markup .= '  <div class="store_details">';
      $address_details_markup .= '    <h4 class="store_name">' . $sl['name'] . '</h4>';

      $address_details_markup .= '    <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

      if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
        $address_details_markup .= '<p class="store_email" style="display: none;">';
        $address_details_markup .= '  <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
        $address_details_markup .= '</p>';
      }

      if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
        $address_details_markup .= '<p class="store_contact">';
        $phone_numbers = explode(',', $sl['phone']);

        foreach ($phone_numbers as $phone) {
          $ph = strtr($phone, array('-' => '', ' ' => ''));

          $address_details_markup .= '<a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
        }

        $address_details_markup .= '</p>';
      }

      $address_details_markup .= '<a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" role="button" class="btn cta_get_directions ga_get_direction">Get Directions</a>';

      $address_details_markup .= '<a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</a>';

      $address_details_markup .= '</div>';
      $address_details_markup .= '</div>';

      $address_details[] = $address_details_markup;

      $marker_icon[] = $icon_image;

      $storeNo++;
    }

    if ($str == '') {
      $str = 'NA';
    }

    $multi_brand_store_address_details = [];

    if (!empty($nearby_partner_stores_data['multiBrandStores'])) {
      $MultiBrandStoreNo = 1;

      foreach ($nearby_partner_stores_data['multiBrandStores'] as $sl) {
        $multi_brand_store_address_details_markup = '<div class="grid-item">';
        $multi_brand_store_address_details_markup .= '  <div class="store store_tile" id="store-' . $sl['id'] . '" data-store-id="' . $MultiBrandStoreNo . '" data-storename="' . $sl['name'] . '" data-store-type="' . $sl['type'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '">';
        $multi_brand_store_address_details_markup .= '    <div class="store_ctr">' . $MultiBrandStoreNo . '.</div>';

        $multi_brand_store_address_details_markup .= '    <div class="store_details">';
        $multi_brand_store_address_details_markup .= '      <h4 class="store_name">' . $sl['name'] . '</h4>';

        $multi_brand_store_address_details_markup .= '      <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

        $multi_brand_store_address_details_markup .= '      <p class="store_email" style="display: none">';
        $multi_brand_store_address_details_markup .= '        <a href="mailto:myimaginestore@gmail.com"><i class="ii-icon-email"></i> myimaginestore@gmail.com</a>';
        $multi_brand_store_address_details_markup .= '      </p>';

        if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
          $multi_brand_store_address_details_markup .= '  <p class="store_contact">';
          $phone_numbers = explode(',', $sl['phone']);

          foreach ($phone_numbers as $phone) {
            $ph = strtr($phone, array('-' => '', ' ' => ''));

            $multi_brand_store_address_details_markup .= '<a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
          }

          $multi_brand_store_address_details_markup .= '  </p>';
        }

        $multi_brand_store_address_details_markup .= '  <button type="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</button>';
        $multi_brand_store_address_details_markup .= '  </div>';
        $multi_brand_store_address_details_markup .= '  </div>';
        $multi_brand_store_address_details_markup .= '  </div>';

        $multi_brand_store_address_details[] = $multi_brand_store_address_details_markup;

        $MultiBrandStoreNo++;
      }
    }

    $partner_html = '';

    if (!empty($nearby_partner_stores_data['onlineStores'])) {
      /*       foreach ($nearby_partner_stores_data['onlineStores'] as $partner) {
        $partner_html .= '<div class="col-md-3 col-sm-6">';
        $partner_html .= '  <div class="partner">';
        $partner_html .= '    <div class="aa_partner">';
        $partner_html .= '      <img src="' . (PATH_FILES_UPLOADS . 'partners/' . $partner['logo_rectangular']) . '" alt="' . $partner['reseller'] . '" />';
        $partner_html .= '    </div>';

        $partner_html .= '    <div class="aa_partner_desc text-center">';

        if ($partner['website'] != '') {
          $partner_html .= '<div><a href="' . $partner['website'] . '" target="_blank" data-storename="' . $partner['name'] . '" class="link_website ga_link_website">' . parse_url($partner['website'], PHP_URL_HOST) . '</a></div>';
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        if ($partner['phone'] !== '') {
          $phone_numbers = explode(',', $partner['phone']);

          $partner_html .= '<div>';

          foreach ($phone_numbers as $phone) {
            $ph = strtr($phone, ['-' => '', ' ' => '']);

            $partner_html .= '<a href="tel:' . $ph . '"  class="link_contact ga_link_contact" data-storename="' . $partner['name'] . '">';
            $partner_html .= '  <i class="ii-icon-phone"></i>&nbsp;&nbsp;' . $phone;
            $partner_html .= '</a>';
          }

          $partner_html .= '</div>';
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        $partner_html .= '    </div>';
        $partner_html .= '  </div>';
        $partner_html .= '</div>';
      } */

      foreach ($nearby_partner_stores_data['onlineStores'] as $partner) {

        $partner_html .= "<div class='store' data-partner-name='$partner[name]' data-partner-phone='$partner[phone]'>";
        $partner_html .= "<div class='img'><img src='" . PATH_FILES_UPLOADS . 'partners/' . $partner['logo'] . "' alt='$partner[reseller]'></div>";


        if ($partner['phone'] !== '') {
          $phone_numbers = preg_split('/ (,|;) /', $partner['phone']);
          foreach ($phone_numbers as $phone) {
            $partner_html .= "<div class='num'>
              <a href='tel:$phone' data-storename='$partner[name]' class='ga_link_contact'>
                <i class='ii-icon-phone'></i> $phone </a>
                </div>
            ";
          }
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        if ($partner['website'] != '') {
          $partner_html .= "<div class='link'><a href='$partner[website]' target='_blank' class='link_website ga_link_website'>" . parse_url($partner['website'], PHP_URL_HOST) . "</a></div>";
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        $partner_html .= "</div>";
      }
    }

    /* if (count($partners) > 0) {
      $partner_html = '';

      $p = [];

      foreach ($partners as $partner) {
        $prt = (array)$partner;
        $i = 1;

        for ($i; $i <= 30; $i++) {
          $key = 'P' . $i;

          if ($prt["$key"]) {
            $partnerData = $this->arr_search($partners_details, 'id', $prt["$key"]);

            if (!in_array($partnerData[0]['id'], $p)) {
              $p[] = $partnerData[0]['id'];

              $partner_html .= '<div class="col-md-4">
                <div class="partner">
                  <div class="aa_partner">
                    <img src="' . $this->config->item('theme_url') . 'images/partners/' . $partnerData[0]['logo'] . '" alt="' . $partnerData[0]['name'] . '" />
                  </div>

                  <div class="aa_partner_desc text-center">';

              if ($partnerData[0]['website'] !== '') {
                $partner_html .= '<div><a href="' . $partnerData[0]['website'] . '" target="_blank" class="link_website ga_link_website">' . parse_url($partnerData[0]['website'], PHP_URL_HOST) . '</a></div>';
              } else {
                $partner_html .= '<div>&nbsp;</div>';
              }

              if ($partnerData[0]['contact'] !== '') {
                $phone_numbers = explode(',', $partnerData[0]['contact']);

                $partner_html .= '<div>';

                foreach ($phone_numbers as $phone) {
                  $ph = strtr($phone, array('-' => '', ' ' => ''));

                  $partner_html .= '<a href="tel:' . $ph . '"  class="link_contact ga_link_contact">';
                  $partner_html .= '  <i class="ii-icon-phone"></i>&nbsp;&nbsp;' . $phone;
                  $partner_html .= '</a>';
                }

                $partner_html .= '</div>';
              } else {
                $partner_html .= '<div>&nbsp;</div>';
              }

              $partner_html .= '</div>
                </div>
              </div>';
            }
          }
        }
      }
    } else { */
    //$partner_html = '';
    //}

    $result = [
      'str' => $str,
      'infowindow_details' => $infowindow_details,
      'address_details' => $address_details,
      'multi_brand_store_address_details' => $multi_brand_store_address_details,
      'partner_html' => $partner_html,
    ];

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($result));
  }

  public function get_all_partner_store_data()
  {
    // $state = strtr($this->input->post('state'), array('-' => ' '));
    // $city = strtr($this->input->post('city'), array('-' => ' '));
    $state = trim($this->input->post('state'));
    $city = trim($this->input->post('city'));
    $current_page = trim($this->input->post('current_page'));

    $store_location_new = $this->sto_loc_m->get_store_partner_details_new($state, $city);

    // $partners = $store_location_new['partners'];

    // $parteners_details = json_decode(json_encode($store_location_new['parteners_details']), true);

    $str   = '';
    $count = 0;

    $infowindow_details = [];
    $address_details    = [];

    $storeNo = 1;
    /* if (!empty($store_location_new['AarAprDetails'])){ */
    foreach ($store_location_new['monoBrandStores'] as $sl) {
      $icon = $storeNo . '.png'; //'pin.png'; // $sl['icon_alphabet'] . '.png';

      $icon_path = PATH_FILES_UPLOADS . 'files/uploads/store_locator/g-map-pins/' . $icon;

      if (@getimagesize($icon_path)) {
        $icon_image = $icon;
      } else {
        $icon_image = 'pin.png';
      }

      if ($sl['lat'] != '') {
        if ($count > 0) {
          $str .= '|';
        }

        $str   .= (isset($sl['store']) ? $sl['store'] : '') . '==' . $sl['lat'] . '==' . $sl['lng'] . '==' . (isset($sl['SlNo']) ? $sl['SlNo'] : '') . '==' . $icon;
        $count = $count + 1;
      }

      /* $infowindow_details[] = '<div class="map_pin">
        <div class="store-infowindow store_tile">
          <div class="title">' . $sl['name'] . '</div>

          <div class="address margin-bottom-5" country="india" state="' . $sl['state'] . '" city="' . $sl['city'] . '" zipcode="' . $sl['pincode'] . '">' . $sl['address'] . '</div>

          <div class="margin-bottom-5"> Pincode : ' . $sl['pincode'] . '</div>

          <div> Phone : ' . $sl['phone'] . '</div>

          <a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" class="get-direction-link" target="_blank">
            <img src="' . $this->config->item('theme_url') . 'images/icon/get-direction.png" alt="Get Directions Icon" /> Get Direction
          </a>
        </div>
      </div>'; */

      $infowindow_details_markup = '<div class="store store_tile storeLeftPin" data-store-id="' . $storeNo . '" data-store-type="' . $sl['type'] . '" data-storename="' . $sl['name'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '" id="store-' . $sl['id'] . '" latitude="' . $sl['lat'] . '" longitude="' . $sl['lng'] . '" icon="' . $icon . '">';
      $infowindow_details_markup .= ' <div class="store_ctr">' . $storeNo . '.</div>';

      $infowindow_details_markup .= ' <div class="store_details">';
      $infowindow_details_markup .= '   <h4 class="store_name">' . $sl['name'] . '</h4>';

      $infowindow_details_markup .= '   <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

      if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
        $infowindow_details_markup .= ' <p class="store_email" style="display: none;">';
        $infowindow_details_markup .= '   <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
        $infowindow_details_markup .= ' </p>';
      }

      if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
        $infowindow_details_markup .= ' <p class="store_contact">';
        $phone_numbers = explode(',', $sl['phone']);

        foreach ($phone_numbers as $phone) {
          $ph = strtr($phone, array('-' => '', ' ' => ''));

          $infowindow_details_markup .= '   <a href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
        }

        $infowindow_details_markup .= ' </p>';
      }

      $infowindow_details_markup .= '<a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" role="button" class="btn cta_get_directions ga_get_direction" target="_blank">Get Directions</a>';
      $infowindow_details_markup .= '<a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</a>';
      $infowindow_details_markup .= '</div></div>';

      $infowindow_details[] = $infowindow_details_markup;

      $is_store_open_style = (strtolower($sl['is_open']) == 'yes') ? 'color: green;' : 'color: red;'; // animation: blinker 0.6s linear infinite
      $is_store_delivering_style = (strtolower($sl['is_delivering']) == 'yes') ? 'color: green;' : 'color: red;'; // animation: blinker 0.6s linear infinite

      $address_details_markup = '<div class="store store_tile storeLeftPin" data-store-id="' . $storeNo . '" data-storename="' . $sl['name'] . '" data-store-type="' . $sl['type'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '" id="store-' . $sl['id'] . '" latitude="' . $sl['lat'] . '" longitude="' . $sl['lng'] . '" icon="' . $icon . '">';
      $address_details_markup .= '  <div class="store_ctr">' . $storeNo . '.</div>';

      $address_details_markup .= '  <div class="store_details">';
      $address_details_markup .= '    <h4 class="store_name">' . $sl['name'] . '</h4>';

      $address_details_markup .= '    <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

      if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
        $address_details_markup .= '  <p class="store_email" style="display: none;">';
        $address_details_markup .= '    <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
        $address_details_markup .= '  </p>';
      }

      if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
        $address_details_markup .= '  <p class="store_contact">';
        $phone_numbers = explode(',', $sl['phone']);

        foreach ($phone_numbers as $phone) {
          $ph = strtr($phone, array('-' => '', ' ' => ''));

          $address_details_markup .= '    <a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
        }

        $address_details_markup .= '  </p>';
      }

      $address_details_markup .= '<a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" role="button" class="btn cta_get_directions ga_get_direction">Get Directions</a>';
      $address_details_markup .= '<a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</a>';
      $address_details_markup .= '</div></div>';

      $address_details[] = $address_details_markup;

      $marker_icon[] = $icon_image;

      $storeNo++;
    }
    /* } else { 
      $infowindow_details[] = '<div class="map_pin">
        <div class="store-infowindow store_tile">
          <div class="title">Oops! We could not find any APR stores in your selected area.</div>
        </div>
      </div>';
        
      $address_details[] = '<div class="store store_tile storeLeftPin" >
        <div class="store_ctr">' . $storeNo . '.</div>

        <div class="store_details">
          <p class="store_address">Oops! We could not find any Multibrand stores in your selected area.</p>
        </div>
      </div>';
    } */

    if ($str == '') {
      $str = 'NA';
    }

    $multi_brand_store_address_details = [];

    if (!empty($store_location_new['multiBrandStores'])) {
      $MultiBrandStoreNo = 1;

      // <div class="store_ctr">' . $MultiBrandStoreNo . '.</div>
      foreach ($store_location_new['multiBrandStores'] as $sl) {
        $multi_brand_store_address_details_markup = '<div class="grid-item">';
        $multi_brand_store_address_details_markup .= '  <div class="store store_tile id="store-' . $sl['id'] . '" data-store-id="' . $MultiBrandStoreNo . '" data-storename="' . $sl['name'] . '" data-store-type="' . $sl['type'] . '"  data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '">';
        $multi_brand_store_address_details_markup .= '    <div class="store_details">';
        $multi_brand_store_address_details_markup .= '      <h4 class="store_name">' . $sl['name'] . '</h4>';

        $multi_brand_store_address_details_markup .= '      <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

        if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
          $multi_brand_store_address_details_markup .= '<p class="store_email" style="display: none;">';
          $multi_brand_store_address_details_markup .= ' <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
          $multi_brand_store_address_details_markup .= '</p>';
        }

        if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
          $multi_brand_store_address_details_markup .= '<p class="store_contact">';
          $phone_numbers = explode(',', $sl['phone']);

          foreach ($phone_numbers as $phone) {
            $ph = strtr($phone, array('-' => '', ' ' => ''));

            $multi_brand_store_address_details_markup .= '<a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
          }

          $multi_brand_store_address_details_markup .= '</p>';
        }

        $multi_brand_store_address_details_markup .= '<button type="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</button>';
        $multi_brand_store_address_details_markup .= '</div></div></div>';

        $multi_brand_store_address_details[] = $multi_brand_store_address_details_markup;

        $MultiBrandStoreNo++;
      }
    }

    /* if (count($partners) > 0) {
      $partner_html = '';

      $p = [];

      foreach ($partners as $partner) {
        $prt = (array)$partner;
        $i = 1;

        for ($i; $i <= 30; $i++) {
          $key = 'P' . $i;

          if ($prt["$key"]) {
            $partnerData = $this->arr_search($parteners_details, 'id', $prt["$key"]);

            if (!in_array($partnerData[0]['id'], $p)) {
              $p[] = $partnerData[0]['id'];

              switch ($current_page) {
                case 'iphone-11':
                  if ($partnerData[0]['iphone_11'] !== '') {
                    $partner_redirection_url = $partnerData[0]['iphone_11'];
                  }

                  break;

                case 'iphone-se':
                  if ($partnerData[0]['iphone_se'] !== '') {
                    $partner_redirection_url = $partnerData[0]['iphone_se'];
                  }

                  break;

                case 'iphone-xr':
                  if ($partnerData[0]['iphone_xr'] !== '') {
                    $partner_redirection_url = $partnerData[0]['iphone_xr'];
                  }

                  break;

                case 'macbook-air':
                  if ($partnerData[0]['macbook_air'] !== '') {
                    $partner_redirection_url = $partnerData[0]['macbook_air'];
                  }

                  break;

                case 'macbook-pro-33-cm':

                  if ($partnerData[0]['macbook_pro_33_cm'] != '') {
                    $partner_redirection_url = $partnerData[0]['macbook_pro_33_cm'];
                  }

                  break;

                case 'macbook-pro-40-cm':
                  if ($partnerData[0]['macbook_pro_40_cm'] !== '') {
                    $partner_redirection_url = $partnerData[0]['macbook_pro_40_cm'];
                  }

                  break;

                case 'imac-53-cm':
                  if ($partnerData[0]['imac_53_cm'] !== '') {
                    $partner_redirection_url = $partnerData[0]['imac_53_cm'];
                  }

                  break;

                case 'imac-68-cm':
                  if ($partnerData[0]['imac_68_cm'] !== '') {
                    $partner_redirection_url = $partnerData[0]['imac_68_cm'];
                  }

                  break;

                case 'ipad':
                  if ($partnerData[0]['ipad'] !== '') {
                    $partner_redirection_url = $partnerData[0]['ipad'];
                  }

                  break;

                case 'iPad-Air':
                  if ($partnerData[0]['ipad_air'] !== '') {
                    $partner_redirection_url = $partnerData[0]['ipad_air'];
                  }

                  break;

                case 'ipad-pro':
                  if ($partnerData[0]['ipad_pro'] !== '') {
                    $partner_redirection_url = $partnerData[0]['ipad_pro'];
                  }

                  break;

                case 'apple-watch-series-3':
                  if ($partnerData[0]['watch_series_3'] !== '') {
                    $partner_redirection_url = $partnerData[0]['watch_series_3'];
                  }

                  break;

                case 'watch-series-5-cellular':
                  if ($partnerData[0]['watch_series_5'] !== '') {
                    $partner_redirection_url = $partnerData[0]['watch_series_5'];
                  }

                  break;

                case 'watch-series-6':
                  if ($partnerData[0]['watch_series_6'] !== '') {
                    $partner_redirection_url = $partnerData[0]['watch_series_6'];
                  }

                  break;

                case 'watch-se':
                  if ($partnerData[0]['watch_se'] !== '') {
                    $partner_redirection_url = $partnerData[0]['watch_se'];
                  }

                  break;

                case 'airpods':
                  if ($partnerData[0]['airpods'] !== '') {
                    $partner_redirection_url = $partnerData[0]['airpods'];
                  }

                  break;

                case 'airpods-pro':
                  if ($partnerData[0]['airpods_pro'] !== '') {
                    $partner_redirection_url = $partnerData[0]['airpods_pro'];
                  }

                  break;

                case 'homepod':
                  if ($partnerData[0]['homepod'] !== '') {
                    $partner_redirection_url = $partnerData[0]['homepod'];
                  }

                  break;
                case 'homepod-mini':
                  if ($partnerData[0]['homepod_mini'] !== '') {
                    $partner_redirection_url = $partnerData[0]['homepod_mini'];
                  }

                  break;
              }

              $partner_html .= '<div class="col-md-4">
                  <div class="partner">
                    <div class="aa_partner">
                      <img src="' . $this->config->item('theme_url') . 'images/partners/' . $partnerData[0]['logo'] . '" alt="' . $partnerData[0]['name'] . '" />
                    </div>

                    <div class="aa_partner_desc text-center">';

              if ($partnerData[0]['website'] !== '') {
                $partner_html .= '<div><a href="' . $partnerData[0]['website'] . '" target="_blank" class="link_website ga_link_website">' . parse_url($partnerData[0]['website'], PHP_URL_HOST) . '</a></div>';
              } else {
                $partner_html .= '<div>&nbsp;</div>';
              }

              if ($partnerData[0]['contact'] !== '') {
                $phone_numbers = explode(',', $partnerData[0]['contact']);

                $partner_html .= '<div>';

                foreach ($phone_numbers as $phone) {
                  $ph = strtr($phone, array('-' => '', ' ' => ''));

                  $partner_html .= '<a href="tel:' . $ph . '"  class="link_contact ga_link_contact">';
                  $partner_html .= '  <i class="ii-icon-phone"></i>&nbsp;&nbsp;' . $phone;
                  $partner_html .= '</a>';
                }

                $partner_html .= '</div>';
              } else {
                $partner_html .= '<div>&nbsp;</div>';
              }

              $partner_html .= '</div>
                  </div>
                </div>';
            }
          }
        }
      }
    } else {
      $partner_html = '';
    }*/

    $partner_html = '';

    if (!empty($store_location_new['onlineStores'])) {
      /* foreach ($store_location_new['onlineStores'] as $partner) {
        $partner_html .= '<div class="col-md-3 col-sm-6">';
        $partner_html .= '  <div class="partner">';
        $partner_html .= '    <div class="aa_partner">';
        $partner_html .= '      <img src="' . (PATH_FILES_UPLOADS . 'partners/' . $partner['logo_rectangular']) . '" alt="' . $partner['reseller'] . '" />';
        $partner_html .= '    </div>';

        $partner_html .= '    <div class="aa_partner_desc text-center">';

        if ($partner['website'] != '') {
          $partner_html .= '<div><a href="' . $partner['website'] . '" data-storename="' . $partner['name'] . '" target="_blank" class="link_website ga_link_website">' . parse_url($partner['website'], PHP_URL_HOST) . '</a></div>';
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        if ($partner['phone'] !== '') {
          $phone_numbers = explode(',', $partner['phone']);

          $partner_html .= '<div>';

          foreach ($phone_numbers as $phone) {
            $ph = strtr($phone, ['-' => '', ' ' => '']);

            $partner_html .= '<a href="tel:' . $ph . '"  class="link_contact ga_link_contact" data-storename="' . $partner['name'] . '">';
            $partner_html .= '  <i class="ii-icon-phone"></i>&nbsp;&nbsp;' . $phone;
            $partner_html .= '</a>';
          }

          $partner_html .= '</div>';
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        $partner_html .= '    </div>';
        $partner_html .= '  </div>';
        $partner_html .= '</div>';
      } */

      foreach ($store_location_new['onlineStores'] as $partner) {

        $partner_html .= "<div class='store' data-partner-name='$partner[name]' data-partner-phone='$partner[phone]'>";
        $partner_html .= "<div class='img'><img src='" . PATH_FILES_UPLOADS . 'partners/' . $partner['logo'] . "' alt='$partner[reseller]'></div>";


        if ($partner['phone'] !== '') {
          $phone_numbers = preg_split('/ (,|;) /', $partner['phone']);
          foreach ($phone_numbers as $phone) {
            $partner_html .= "<div class='num'>
              <a href='tel:$phone' data-storename='$partner[name]' class='ga_link_contact'>
                <i class='ii-icon-phone'></i> $phone </a>
                </div>
            ";
          }
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        if ($partner['website'] != '') {
          $partner_html .= "<div class='link'><a href='$partner[website]' target='_blank' class='link_website ga_link_website'>" . parse_url($partner['website'], PHP_URL_HOST) . "</a></div>";
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        $partner_html .= "</div>";
      }
    }

    $result = [
      'str' => $str,
      'infowindow_details' => $infowindow_details,
      'address_details' => $address_details,
      'multi_brand_store_address_details' => $multi_brand_store_address_details,
      'partner_html' => $partner_html,
    ];

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($result));
  }

  public function api_send_sms()
  {
    if (sizeof($this->input->post()) > 0) {
      $ph = $this->input->post('ph');
      $store_name = $this->input->post('store_name');
      $store_address = $this->input->post('store_address');
      $store_pincode = $this->input->post('store_pincode');
      $store_phone = $this->input->post('store_phone');
      $store_is_open = $this->input->post('store_is_open');

      $urlEndpoint = 'https://sms.vrinfosoft.co.in/unified.php';

      $text = '';
      $text .= "Dear Customer,\n";
      $text .= "Here is the Apple Authorised Reseller details that you requested.\n\n";
      $text .= $store_name . "\n";
      $text .= $store_address . "\n";
      $text .= "Pincode: " . $store_pincode . "\n";
      $text .= "Phone: " . $store_phone . "\n";

      if ($store_is_open) {
        $text .= "Store Open: " . $store_is_open;
      }

      $text .= ' - VRIN';

      $data = array(
        'usr' => 'ankit.gupta@isobar.com',
        'pwd' => '123456',
        'ph' => $ph,
        'sndr' => 'VRALRT',
        'text' => rawurlencode($text),
        'type' => 'json',
      );

      $queryParams = '';

      foreach ($data as $key => $value) {
        $queryParams .= $key . '=' . $value . '&';
      }

      $queryParams = trim($queryParams, '&');

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, ($urlEndpoint . '?' . $queryParams)); // Url together with parameters
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return data instead printing directly in Browser
      curl_setopt($ch, CURLOPT_HEADER, 0);

      $result = curl_exec($ch);

      if (curl_errno($ch)) { //catch if curl error exists and show it
        echo 'Curl error: ' . curl_error($ch);

        $response = array(
          'status' => false,
          'message' => 'Something went wrong while sending the details via SMS.',
          'info' => curl_error($ch),
        );

        //log_event(3, 'SMS LOG', $response['message'], $response['info']);
      } else {
        $response = array(
          'status' => true,
          'message' => 'The store name and address has been successfully sent via SMS.',
          'info' => $result,
        );

        //log_event(1, 'SMS LOG', $response['message'], json_decode($result, true));
      }

      curl_close($ch);

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    } else {
      //log_event(3, 'SMS LOG', 'Tried to access method without post parameters');

      $this->output->set_status_header(400);
    }
  }

  public function get_all_partner_store_data_by_pincode()
  {
   
    if ($this->input->method() == 'post') {
    $pincode = trim($this->input->post('pincode'));

   
    //$pincode = 600018;
    $current_page = trim($this->input->post('current_page'));

    $store_location_new = $this->sto_loc_m->get_store_partner_details_new_pincode($pincode);

  

    // $partners = $store_location_new['partners'];

    // $parteners_details = json_decode(json_encode($store_location_new['parteners_details']), true);

    $str   = '';
    $count = 0;

    $infowindow_details = [];
    $address_details    = [];

    $storeNo = 1;
    /* if (!empty($store_location_new['AarAprDetails'])){ */
    foreach ($store_location_new['monoBrandStores'] as $sl) {
      $icon = $storeNo . '.png'; //'pin.png'; // $sl['icon_alphabet'] . '.png';

      $icon_path = PATH_FILES_UPLOADS . 'files/uploads/store_locator/g-map-pins/' . $icon;

      if (@getimagesize($icon_path)) {
        $icon_image = $icon;
      } else {
        $icon_image = 'pin.png';
      }

      if ($sl['lat'] != '') {
        if ($count > 0) {
          $str .= '|';
        }

        $str   .= (isset($sl['store']) ? $sl['store'] : '') . '==' . $sl['lat'] . '==' . $sl['lng'] . '==' . (isset($sl['SlNo']) ? $sl['SlNo'] : '') . '==' . $icon;
        $count = $count + 1;
      }

    
      $infowindow_details_markup = '<div class="store store_tile storeLeftPin" data-store-id="' . $storeNo . '" data-store-type="' . $sl['type'] . '" data-storename="' . $sl['name'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '" id="store-' . $sl['id'] . '" latitude="' . $sl['lat'] . '" longitude="' . $sl['lng'] . '" icon="' . $icon . '">';
      $infowindow_details_markup .= ' <div class="store_ctr">' . $storeNo . '.</div>';

      $infowindow_details_markup .= ' <div class="store_details">';
      $infowindow_details_markup .= '   <h4 class="store_name">' . $sl['name'] . '</h4>';

      $infowindow_details_markup .= '   <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

      if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
        $infowindow_details_markup .= ' <p class="store_email" style="display: none;">';
        $infowindow_details_markup .= '   <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
        $infowindow_details_markup .= ' </p>';
      }

      if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
        $infowindow_details_markup .= ' <p class="store_contact">';
        $phone_numbers = explode(',', $sl['phone']);

        foreach ($phone_numbers as $phone) {
          $ph = strtr($phone, array('-' => '', ' ' => ''));

          $infowindow_details_markup .= '   <a href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
        }

        $infowindow_details_markup .= ' </p>';
      }

      $infowindow_details_markup .= '<a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" role="button" class="btn cta_get_directions ga_get_direction" target="_blank">Get Directions</a>';
      $infowindow_details_markup .= '<a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</a>';
      $infowindow_details_markup .= '</div></div>';

      $infowindow_details[] = $infowindow_details_markup;

      $is_store_open_style = (strtolower($sl['is_open']) == 'yes') ? 'color: green;' : 'color: red;'; // animation: blinker 0.6s linear infinite
      $is_store_delivering_style = (strtolower($sl['is_delivering']) == 'yes') ? 'color: green;' : 'color: red;'; // animation: blinker 0.6s linear infinite

      $address_details_markup = '<div class="store store_tile storeLeftPin" data-store-id="' . $storeNo . '" data-storename="' . $sl['name'] . '" data-store-type="' . $sl['type'] . '" data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '" id="store-' . $sl['id'] . '" latitude="' . $sl['lat'] . '" longitude="' . $sl['lng'] . '" icon="' . $icon . '">';
      $address_details_markup .= '  <div class="store_ctr">' . $storeNo . '.</div>';

      $address_details_markup .= '  <div class="store_details">';
      $address_details_markup .= '    <h4 class="store_name">' . $sl['name'] . '</h4>';

      $address_details_markup .= '    <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

      if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
        $address_details_markup .= '  <p class="store_email" style="display: none;">';
        $address_details_markup .= '    <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
        $address_details_markup .= '  </p>';
      }

      if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
        $address_details_markup .= '  <p class="store_contact">';
        $phone_numbers = explode(',', $sl['phone']);

        foreach ($phone_numbers as $phone) {
          $ph = strtr($phone, array('-' => '', ' ' => ''));

          $address_details_markup .= '    <a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
        }

        $address_details_markup .= '  </p>';
      }

      $address_details_markup .= '<a href="https://www.google.com/maps/dir/Current+Location/' . $sl['lat'] . ',' . $sl['lng'] . '" role="button" class="btn cta_get_directions ga_get_direction">Get Directions</a>';
      $address_details_markup .= '<a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</a>';
      $address_details_markup .= '</div></div>';

      $address_details[] = $address_details_markup;

      $marker_icon[] = $icon_image;

      $storeNo++;
    }
  
    if ($str == '') {
      $str = 'NA';
    }

    $multi_brand_store_address_details = [];

    if (!empty($store_location_new['multiBrandStores'])) {
      $MultiBrandStoreNo = 1;

      // <div class="store_ctr">' . $MultiBrandStoreNo . '.</div>
      foreach ($store_location_new['multiBrandStores'] as $sl) {
        $multi_brand_store_address_details_markup = '<div class="grid-item">';
        $multi_brand_store_address_details_markup .= '  <div class="store store_tile id="store-' . $sl['id'] . '" data-store-id="' . $MultiBrandStoreNo . '" data-storename="' . $sl['name'] . '" data-store-type="' . $sl['type'] . '"  data-address="' . $sl['address'] . '" data-pincode="' . $sl['pincode'] . '" data-phone="' . $sl['phone'] . '">';
        $multi_brand_store_address_details_markup .= '    <div class="store_details">';
        $multi_brand_store_address_details_markup .= '      <h4 class="store_name">' . $sl['name'] . '</h4>';

        $multi_brand_store_address_details_markup .= '      <p class="store_address">' . $sl['address'] . ', ' . $sl['pincode'] . '</p>';

        if (($sl['email'] !== NULL) && ($sl['email'] !== '')) {
          $multi_brand_store_address_details_markup .= '<p class="store_email" style="display: none;">';
          $multi_brand_store_address_details_markup .= ' <a href="mailto:' . $sl['email'] . '"><i class="ii-icon-email"></i> '  . $sl['email'] . '</a>';
          $multi_brand_store_address_details_markup .= '</p>';
        }

        if (($sl['phone'] !== NULL) && ($sl['phone'] !== '')) {
          $multi_brand_store_address_details_markup .= '<p class="store_contact">';
          $phone_numbers = explode(',', $sl['phone']);

          foreach ($phone_numbers as $phone) {
            $ph = strtr($phone, array('-' => '', ' ' => ''));

            $multi_brand_store_address_details_markup .= '<a class="ga_link_contact" href="tel:' . $ph . '"><i class="ii-icon-phone"></i> ' . $phone . '</a>';
          }

          $multi_brand_store_address_details_markup .= '</p>';
        }

        $multi_brand_store_address_details_markup .= '<button type="button" class="btn cta_send_sms trigger_modal_send_sms ga_sms">SMS</button>';
        $multi_brand_store_address_details_markup .= '</div></div></div>';

        $multi_brand_store_address_details[] = $multi_brand_store_address_details_markup;

        $MultiBrandStoreNo++;
      }
    }

   

    $partner_html = '';

    if (!empty($store_location_new['onlineStores'])) {
      
      foreach ($store_location_new['onlineStores'] as $partner) {

        $partner_html .= "<div class='store' data-partner-name='$partner[name]' data-partner-phone='$partner[phone]'>";
        $partner_html .= "<div class='img'><img src='" . PATH_FILES_UPLOADS . 'partners/' . $partner['logo'] . "' alt='$partner[reseller]'></div>";


        if ($partner['phone'] !== '') {
          $phone_numbers = preg_split('/ (,|;) /', $partner['phone']);
          foreach ($phone_numbers as $phone) {
            $partner_html .= "<div class='num'>
              <a href='tel:$phone' data-storename='$partner[name]' class='ga_link_contact'>
                <i class='ii-icon-phone'></i> $phone </a>
                </div>
            ";
          }
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        if ($partner['website'] != '') {
          $partner_html .= "<div class='link'><a href='$partner[website]' target='_blank' class='link_website ga_link_website'>" . parse_url($partner['website'], PHP_URL_HOST) . "</a></div>";
        } else {
          $partner_html .= '<div>&nbsp;</div>';
        }

        $partner_html .= "</div>";
      }
    }
    $result = [
      'str' => $str,
      'infowindow_details' => $infowindow_details,
      'address_details' => $address_details,
      'multi_brand_store_address_details' => $multi_brand_store_address_details,
      'partner_html' => $partner_html,
    ];

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($result));
    } else {
      
    } 
  }
}
