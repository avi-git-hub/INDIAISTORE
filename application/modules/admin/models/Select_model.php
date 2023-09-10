<?php

class Select_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStates($col = 'name', $order = 'ASC')
    {
        return $this->db->order_by($col, $order)->get('states')->result();
    }

    public function getCities($col = 'name', $order = 'ASC')
    {
        return $this->db->order_by($col, $order)->get('cities')->result();
    }

    public function getCitiesByStateId($id = 0)
    {
        return $this->db->get_where('cities', ['state_id' => $id])->result();
    }
}
