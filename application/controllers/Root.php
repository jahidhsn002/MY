<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Root extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
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
		$this->_example_output($output);

		
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
		$this->_example_output($output);

		
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
		$this->_example_output($output);

		
	}
	
	
	
}