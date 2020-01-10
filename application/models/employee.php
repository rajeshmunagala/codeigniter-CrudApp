<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Employee extends CI_Model {

        public $title;
        public $content;
        public $date;
        
        public function get_employees()
        {
                $query = $this->db->get('employees');
                if($query->num_rows() > 0){
                    return $query->result();
                }
                else {
                    return false;
                }
        }
        
        public function insert_employee()
        {
                $fields = array(
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'email' => $this->input->post('email'),
                    'created_on' => date('Y-m-d H:i:s')
                );
        
                $this->db->insert('employees', $fields);
                if($this->db->affected_rows() > 0){
                    return true;
                }
                else{
                    return false;
                }
        }
        
        public function editEmployee(){
            $id = $this->input->get('id');
            $this->db->where('id', $id);
            $query = $this->db->get('employees');
            if($query->num_rows() > 0){
                return $query->row();
            }else{
                return false;
            }
        }
        public function update_employee()
        {
                $id = $this->input->post('id');
                $fields = array(
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'email' => $this->input->post('email'),
                    'created_on' => date('Y-m-d H:i:s')
                );
                $this->db->where('id', $id);
                $this->db->update('employees', $fields);
                if($this->db->affected_rows() > 0){
                    return true;
                }else{
                    return false;
                }
                
        }
        
    }
?>