<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Temp extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('home_model', 'home_m');
        $this->load->model('components_model', 'components_m');

        $this->load->helper('text');
    }
	
	public function index(){
	
		
		$this->load->driver('cache');
		
		if($this->cache->memcached->is_supported()){
		   $data = $this->cache->memcached->get('banners_home-page-hero');
		   if (!$data){
			  echo 'cache miss!<br />';
			  $data = $this->home_m->getBannersByPositionSlug('home-page-hero');
			  $this->cache->memcached->save('banners_home-page-hero',$data, 60);
		   }
		   print_r($data);
		   echo '<pre>';
		   var_dump($this->cache->memcached->cache_info());
		   echo '</pre>';
		}
		else{
		 
		  echo "Memcache not supported";	
			
		}
		
		exit;
		
	}
	
	
}

?>