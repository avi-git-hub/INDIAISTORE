<?php

class Partner_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPartners()
    {
        return $this->db->get('partners')->result();
    }

    public function getPartner($id)
    {
        return $this->db->get_where('partners', ['id' => $id])->row();
        // return $this->db->select('p.*,pp.*,ps.name AS prod_name')
        //         ->from('partners AS p')
        //         ->join('partner_products AS pp', 'pp.partner_id = p.id')
        //         ->join('products AS ps', 'ps.id = pp.product_id')
        //         ->where('p.id', $id)->get()->result();
    }

    public function createPartner($data = null)
    {
        return insert_method('partners', $data);
    }

    public function createPartnerProduct($data = null)
    {
        return insert_method('partner_products', $data);
    }

    public function deletePartnerProduct($data = 0)
    {
        return $this->db->delete('partner_products', $data);
    }

    public function deletePartner($id = 0)
    {
        $this->db->delete('partners', ['id' => $id]);
        return $this->db->delete('partner_products', ['partner_id' => $id]);
    }

    public function updatePartner($data = null, $id = 0)
    {
        return $this->db->update('partners', $data, ['id' => $id]);
    }
    public function createOrUpdatePartnerProduct($data = null, $id = [])
    {
        $this->db->where($id);
        $q = $this->db->get('partner_products');

        if ($q->num_rows() > 0) {
            $this->db->where($id);
            $this->db->update('partner_products', $data);
        } else {
            $this->db->insert('partner_products', $data);
        }
    }
}
