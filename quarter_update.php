<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quarter_Update extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

		  $this->load->model('quarter_model');
		//    require_once(APPPATH.'libraries/PHPExcel/IOFactory.php');
	}

	public $data_copy;
	public function index()	{
		$date = $parts = explode('-', $this->input->post('date_of_opening'));
		$data = array(
			         
			'quarter_id'=> $this->input->post('quarter_id')
			// 'is_deleted'=> FALSE,
			// 'is_occupied'=>FALSE,
			// 'is_visible'=>TRUE,
			// 'emp_id'=>NULL,
			// 'quarter_name'=> $this->input->post('name'),
			// 'type_of_quarter'=> $this->input->post('type_of_quarter'),
			// 'building_name'=> $this->input->post('building_name'),
			// 'flat_number'=> $this->input->post('flat_number'),
			// 'date_of_opening'=> $this->input->post('date_of_opening'),
			// 'address'=> $this->input->post('address'),
			// 'carpet_area'=> $this->input->post('carpet_area'),
			// 'number_of_rooms'=> $this->input->post('number_of_rooms'),
			// 'number_of_people'=> $this->input->post('number_of_people'),
			// 'number_of_washroom'=> $this->input->post('number_of_washrooms'),
			// 'eligibility_requirement'=> $this->input->post('eligibility_requirement'),
			// 'number_of_fan'=> $this->input->post('number_of_fan'),
			// 'number_of_entrance'=> $this->input->post('number_of_entrance'),
			// 'number_of_socket'=> $this->input->post('number_of_socket'),
			// 'number_of_meters'=> $this->input->post('number_of_meters'),
			// 'license_fee'=>$this->input->post('license_fee'),
			// 'reserved_for'=>$this->input->post('reserved_for'),
			// 'additional_info'=>$this->input->post('additional_info'),
			// 'is_balcony'=>($this->input->post('is_balcony')==TRUE),
			// 'is_parking'=>($this->input->post('is_parking')==TRUE),
			// 'is_geyser'=>($this->input->post('is_geyser')==TRUE)
	);

		
		$this->load->library('form_validation');
		$this->drawHeader();
		$this->form_validation->set_rules();
		$this->form_validation->set_rules('quarter_id', 'quarter_id', 'required');
		if ($this->form_validation->run() == FALSE && (isset ($_POST['Update']) || isset ($_POST['Delete']) ))
		{
			if((isset ($_POST['Update'])))
			{
				$data['err_code']=1;
            	$this->load->view('quarter_update_form',$data);	
			}
			else if((isset ($_POST['Delete'])))
			{
				$data['err_code']=1;
            	$this->load->view('quarter_update_form',$data);	
			}
			
		}
		else if($this->form_validation->run() == TRUE && (isset ($_POST['Update']) || isset ($_POST['Delete']) ))
		{
			if((isset ($_POST['Update'])))
			{
				if(isset($_POST['number_of_fan']))
				$data['number_of_fan']= $this->input->post('number_of_fan');
				if(isset($_POST['number_of_socket']))
				$data['number_of_socket']= $this->input->post('number_of_socket');
				if(isset($_POST['reserved_for']))
				$data['reserved_for']= $this->input->post('reserved_for');
				if(isset($_POST['is_geyser']))
				$data['is_geyser']=($this->input->post('is_geyser'));
				if(isset($_POST['is_visible']))
				$data['is_visible']=($this->input->post('is_visible'));
				$data['traffic'] = $this->quarter_model->update_quarter($data);
				if($data['traffic']=="TRUE")
					$data['traffic'] = "Updation";
				$data['err_code']=0;
				$this->load->view('quarter_update_form',$data);	
			}
			else if((isset ($_POST['Delete'])))
			{
				$data['traffic'] = $this->quarter_model->delete_quarter($data);
				if($data['traffic']=="TRUE")
					$data['traffic'] = "Deletion";
				$data['err_code']=0;
				$this->load->view('quarter_update_form',$data);	
			}
			
			
		}
		else{
            $this->load->view('quarter_update_form',$data);
		}
		$this->drawFooter();
		
	
    }

}