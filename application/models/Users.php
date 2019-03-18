<?php 
    class Users extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function insert_user(){
              
             $data = array();
             $data['email'] = $_POST['email'];
             $data['fullname'] = $_POST['fullname'];
             $data['username'] = $_POST['username'];
             $data['password'] = $_POST['password'];
             $data['detail'] = $_POST['detail'];
             $data['image'] = $_POST['image'];
            return $this->db->insert('users', $data);
        }
        public function view_users(){
            $query = $this->db->get('users');
            $data = $query->result();
            return $data;
        }
        public function user_delete( $user_id ){
            $query = $this->db->delete('users', array('id' => $user_id));
            if(! $query ){
                die('error deleting data');
            }else{
                redirect('admin/users/view');
            }
        }
        public function user_edit($edit_id){
             $query = $this->db->get_where('users', array('id' => $edit_id));
             //die($query);
             //print_r($query->result_array());
             $data = $query->result_array();
             //print_r($data);
             return $data;
        }
        public function update_users(){
            $data = array();
            $data['email'] = $_POST['email'];
            $data['fullname'] = $_POST['fullname'];
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['detail'] = $_POST['detail'];
            $data['image'] = $_POST['image'];
            //print_r($data);
             $id = $_POST['user_id'];
            $this->db->where('id', $id);
            return $this->db->update('users', $data);
        }
    }