<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quarter_Insert extends MY_Controller
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
			         
			//'err_code'=>0,
			'quarter_id'=> (($date[0]).$this->input->post('building_name').$this->input->post('flat_number').$this->input->post('type_of_quarter')),
			'is_deleted'=> FALSE,
			'is_occupied'=>FALSE,
			'is_visible'=>TRUE,
			'emp_id'=>NULL,
			'quarter_name'=> $this->input->post('name'),
			'type_of_quarter'=> $this->input->post('type_of_quarter'),
			'building_name'=> $this->input->post('building_name'),
			'flat_number'=> $this->input->post('flat_number'),
			'date_of_opening'=> $this->input->post('date_of_opening'),
			'address'=> $this->input->post('address'),
			'carpet_area'=> $this->input->post('carpet_area'),
			'number_of_rooms'=> $this->input->post('number_of_rooms'),
			'number_of_people'=> $this->input->post('number_of_people'),
			'number_of_washroom'=> $this->input->post('number_of_washrooms'),
			'eligibility_requirement'=> $this->input->post('eligibility_requirement'),
			'number_of_fan'=> $this->input->post('number_of_fan'),
			'number_of_entrance'=> $this->input->post('number_of_entrance'),
			'number_of_socket'=> $this->input->post('number_of_socket'),
			'number_of_meters'=> $this->input->post('number_of_meters'),
			'license_fee'=>$this->input->post('license_fee'),
			'reserved_for'=>$this->input->post('reserved_for'),
			'additional_info'=>$this->input->post('additional_info'),
			'is_balcony'=>($this->input->post('is_balcony')==TRUE),
			'is_parking'=>($this->input->post('is_parking')==TRUE),
			'is_geyser'=>($this->input->post('is_geyser')==TRUE)
		   //  'course'=>"pg"
	);

		
		$this->load->library('form_validation');
		$this->drawHeader();
		$this->form_validation->set_rules();
		$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == FALSE && (isset ($_POST['submit'])))
		{
			$data['err_code']=1;
			//$this->load->view('templates/header_assets');
            $this->load->view('quarter_form',$data);	
		}
		else if($this->form_validation->run() == TRUE && isset ($_POST['submit'])  )
		{
			
			 //$this->load->view('templates/header_assets');
			 $data['traffic'] = $this->quarter_model->insert_quarter($data);
			$data['err_code']=0;
			$this->load->view('quarter_form',$data);	
		}
		else{
			//$this->load->view('templates/header_assets');
            $this->load->view('quarter_form',$data);
		}
		$this->drawFooter();
		
	
    }

	// public function year_check($str)
	// {
	// 		if ($str>2021 || $str <1920)
	// 		{
	// 				$this->form_validation->set_message('year_check', 'The academic year should be between 1920 to 2021"');
	// 				return FALSE;
	// 		}
	// 		else
	// 		{   
	// 				return TRUE;
	// 		}
	// }

	// public function createcsv() {
		
	// 	$data_copy= array(
			         
	// 		'course_id'=> $this->input->post('course'),
	// 		'enrollment_year'=>$this->input->post('academic_year'),
	// 		'branch_id'=>$this->input->post('branch'),
	// 		'sex'=>$this->input->post('sex'),
	// 		'category'=>$this->input->post('category'),
	// 		'err_code'=>0,
	// 		'inflow_outflow'=>$this->input->post('inflow/outflow'),
	// 		'yop'=>$this->input->post('academic_year')
	// 	   //  'course'=>"pg"
	// );
	// 	// $query_string=$this->testing_model->give_data($data_copy,1);
	// 	$this->testing_model->createcsvs($data_copy);
	// 	// $this->load->view('templates/header_assets');
 //        //     $this->load->view('testing_form',$data_copy);


 // }
// public function createXLS() {
// 	create file name
//  $fileName = 'feedbackdata-' . time() . '.xls';
	 
// $this->load->helper('download');
// $this->load->library('PHPExcel');
// $this->load->library('PHPExcel/IOFactory');
// $object = new PHPExcel();

// $object->setActiveSheetIndex(0);

// $object->getProperties()->setTitle("title")
//                  ->setDescription("description");
// 				 $object->getActiveSheet()->setCellValue('A1', 'cell value here');

// $object->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'name');
// $object->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'age');
// $object->getActiveSheet()->setCellValueByColumnAndRow(0, 2, 'abs');
// $object->getActiveSheet()->setCellValueByColumnAndRow(1, 2, '20');
// $object_writer = IOFactory::createWriter($object, 'csv');
// 	header('Content-Type: application/vnd.ms-excel');
// 	header('Content-Disposition: attachment;filename="feedback Data.csv"');
	
// 	$object_writer->save('php://output');
	

		

// }
        


	

}