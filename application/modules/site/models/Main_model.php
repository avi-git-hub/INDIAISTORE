<?php
  
class Main_model extends CI_Model
{
  
      
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('slave', TRUE); //read only access
        $this->master_db = $this->load->database('master', TRUE); //read-write access
    }
  
    public function getCountries()
    {
        $this->db->from('countries');
        $query=$this->db->get();
        return $query->result();
    }
      
  
    public function getStates()
    {
        $this->db->select('state');
        $this->db->distinct();
        $this->db->order_by('state','asc');
        $query=$this->db->get('resellers_list');
        return $query->result();
    } 
 
    public function getCities($postData)
    {
        $this->db->select('city');
        $this->db->distinct();
        $this->db->where('state',$postData['state']);
        $query=$this->db->get('resellers_list');
        return $query->result();
    }

    public function getResellers($postData)
    {
        $this->db->select('*');
        $this->db->where('city',$postData['city']);
        $this->db->order_by('reseller','asc');
        $query=$this->db->get('resellers_list');
        return $query->result();
    }
    
    public function getProtectPlusProducts($postData)
    {
        $this->db->select('*');
        $this->db->where('category',$postData['category']);
        $query=$this->db->get('protect_plus');
        return $query->result();
    }

    public function getProtectPlusPrices($postData)
    {
        $this->db->select('*');
        $this->db->where('product_name',$postData['product_name']);
        $query=$this->db->get('protect_plus');
        return $query->result();
    }

    public function getProductCategory(){
        $this->db->select('DISTINCT(`category`)');
        $query=$this->db->get('protect_plus');
        return $query->result();
    }
 
  
}