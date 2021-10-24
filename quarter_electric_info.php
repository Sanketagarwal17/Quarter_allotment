<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quarter_Electric_Info extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('quarter_electric_model');
		//    require_once(APPPATH.'libraries/PHPExcel/IOFactory.php');
	}

    public function index()	{

        $data = array(
			         
			//'err_code'=>0,
			'quarter_id'=> $this->input->post('quarter_id'),
			'meter_start_reading'=> $this->input->post('meter_start_reading'),
			'meter_end_reading'=> $this->input->post('meter_end_reading'),
			'meter_start_date'=> $this->input->post('meter_start_date'),
			'meter_end_date'=> $this->input->post('meter_end_date'),
			'meter_number'=> $this->input->post('meter_number'),
			'meter_record_id'=> $this->input->post('meter_record_id'),
			'remark'=> $this->input->post('remark')
	);
        
        $this->load->library('form_validation');
		$this->drawHeader();
		$this->form_validation->set_rules();

        if ($this->form_validation->run() == FALSE && (isset ($_POST['submit'])))
		{
			$data['err_code']=1;
			//$this->load->view('templates/header_assets');
            $this->load->view('quarter_booking/quarter_electric_info_form', $data);
		}
		else if($this->form_validation->run() == TRUE && isset ($_POST['submit'])  )
		{
			
			 //$this->load->view('templates/header_assets');
			 $data['traffic'] = $this->quarter_model->insert_quarter_electric_info($data);
			$data['err_code']=0;
            $this->load->view('quarter_booking/quarter_electric_info_form', $data);	
		}
		else{
			//$this->load->view('templates/header_assets');
            $this->load->view('quarter_booking/quarter_electric_info_form', $data);	
		}
		$this->drawFooter();
		
    }

}