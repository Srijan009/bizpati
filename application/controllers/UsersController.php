<?php 

    class UsersController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->helper('form');

            
        }

        public function create(){               
            // echo "hello";
            // $this->load->helper('url'); 
           //echo  print_r($_POST);
           $this->load->library('form_validation');
           $this->form_validation->set_rules('email', 'Email', 'required');
           $this->form_validation->set_rules('fullname', 'Fullname', 'required');
           $this->form_validation->set_rules('username', 'Username', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('detail', 'Detail', 'required');
           if( $this->form_validation->run() == FALSE){
            //$this->form_validation->set_rules('password', 'Password', 'required',
            $this->load->view('admin/inc/header.php');
            $this->load->view('admin/inc/navbar.php');
            $this->load->view('admin/pages/create-user.php');
            $this->load->view('admin/inc/footer.php');                
           }else{            
                $this->load->model('users');
                $insert = $this->users->insert_user();

                if($insert){
                    $this->session->set_flashdata('success', 'data inserted');
                }else{
                    $this->session->set_flashdata('error', 'something went wrong');
                }
                
                // $this->load->view('admin/inc/message');
                //$success_msg = "data is submitted successfully";
                 redirect('/admin/users/view');
           }

        }
        public function view(){
            //loading the model
            $this->load->model('users');
            $data['users'] = $this->users->view_users();
            // echo "<pre>";
            // echo  print_r($results);
            // echo "</pre>";

            $this->load->view('admin/inc/header.php');
            $this->load->view('admin/inc/navbar.php');
            $this->load->view('admin/pages/view-users',$data);
            $this->load->view('admin/inc/footer.php');

        }
        public function delete($id){
            // echo "hello";
            // $this->load->model('users');
            //echo $id;
           $user_id =   $this->uri->segment(4);
           $this->load->model('users');
           $this->users->user_delete($user_id);

             //print_r($this->uri->segment(4));
        }
        public function edit($id){
            //echo "hello";
             $edit_id =   $this->uri->segment(4);
             $this->load->model('users');
            $data['user']  =  $this->users->user_edit($edit_id);
            // print_r($data);            
            $this->load->view('admin/inc/header.php');
            $this->load->view('admin/inc/navbar.php');
            $this->load->view('admin/pages/edit-users',$data);
            $this->load->view('admin/inc/footer.php');
        }
        public function update(){
              //print_r($_POST);
              //exit;
              $this->load->model('users');
              $this->users->update_users();
              redirect('admin/users/view');

        }

    }