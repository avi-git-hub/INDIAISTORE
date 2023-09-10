<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
  public $user_agent;
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('home_model', 'home_m');
    $this->load->model('common_model', 'common_m');
    $this->load->model('components_model', 'compo_m');

    $this->user_agent = get_user_agent();
  }

  public function home()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Home',
        'styles' => [
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.css',
          PATH_FRONTEND_CUSTOM_CSS . 'home.min.css?v=' . get_app_version(),
          'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/jquery.fancybox.min.css?v=' . get_app_version(),
          // PATH_FRONTEND_CUSTOM_DIST_CSS . "atcb1.min.css",
          'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
          PATH_FRONTEND_CUSTOM_CSS . 'stories.css?v=' . get_app_version(),

        ],
        'scripts' => [
          'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
          PATH_FRONTEND_CUSTOM_DIST_JS . "lity.js",
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . "fursat/jquery.fancybox.min.js?v=" . get_app_version(),
          // PATH_FRONTEND_CUSTOM_DIST_JS . "demopage.min.js?v=1.14.6",
          // PATH_FRONTEND_CUSTOM_DIST_JS . "atcb.min.js?v=1.14.6",
          PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
          PATH_FRONTEND_CUSTOM_JS . "stories.js?v=" . get_app_version(), 

        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if (ENVIRONMENT == 'production') {
      $data['page_data']['scripts'][] = PATH_FRONTEND_CUSTOM_JS . 'home/_gtag_home.js?v=' . get_app_version();
    }

    // visual_cat_data
    $data['visual_cat_data'] = memcached_get('home-page-visual-cat-data');

    if (!$data['visual_cat_data']) {
      $data['visual_cat_data'] = $this->common_m->getVisualCatData();

      memcached_save('home-page-visual-cat-data', $data['visual_cat_data'], 3600);
    }


    /* regional banners start */

    // $region_name = $this->common_m->getRegionName() ?: 'default';

    // $data['banner_hero'] = memcached_get("banner-home-page-hero-$this->user_agent-$region_name");

    // if (!$data['banner_hero']) {
    //   $data['banner_hero'] = $this->common_m->getBannersByPositionSlug('home-page-hero', $region_name);

    //   memcached_save("banner-home-page-hero-$this->user_agent-$region_name", $data['banner_hero'], 3600);
    // }

    /* regional banners end */

    $data['banner_hero'] = memcached_get("banner-home-page-hero-$this->user_agent");

    if (!$data['banner_hero']) {
      $data['banner_hero'] = $this->common_m->getBannersByPositionSlug('home-page-hero');

      memcached_save("banner-home-page-hero-$this->user_agent", $data['banner_hero'], 3600);
    }

    $data['banner_switch_from'] = memcached_get("banner-home-page-switch-from-$this->user_agent");

    if (!$data['banner_switch_from']) {
      $data['banner_switch_from'] = $this->common_m->getBannersByPositionSlug('home-page-switch-from');

      memcached_save("banner-home-page-switch-from-$this->user_agent", $data['banner_switch_from'], 3600);
    }

    $data['banner_trending_offers'] = memcached_get("banner-home-page-trending-offers-$this->user_agent");

    if (!$data['banner_trending_offers']) {
      $data['banner_trending_offers'] = $this->common_m->getBannersByPositionSlug('home-page-trending-offers');

      memcached_save("banner-home-page-trending-offers-$this->user_agent", $data['banner_trending_offers'], 3600);
    }

    $data['banner_interested_in'] = memcached_get("banner-home-page-interested-in-$this->user_agent");

    if (!$data['banner_interested_in']) {
      $data['banner_interested_in'] = $this->common_m->getBannersByPositionSlug('home-page-interested-in');

      memcached_save("banner-home-page-interested-in-$this->user_agent", $data['banner_interested_in'], 3600);
    }

    $data['banner_cat_last_thumb'] = memcached_get('banner-home-page-prod-cat-last-thumb');

    if (!$data['banner_cat_last_thumb']) {
      $data['banner_cat_last_thumb'] = $this->common_m->getBannersByPositionSlug('home-page-prod-cat-last-thumb');

      memcached_save('banner-home-page-prod-cat-last-thumb', $data['banner_cat_last_thumb'], 3600);
    }

    //premium partners
    $data['premium_partners'] = memcached_get('home-page-premium-partners');

    if (!$data['premium_partners']) {
      $data['premium_partners'] = $this->home_m->getPremiumPartners();

      memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
    }

    //categories
    $data['product_categories'] = memcached_get('home-page-product-categories');

    if (!$data['product_categories']) {
      $data['product_categories'] = $this->home_m->getCategories();

      memcached_save('home-page-product-categories', $data['product_categories'], 3600);
    }

    $data['snapshots'] = $this->home_m->getSnapshots();


    $allData = array();

    $snapshotsdata = $this->home_m->getSnapshots();
    $i = 0;
    foreach($snapshotsdata as $stories){
         $allData[$i]['id'] = $stories->id;
         $allData[$i]['story_slug'] = $stories->story_slug;
         $allData[$i]['story_name'] = $stories->story_name;
         $storydetailsforid = $this->home_m->getStorydetails($stories->id);
         $j =  0;
         foreach($storydetailsforid as $storydata){
            $allData[$i]['story_details'][$j]['id'] = $storydata->id;
            $allData[$i]['story_details'][$j]['story_name'] = $storydata->story_name;
            $allData[$i]['story_details'][$j]['story_desktop_image'] = $storydata->story_desktop_image;
            $j++;
         }
         $i++;
    }

    $data['allstories'] = $allData;

    //store locator state
    $states = memcached_get('home-page-state-list');

    if (!$states) {
      $states = $this->compo_m->getStates();

      memcached_save('home-page-state-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $this->load->view('template_frontend', $data);
  }

  /* public function get_nearby_partner_stores_data()
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request()) {
      $lat = $this->input->post('lat');
      $lng = $this->input->post('lng');
      $state_id = $this->input->post('state_id');
      $city_id = $this->input->post('city_id');
      $offline_radius = $this->input->post('distance') ?: 5; //km 
      $online_radius = 50; //km

      if ($lat && $lng) {

        //offline stores by lat lng
        $offline_store_data = memcached_get("home-page-off-store-ll-$lat-$lng");
        if (!$offline_store_data) {

          $multi_brand_data = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $offline_radius, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $offline_radius, 'mono');
          $offline_store_data = ['multi_brand_data' => $multi_brand_data, 'mono_brand_data' => $mono_brand_data];

          memcached_save("home-page-off-store-ll-$lat-$lng", $offline_store_data, 3600);
        }

        if (!empty($offline_store_data)) {
          $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);
          $response['data']['offline_stores'] = $offline_stores;
        }


        //online stores by lat lng
        $online_store_data = memcached_get("home-page-on-store-ll-$lat-$lng");
        if (!$online_store_data) {
          $online_store_data = $this->compo_m->getOnlineStoresByLoc($lat, $lng, $online_radius);
          memcached_save("home-page-on-store-ll-$lat-$lng", $online_store_data, 3600);
        }

        if (!empty($online_store_data)) {
          $online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);
          $response['data']['online_stores'] = $online_stores;
        }

        $response['status'] = true;
      } else if ($state_id && $city_id) {

        //offline stores by state city id
        $offline_store_data = memcached_get("home-page-off-store-sc-$state_id-$city_id");
        if (!$offline_store_data) {
          $multi_brand_data = $this->compo_m->getOfflineStoresById($state_id, $city_id, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresById($state_id, $city_id, 'mono');
          $offline_store_data = ['multi_brand_data' => $multi_brand_data, 'mono_brand_data' => $mono_brand_data];
          memcached_save("home-page-off-store-sc-$state_id-$city_id", $offline_store_data, 3600);
        }

        if (!empty($offline_store_data)) {
          $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);
          $response['data']['offline_stores'] = $offline_stores;
        }

        //online stores by state city id
        $online_store_data = memcached_get("home-page-on-store-sc-$state_id-$city_id");
        if (!$online_store_data) {
          $online_store_data = $this->compo_m->getOnlineStoresById($state_id, $city_id);
          memcached_save("home-page-on-store-sc-$state_id-$city_id", $online_store_data, 3600);
        }

        if (!empty($online_store_data)) {
          $online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);
          $response['data']['online_stores'] = $online_stores;
        }

        $response['status'] = true;
      }

      return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    return $this->output->set_content_type('application/json')->set_status_header(400)->set_output(json_encode($response));
  }

  public function get_cities()
  {
    $state_id = $this->input->post('state_id');

    $cities = memcached_get("home-page-city-list-$state_id");

    if (!$cities) {
      $cities = $this->compo_m->getCitiesByStateId($state_id);

      memcached_save("home-page-city-list-$state_id", $cities, 3600);
    }

    $this->output->set_content_type('application/json')->set_output(json_encode($cities));
  } */

  public function get_search_results()
  {
    $searchTerm = $this->input->get('q');
    if (!empty($searchTerm)) {
      $data = array_map(function ($d) {
        return array_values($d);
      }, $this->home_m->getSearchResults($searchTerm));

      return $this->output->set_content_type('application/json')->set_output(json_encode($data));
    } else {
      return $this->output->set_content_type('application/json')->set_output(json_encode([]));
    }

    //       SELECT GROUP_CONCAT(prod_tags SEPARATOR '|'),GROUP_CONCAT(`prod_id` SEPARATOR '|') FROM `products` WHERE prod_tags REGEXP 'air'
    // UNION
    // SELECT `prod_name`,`prod_slug` FROM `products` WHERE prod_tags REGEXP 'air'
    //   public function string_between_two_string($str, $starting_word, $ending_word)
    //   {
    //     $subtring_start = strpos($str, $starting_word);
    //     //Adding the strating index of the strating word to 
    //     //its length would give its ending index
    //     $subtring_start += strlen($starting_word);
    //     //Length of our required sub string
    //     $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
    //     // Return the substring from the index substring_start of length size 
    //     return substr($str, $subtring_start, $size);
    //   }
  }

  public function home_revamp_new()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Home',
        'styles' => [
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.css',
          PATH_FRONTEND_CUSTOM_CSS . 'home.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.css',
          'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/jquery.fancybox.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_DIST_CSS . "atcb1.min.css",
          'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
          PATH_FRONTEND_CUSTOM_CSS . 'stories.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/home_new.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'swiper-bundle.min.css?v=' . get_app_version(),

        ],
        'scripts' => [
          'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
          PATH_FRONTEND_CUSTOM_DIST_JS . "lity.js",
          PATH_FRONTEND_CUSTOM_JS . "fursat/jquery.fancybox.min.js?v=" . get_app_version(),
          PATH_FRONTEND_CUSTOM_DIST_JS . "demopage.min.js?v=1.14.6",
          PATH_FRONTEND_CUSTOM_DIST_JS . "atcb.min.js?v=1.14.6",
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
          PATH_FRONTEND_CUSTOM_JS . "swiper-bundle.min.js?v=" . get_app_version(),
          PATH_FRONTEND_CUSTOM_JS . "stories.js?v=" . get_app_version(),


        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if (ENVIRONMENT == 'production') {
      $data['page_data']['scripts'][] = PATH_FRONTEND_CUSTOM_JS . 'home/_gtag_home.js?v=' . get_app_version();
    }

    // visual_cat_data
    $data['visual_cat_data'] = memcached_get('home-page-visual-cat-data');

    if (!$data['visual_cat_data']) {
      $data['visual_cat_data'] = $this->common_m->getVisualCatData();

      memcached_save('home-page-visual-cat-data', $data['visual_cat_data'], 3600);
    }

    $data['banner_hero'] = memcached_get("banner-home-page-hero-$this->user_agent");

    if (!$data['banner_hero']) {
      $data['banner_hero'] = $this->common_m->getBannersByPositionSlug('home-page-hero');

      memcached_save("banner-home-page-hero-$this->user_agent", $data['banner_hero'], 3600);
    }

    $data['banner_switch_from'] = memcached_get("banner-home-page-switch-from-$this->user_agent");

    if (!$data['banner_switch_from']) {
      $data['banner_switch_from'] = $this->common_m->getBannersByPositionSlug('home-page-switch-from');

      memcached_save("banner-home-page-switch-from-$this->user_agent", $data['banner_switch_from'], 3600);
    }

    $data['banner_trending_offers'] = memcached_get("banner-home-page-trending-offers-$this->user_agent");

    if (!$data['banner_trending_offers']) {
      $data['banner_trending_offers'] = $this->common_m->getBannersByPositionSlug('home-page-trending-offers');

      memcached_save("banner-home-page-trending-offers-$this->user_agent", $data['banner_trending_offers'], 3600);
    }

    $data['banner_interested_in'] = memcached_get("banner-home-page-interested-in-$this->user_agent");

    if (!$data['banner_interested_in']) {
      $data['banner_interested_in'] = $this->common_m->getBannersByPositionSlug('home-page-interested-in');

      memcached_save("banner-home-page-interested-in-$this->user_agent", $data['banner_interested_in'], 3600);
    }

    $data['banner_cat_last_thumb'] = memcached_get('banner-home-page-prod-cat-last-thumb');

    if (!$data['banner_cat_last_thumb']) {
      $data['banner_cat_last_thumb'] = $this->common_m->getBannersByPositionSlug('home-page-prod-cat-last-thumb');

      memcached_save('banner-home-page-prod-cat-last-thumb', $data['banner_cat_last_thumb'], 3600);
    }

    //premium partners
    $data['premium_partners'] = memcached_get('home-page-premium-partners');

    if (!$data['premium_partners']) {
      $data['premium_partners'] = $this->home_m->getPremiumPartners();

      memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
    }

    //categories
    $data['product_categories'] = memcached_get('home-page-product-categories');

    if (!$data['product_categories']) {
      $data['product_categories'] = $this->home_m->getCategoriesNew();

      memcached_save('home-page-product-categories', $data['product_categories'], 3600);
    }

    //Buyers guide

    $data['buyers_guide'] = memcached_get("banner-smart-buyers-guide-$this->user_agent");

    if (!$data['buyers_guide']) {
      $data['buyers_guide'] = $this->common_m->getBannersByPositionSlug('smart-buyers-guide');

      memcached_save("banner-smart-buyers-guide-$this->user_agent", $data['buyers_guide'], 3600);
    }

     //Highlights

     $data['banner_highlights'] = memcached_get("banner-highlights-$this->user_agent");

     if (!$data['banner_highlights']) {
       $data['banner_highlights'] = $this->common_m->getBannersByPositionSlug('highlights');
 
       memcached_save("banner-highlights-$this->user_agent", $data['banner_highlights'], 3600);
     }
 

     


    if (!$data['tickers']) {
      $data['tickers'] = $this->common_m->getBannersByPositionSlug('home-page-ticker');

      memcached_save("banner-home-page-ticker-$this->user_agent", $data['tickers'], 3600);
    }

    $data['snapshots'] = $this->home_m->getSnapshots();


    $allData = array();

    $snapshotsdata = $this->home_m->getSnapshots();
    $i = 0;
    foreach ($snapshotsdata as $stories) {
      $allData[$i]['id'] = $stories->id;
      $allData[$i]['story_slug'] = $stories->story_slug;
      $allData[$i]['story_name'] = $stories->story_name;
      $storydetailsforid = $this->home_m->getStorydetails($stories->id);
      $j = 0;
      foreach ($storydetailsforid as $storydata) {
        $allData[$i]['story_details'][$j]['id'] = $storydata->id;
        $allData[$i]['story_details'][$j]['story_name'] = $storydata->story_name;
        $allData[$i]['story_details'][$j]['story_desktop_image'] = $storydata->story_desktop_image;
        $allData[$i]['story_details'][$j]['story_video_url'] = $storydata->video_url;
        $j++;
      }
      $i++;
    }

    $data['allstories'] = $allData;



    //store locator state
    $states = memcached_get('home-page-state-list');

    if (!$states) {
      $states = $this->compo_m->getStates();

      memcached_save('home-page-state-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $this->load->view('template_frontend_new', $data);
  }
}
