<?php
class Store_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStores($column = 'id', $order = 'ASC')
    {
        $this->db->select('s.*,st.name AS state_name,c.name AS city_name');
        $this->db->from('stores AS s');
        $this->db->join('cities AS c', 'c.id = s.city_id');
        $this->db->join('states AS st', 'st.id = s.state_id');
        $this->db->order_by($column, $order);
        $data = $this->db->get()->result();
        return $data;
    }

    public function getStoresForDownload($column = 'id', $order = 'ASC')
    {
        $this->db->select('s.id,s.name, st.name AS state_name,c.name AS city_name,s.address,s.pincode,s.phone,s.website,s.logo,s.lat,s.lng,s.is_open,s.is_delivering,s.type,s.email,st.id as state_id,c.id as city_id,s.status as status');
        $this->db->from('stores AS s');
        $this->db->join('cities AS c', 'c.id = s.city_id');
        $this->db->join('states AS st', 'st.id = s.state_id');
        $this->db->order_by($column, $order);
        $data = $this->db->get()->result();
        return $data;
    }

    public function createStore($data = null)
    {
        if (!is_array($data)) {
            return false;
        }

        return $this->db->insert('stores', $data);
    }

    public function getStore($id = 0)
    {
        return $this->db->get_where('stores', array('id' => $id))->row_array();
    }

    public function updateStore($data = null, $id = 0)
    {
        return $this->db->update('stores', $data, array('id' => $id));
    }

    public function uploadStore($data = null)
    {
        $this->db->truncate('stores');

        $status = $this->db->insert_batch('stores', $data);

        $this->db->update('stores', ['created_at' => date('Y-m-d H:i:s', time()), 'updated_by' => $this->session->userdata('userId')]);

        return $status;
    }

    public function deleteStore($id = 0)
    {
        $status = $this->db->where('id', $id)->delete('stores');
        return $status;
    }

    public function getStoreList($postData = null)
    {
        $response = array();

        $tableName = 'stores';
        $searchColumns = ['id', 'name', 'type', 'email', 'type', 'pincode', 'address', 'website'];

        ##geting columns by frontend
        // $columns = $postData['columns'];

        // $columns = ['id','name','email','type','pincode','phone','address','website','lat','lng','is_open','is_delivering','created_at','updated_at'];
        // $joinTables = ['states'];

        ## Read value
        $draw = $postData['draw'];
        $start = ($postData['start'] > 0) ? $postData['start'] : null;
        $rowperpage = ($postData['length'] > 0) ? $postData['length'] : null; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search
        $searchQuery = "";
        if ($searchValue != '') {
            foreach ($searchColumns as $key => $column) {
                if ($key < (sizeof($searchColumns) - 1)) {
                    $searchQuery .= "s.$column like '%" . $searchValue . "%' or ";
                } else {
                    $searchQuery .= "s.$column like '%" . $searchValue . "%' or ";
                    $searchQuery .= "st.name like '%" . $searchValue . "%' or ";
                    $searchQuery .= "c.name like '%" . $searchValue . "%' ";
                }
            }
        }

        ## Using individual columns for like
        // $searchQuery = " (name like '%".$searchValue."%' or
        // address like '%".$searchValue."%' or
        // pincode like '%".$searchValue."%' or
        // phone like '%".$searchValue."%' or
        // email like'%".$searchValue."%' ) ";


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get("$tableName AS s")->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from("$tableName AS s");
        $this->db->join('cities AS c', 'c.id = s.city_id');
        $this->db->join('states AS st', 'st.id = s.state_id');

        if ($searchQuery != '') {
            $this->db->where($searchQuery);
        }
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('s.*,st.name AS state,c.name AS city');
        if ($searchQuery != '') {
            $this->db->where($searchQuery);
        }
        $this->db->from("$tableName AS s");
        $this->db->join('cities AS c', 'c.id = s.city_id');
        $this->db->join('states AS st', 'st.id = s.state_id');
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        // $records = $this->db->get()->result_array();

        ## Modify data
        $records = $this->db->get()->result();
        $data = array();
        foreach ($records as $record) {
            $data[] = array(
                "id" => $record->id,
                "state" => $record->state,
                "city" => $record->city,
                "name" => $record->name,
                "logo" => PATH_FILES_UPLOADS_ADMIN . "stores/$record->logo",
                "pincode" => $record->pincode,
                "type" => $record->type
            );
        }
        // echo '<pre>';print_r($postData);echo '</pre>';exit;

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }
}
