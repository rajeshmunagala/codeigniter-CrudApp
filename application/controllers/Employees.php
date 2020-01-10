<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->model('employee');
    }

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('employee/index');
		$this->load->view('layout/footer');
    }
    public function showAllemployees(){
        $data = $this->employee->get_employees();
        echo json_encode($data);
    }

    public function addEmployee(){
        $result = $this->employee->insert_employee();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function editEmployee(){
        $result = $this->employee->editEmployee();
        echo json_encode($result);
    }

    public function updateEmployee(){
        $result = $this->employee->update_employee();
        $msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
    }
}
