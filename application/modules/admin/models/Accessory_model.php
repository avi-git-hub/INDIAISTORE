<?php

class Accessory_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAccessories()
	{
		return $this->db
			->select('c.cat_id,c.cat_slug,c.cat_name,a.*')
			->join('categories c', 'cat_id')
			->where('c.status', '1')
			->order_by('c.display_order,a.display_order')
			->get('accessories a')
			->result();
	}

	public function getAccessoryById($id = null)
	{
		$accessories = $this->db->where(['id' => $id])->get('accessories')->row();

		$accessories_color_image = $this->db->where(['accessory_id' => $id])->get('accessories_color_image')->result();

		$accessories_attributes = $this->db
			->select('GROUP_CONCAT(DISTINCT(aa.name) ORDER BY aa.display_order) attr_name,
						GROUP_CONCAT(aav.value ORDER BY aav.display_order) attr_value,
						GROUP_CONCAT(aa.id ORDER BY aa.display_order) attr_id')
			->join('accessories_attributes_pivot aap', "aap.attribute_id = aa.id", 'left')
			->join('accessories_attributes_values aav', "aap.value_id = aav.id", 'left')
			->where(['aap.accessory_id' => $id])
			->group_by('aa.name')
			->order_by('FIELD(aa.name, "model") DESC,aa.name')
			->get('accessories_attributes aa')
			->result();

		return [
			$accessories, $accessories_color_image, $accessories_attributes
		];
	}

	public function getProdsByCatId($cat_id = null)
	{
		return $this->db->select('prod_id,prod_name,prod_slug')->where(['cat_id' => $cat_id, 'status' => '1'])->order_by('display_order')->get('products')->result();
	}
}
