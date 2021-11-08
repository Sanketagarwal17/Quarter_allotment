<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quarter_Admin extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

		  $this->load->model('quarter_model');
		//    require_once(APPPATH.'libraries/PHPExcel/IOFactory.php');
	}

	public $data_copy;
	public function index()	{
		
		$this->drawHeader();
		
			$data['traffic'] = $this->quarter_model->fetch_occupancy();
            $this->load->view('quarter_occupancy',$data);
		
		$this->drawFooter();
		
	
    }
}