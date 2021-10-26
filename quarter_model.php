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


	// public function get_branch_id($branch,$course)
	// {
		
	// 	$query= $this->db->query("SELECT cs.branch_id FROM course_branch cs INNER JOIN cs_branches cb 
	// 	ON cs.branch_id=cb.id WHERE cb.name='$branch' AND cs.course_id='$course'; ");
	// 	return $query->result_array();
	// }

	// public function get_all_ids($branch)
	// {
		
	// 	$query= $this->db->query("SELECT id FROM  cs_branches   WHERE name='$branch';");
	// 	return $query->result_array();
	// }

	// public function get_full_forms_to_display_in_ui($data,$val)
	// {
	// 	$branch_array=array("dummy"=>"dummy");
	// 	$course_array=array("dummy"=>"dummy");
	// 	foreach($data as $key =>$value)
	// 			{
	// 				if($val=='branch_id')
	// 				{
	// 				$id= $value['branch_id'];
	// 				$queryt= $this->db->query("SELECT name FROM  cs_branches   WHERE id='$id';");
	// 				if($queryt->num_rows()==0)
	// 				 $data[$key]['branch_id']='Junior Research Fellow';
	// 				 else{
	// 				 $temp=$queryt->result_array();
	// 				 $data[$key]['branch_id']=$temp[0]['name'];
	// 				 }
	// 				 $present=array_key_exists($data[$key]['branch_id'],$branch_array);
	// 				 $branch_full_name=$data[$key]['branch_id'];
 //                     if($present)
	// 				 {
	// 					 $get_key=$branch_array[$branch_full_name];
	// 					 $data[$get_key]['cnt']+=$data[$key]['cnt'];
	// 					unset($data[$key]);
	// 				 }
	// 				  else
	// 				 $branch_array+=array($data[$key]['branch_id'] => $key);
	// 				}
	// 				else if($val=='course_id')
	// 				{
	// 					$id= $value['course_id'];
	// 				$queryt= $this->db->query("SELECT name FROM  cs_courses   WHERE id='$id';");
	// 				if($queryt->num_rows()==0)
	// 				 $data[$key]['course_id']='Junior Research Fellow';
	// 				 else{
	// 				 $temp=$queryt->result_array();
	// 				 $data[$key]['course_id']=$temp[0]['name'];
	// 				 }
	// 				 $present=array_key_exists($data[$key]['course_id'],$course_array);
	// 				 $course_full_name=$data[$key]['course_id'];
 //                     if($present)
	// 				 {
	// 					 $get_key=$course_array[$course_full_name];
	// 					 $data[$get_key]['cnt']+=$data[$key]['cnt'];
	// 					unset($data[$key]);
	// 				 }
	// 				  else
	// 				 $course_array+=array($data[$key]['course_id'] => $key);

	// 				}
	// 				elseif($val=='sex'){
	// 					if($data[$key]['sex']=='m'){
	// 						$data[$key]['sex']="Male";

	// 					}
	// 					if($data[$key]['sex']=='f'){
	// 						$data[$key]['sex']="Female";

	// 					}
	// 					if($data[$key]['sex']=='o'){
	// 						$data[$key]['sex']="Other";

	// 					}
	// 				}
	// 				else{
	// 					break;
	// 				}

	// 			}
	// 			return (array)$data;
				  
	// }
    
   

	// public function give_data($data,$flag) //function which provides the data based on the input recieved
	// {   

	// 	$null_values=array();
	// 	$non_null_values=array();
	// 	$ans=array();
	// 	$branch_with_more_than_one_id=array("dummy","Chemical Engineering" ,"Chemistry" ,"Electronics Engineering",
	// 	"Environmental Engineering" ,"Mechanical Engineering","Petroleum Exploration" ,"Mining Engineering");
	// 	$branch=$data['branch_id'];
	// 	$course=$data['course_id'];
	// 	$flag_in_multiple_id_branch=0;
	// 	$multiple_ids="(";
	// 	// $sex=$data['sex'];
	// 	// $category=$data['category'];
	// 	if($course !='NULL')
	// 	{
	// 		    if($branch=="Mathematics and Computing"){// special case due to name field  difference in cs_branches table
	// 				if($course=="minor")
	// 				$data['branch_id']="mnc";
	// 				else if($course=="int.m.sc" || $course=="int.m.tech" || $course=="m.sc")
	// 				$data['branch_id']="m&c";

	// 			}
	// 			else{
	// 				$present=array_search($branch,$branch_with_more_than_one_id);
	// 				if($present==true)
	// 				{
	// 				$branch_id=$this->get_branch_id($branch,$course);
	// 				$data['branch_id']=$branch_id[0]['branch_id'];
	// 				}
	// 			}
				
	// 	}
	// 	else if($course =='NULL')
	// 	{
	// 		if($branch=="Mathematics and Computing"){// special case due to name field  difference in cs_branches table
	// 			$flag_in_multiple_id_branch=1;
	// 			$multiple_ids.=" 'mnc','m&c')";

	// 		}
	// 		$present=array_search($branch,$branch_with_more_than_one_id);
	// 		if($present==true)
	// 		{
	// 			$flag_in_multiple_id_branch=1;
	// 			$all_branch_id=$this->get_all_ids($branch);
	// 			$j=0;
	// 			foreach($all_branch_id as $key=>$val)
	// 			{
					
	// 				$temp= $val['id'];
	// 				if($j==0)
	// 				{
	// 				$multiple_ids.=" '$temp' ";
	// 				}
	// 				else{
	// 					$multiple_ids.=" ,'$temp' ";
	// 				}
	// 				$j++;
	// 			}
	// 			$multiple_ids.=")";
				
	// 		}
			
	// 	}
 //        if($data['inflow_outflow']=='IN')
	// 	unset($data['yop']);
	// 	else
	// 	unset($data['enrollment_year']);

	// 	foreach($data as $field=> $val)
	// 	{
	// 		if($field=='err_code' || $field=='inflow_outflow')
	// 		continue;
	// 		if($val !='NULL')
	// 		$non_null_values+=array($field => $val);
	// 		else
	// 		array_push($null_values,$field);
	// 	}
		
		
 //        $table_name="";
	// 	$table_name_abbr="";

	// 	if($data['inflow_outflow']=='IN')
	// 	{
	// 		$table_name="stu_academic";
	// 		$table_name_abbr="stac";
	// 	}
	// 	else{
	// 		$table_name="convocation_admin_final";
	// 		$table_name_abbr="caf";

	// 	}
	// 		$select_query_string="SELECT COUNT(*) AS cnt ";
	// 		$from_query_string=" FROM $table_name $table_name_abbr";
	// 		$innerjoin_query_string=" INNER JOIN user_details ud ON $table_name_abbr.admn_no=ud.id";
	// 		$where_query_string=" WHERE";
	// 		$groupby_query_string="";
	// 		$query_string="";
	// 	    $query;
	// 		$i=0;
		

	// 	foreach($non_null_values as $field=> $val)
	// 	{
	// 		$str="";
	// 		if($field=='branch_id')
	// 		{
	// 			if($val=="Mathematics and Computing")
	// 			continue;
	// 		$present=array_search($val,$branch_with_more_than_one_id);
	// 		if($present==true)
	// 		  continue;
	// 		}
	// 		if($field=='sex' || $field=='category' )
	// 		{
	// 			if($i==0)
	// 			{
	// 				$str=" ud.$field = '$val' ";
	// 			}
	// 			else
	// 			{
 //                    $str=" AND ud.$field = '$val' ";
	// 			}

          
	// 		}
	// 		else{
	// 			if($i==0)
	// 			{
	// 				$str=" $table_name_abbr.$field = '$val' ";
	// 			}
	// 			else
	// 			{
	// 				$str=" AND $table_name_abbr.$field = '$val' ";
	// 			}
				
	// 		}
	// 		$i++;
	// 		$where_query_string.=$str;
	// 	}

 //        //  $multiple_ids="che";
	// 	if($flag_in_multiple_id_branch)
	// 	{
 //            $where_query_string.=" AND $table_name_abbr.branch_id IN $multiple_ids ";
	// 	}
 //           if($flag==1){
	// 		$query_string.="SELECT * ";
	// 		$query_string.=$from_query_string;
	// 		$query_string.=$innerjoin_query_string;
	// 		$query_string.=$where_query_string;
	// 		$query_string.=";";
	// 		return $query_string;

	// 	   }
			
		


	// 	if(count($null_values)==0)
	// 	{
 //           $query_string.=$select_query_string;
	// 	   $query_string.=$from_query_string;
	// 	   $query_string.=$innerjoin_query_string;
	// 	   $query_string.=$where_query_string;
	// 	   $query_string.=";";
 //           $query= $this->db->query($query_string);
	// 	   $temp= $query->result_array();
	// 	   if($temp[0]['cnt']==0)
	// 	   return "There is no match for the data provided";
	// 	   else{
	// 		   return $query->result_array();
	// 	   }
	// 	}



	// 	else{
	// 		foreach($null_values as $val){
	// 			if($val=='sex' || $val=='category' || $val=='dept_id')
	// 			{
	// 				$select_query_string="SELECT ud.$val ,COUNT(*) AS cnt";
	// 				$groupby_query_string=" GROUP BY  ud.$val";
	// 			}
	// 			else{
	// 				$select_query_string="SELECT $table_name_abbr.$val ,COUNT(*) AS cnt";
	// 				$groupby_query_string=" GROUP BY  $table_name_abbr.$val";
	// 			}
	// 			$query_string="";
	// 			$query_string.=$select_query_string;
	// 			$query_string.=$from_query_string;
	// 			$query_string.=$innerjoin_query_string;
	// 			$query_string.=$where_query_string;
	// 			$query_string.=$groupby_query_string;
	// 			$query_string.=";";
	// 			//return $query_string;
	// 			$query= $this->db->query($query_string);
	// 			$data=$query->result_array();
	// 			$final_display_data=$this->get_full_forms_to_display_in_ui($data,$val);
	// 			 $cc=$query->num_rows();
	// 		    if($cc>0)
	// 			{$final_array_ui=json_decode(json_encode($final_display_data), true);
	// 			$ans[]=$final_array_ui;
	// 			}
	// 			else{
	// 				$ans[]="There is no match for the data provided";
	// 				break;
	// 			}
				
				 

	// 		}
	// 		return  $ans;
             	
          
	// 	}
        
		
	// }

	// public function createcsvs($data_copy){

 //        $this->load->dbutil();
 //        $this->load->helper('file');
 //        $this->load->helper('download');
	// 	$query_string=$this->give_data($data_copy,1);
	// 	// return $query_string;
 //        $query = $this->db->query($query_string);
	// 	$filename="";
	// 	foreach($data_copy as $field=> $val)
	// 	{
	// 		if($field=='err_code'|| $field=='yop')
	// 		continue;
	// 		if($val !='NULL')
	// 		$filename.="$val._";
			
	// 	}
	// 	$filename.="data";
	// 	$filename.=".csv";
	// 	// return $filename;
 //        $delimiter = ",";
 //        $newline = "\r\n";
 //        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
 //        return force_download($filename, $data);
	
	// }
	
	
}


	
