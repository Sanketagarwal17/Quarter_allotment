<?php

class Quarter_electric_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
    // public $branch_id;
    public $save_string;

    public function insert_quarter_electric_info($data) {
        if ($this->db->insert('quarter_electric_info', $data))
            return "TRUE";
        else
            return "FALSE";
    }


}