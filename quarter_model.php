<?php

class Quarter_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

    public function insert_quarter($data) {
        if ($this->db->insert('quarter_info', $data))
            return "TRUE";
        else
            return "FALSE";
    }

    public function update_quarter($data) {
       
		$this->db->update('quarter_info', $data,$this->db->where('quarter_id', $data['quarter_id']));
		if ($this->db->affected_rows() > 0) {
            return "TRUE";
        } 
        else {
            return "FALSE";
        }
     
    }

    public function delete_quarter($data) {
    	$this->db->delete('quarter_info', array('quarter_id' => $data['quarter_id']));
        if ($this->db->affected_rows() > 0) {
            return "TRUE";
        } else {
            return "FALSE";
        }
    }

    public function fetch_occupancy() {

        $sql = "select a.* from quarter_info a;";

        $query = $this->db->query($sql);

        //echo $this->db->last_query(); die();
        if ($this->db->affected_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
	
}


	
