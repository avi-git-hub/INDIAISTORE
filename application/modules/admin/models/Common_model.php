<?php

class Common_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStates($col = 'name', $order = 'ASC')
    {
        return $this->db->order_by($col, $order)->get_where('states', ['status' => '1'])->result();
    }

    public function getCities($col = 'name', $order = 'ASC')
    {
        return $this->db->order_by($col, $order)->get_where('cities', ['status' => '1'])->result();
    }

    public function getCitiesByStateId($id = 0)
    {
        return $this->db->get_where('cities', ['state_id' => $id, 'status' => '1'])->result();
    }
}
