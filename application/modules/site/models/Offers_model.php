<?php

class Offers_model extends CI_Model
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }
}
