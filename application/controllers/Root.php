<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Root extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}
	
	public function index(){
		
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',25);
		
		$output1 = $this->patient();

		$output2 = $this->medicine();

		$output3 = $this->diagnosis();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}
	
	public function _example_output($output = null){
		$this->load->view('example.php',$output);
	}
	
	public function patient(){
		
		//Config
		$crud = new grocery_CRUD();
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		
		//Setting Database
		$crud->set_theme('datatables');
		$crud->set_table('pms_patient');
		$crud->set_subject('Patient');
		
		//Field setup
		$crud->set_rules('Patient_Age','Age','required|integer');
		$crud->set_rules('Patient_Name','Name','required|alpha_numeric_spaces');
		$crud->set_rules('Patient_Sex','Sex','required|alpha');
		$crud->set_rules('Phone','Phone number','required|numeric');
		
		//Set Field Type
		$crud->field_type('Patient_Sex','dropdown', array('male' => 'Male', 'female' => 'Female','other' => 'Other'));
		$crud->field_type('Patient_Address','text');
		$crud->unset_texteditor('Patient_Address');
		
		//Executing
		$output = $crud->render();
		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}

		
	}
	
	public function setting(){
		
		//Config
		$crud = new grocery_CRUD();
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		
		//Setting Database
		$crud->set_theme('datatables');
		$crud->set_table('pms_setting');
		$crud->set_subject('Settings');
		
		//Field setup
		$crud->set_rules('Doctor_Name','Name','required|alpha_numeric_spaces');
		$crud->set_rules('Doctor_Speciality','Speciality','required');
		$crud->set_rules('Doctor_Qualification','Qualification','required');
		$crud->set_rules('Doctor_Phone','Phone number','required|numeric');
		$crud->set_rules('Doctor_Email','Email','valid_email');
		
		
		//Set Field Type
		$crud->field_type('Doctor_Speciality','text');
		$crud->field_type('Doctor_Qualification','text');
		$crud->field_type('Chamber_Address','text');
		
		$crud->unset_texteditor('Doctor_Speciality', 'Doctor_Qualification', 'Chamber_Address');
		
		//Executing
		$output = $crud->render();
		echo $crud->getState();
		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}

		
	}
	
	public function diagnosis(){
		
		//Config
		$crud = new grocery_CRUD();
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		
		//Setting Database
		$crud->set_theme('datatables');
		$crud->set_table('pms_diagnosis');
		$crud->set_subject('Diagnosis');
		
		//Field setup
		$crud->set_rules('Diagnosis_Name','Name','required|alpha_numeric_spaces');
		
	
		
		//Set Field Type
		$crud->field_type('Diagnosis_Description','text');
		
		
		//Executing
		$output = $crud->render();
		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}

		
	}
	
	public function medicine(){
		
		//Config
		$crud = new grocery_CRUD();
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		
		//Setting Database
		$crud->set_theme('datatables');
		$crud->set_table('pms_medicine');
		$crud->set_subject('Medicine');
		
		//Field setup
		$crud->set_rules('Medicine_Name','Name','required');
		
		//Executing
		$output = $crud->render();
		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}

		
	}
	
}