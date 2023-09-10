<?php

class Navigation_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function createNavSection($data = null)
    {
        return insert_method('nav_sections', $data);
    }

    public function getNavSections()
    {
        return select_method('nav_sections');
    }

    public function updateNavSection($id = null, $data = null)
    {
        return update_method('nav_sections', $data, ['id' => $id]);
    }

    public function getNavItemsBySectionId($id = null)
    {
        return $this->db->select('ns.*,ni.*')->join('nav_items as ni', "ni.nav_section_id = $id")->where('ns.id', $id)->get('nav_sections as ns')->result();
    }

    public function deleteNavSection($id = 0)
    {
        delete_method('nav_items', ['nav_section_id' => $id]);
        return delete_method('nav_sections', ['id' => $id]);
    }

    public function deleteNavItem($id = 0)
    {
        return delete_method('nav_items', ['id' => $id]);
    }

    public function getNavItemsBySecId($id = null)
    {
        return $this->db
            ->select('r.*,nv.*')
            ->where(['nv.nav_section_id' => $id])
            ->join('routes as r', 'r.id = nv.route_id')
            ->order_by('nv.display_order')
            ->get('nav_items as nv')
            ->result();
    }
}
