<?php 
    class SpecialpostsController extends CI_Controller{

        public function viewall($id){
            $id = $this->uri->segment(1);
            $this->load->model('SpecialPostModel');
            $data['result'] = $this->SpecialPostModel->get_single_res($id);
            $this->load->view('inc/header.php');
            $this->load->view('pages/singlepost',$data);
            $this->load->view('inc/footer.php');

        }
        public function create(){
            $data['title'] = "Create Post";
                
            $image_path = realpath( 'images').'/';
            $config['upload_path']          = $image_path;
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config); 
            $this->upload->initialize($config); 

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);
                        //exit;
                        //$this->load->view('upload_form', $error);
                        $post_image = "no-image.jpg";
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        // echo "<pre>";
                        // print_r($data['upload_data']['file_name']);
                        // exit;
                        $post_image = $data['upload_data']['file_name'];
                }


            $this->form_validation->set_rules('article_post_title','Post Title','required');
            $this->form_validation->set_rules('article_sub_title','Post Sub Title','required');
            $this->form_validation->set_rules('summary','Summary','required');
            $this->form_validation->set_rules('detail','Detail','required');
            $this->form_validation->set_rules('source','Detail','required');
            if($this->form_validation->run() == false){
                //$this->form_validation->set_rules('facebook_title');
                $this->form_validation->set_rules('summary','Summary','required');
                $this->load->view('admin/inc/header.php');
                $this->load->view('admin/inc/navbar.php');
                $this->load->view('admin/posts/create-post',$data);
                $this->load->view('admin/inc/footer.php');
            }else{
           $this->load->model('SpecialPostModel');
           $query = $this->SpecialPostModel->insert($post_image);
           if($query){
               $this->session->set_flashdata('success','Data Inserted Successfully');
           redirect('admin/specialposts/view');
           }else{
             
            $this->session->set_flashdata('success','Error Inserting Data');
           } 
            }
        }
        //for viewing the posts
        public function view(){
              $data['title'] = "View Post";
            $this->load->model('SpecialPostModel');
            $data['articles'] = $this->SpecialPostModel->get_results();
            if(! $data['articles'] ){
                 $this->session->set_flashdata('error','No data found');
            }
            //echo "<pre>";
            //echo empty($data['articles']);
            //print_r($data['articles']);
            //exit;
            $this->load->view('admin/inc/header.php');
            $this->load->view('admin/inc/navbar.php');
            $this->load->view('admin/posts/view-post',$data);
            $this->load->view('admin/inc/footer.php');
        }
        public function delete($id){
             $id = $this->uri->segment(4);
             $this->load->model('SpecialPostModel');
             $query = $this->SpecialPostModel->delete_data($id);
             if($query){
                $this->session->set_flashdata('success', 'Data Deleted Successfully');
                redirect('admin/specialposts/view');
             }else{
                $this->session->set_flashdata('error', 'Error Deleting Data');
                redirect('admin/specialposts/view');
             }
        }
        public function edit($id){
            //echo $id;
            $data['title'] = "Edit data";
            $id = $this->uri->segment(4);
            $this->load->model('SpecialPostModel');
            $data['result'] = $this->SpecialPostModel->edit_data($id);
            if($data['result']){
                //$this->session->set_flashdata('success', 'Data Deleted Successfully');
                //redirect('admin/specialposts/edit-post');
                //echo "done";
                $this->load->view('admin/inc/header.php');
                $this->load->view('admin/inc/navbar.php');
                $this->load->view('admin/posts/edit-post',$data);
                $this->load->view('admin/inc/footer.php');
            }else{
                $this->session->set_flashdata('error', 'Data Not Exist');
                redirect('admin/specialposts/view');
            }
        }
        public function update(){
            //$post_id = $this->uri->segment($id);
            $image_path = realpath( 'images').'/';
            $config['upload_path']          = $image_path;
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config); 
            $this->upload->initialize($config); 

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        // print_r($error);
                        // exit;
                        //$this->load->view('upload_form', $error);
                        $post_image = "no-image.jpg";
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        // echo "<pre>";
                        // print_r($data['upload_data']['file_name']);
                        // exit;
                        $post_image = $data['upload_data']['file_name'];
                }

            $this->load->model('SpecialPostModel');
            $query = $this->SpecialPostModel->update_data($post_image); 
            if($query){
                $this->session->set_flashdata('success', 'Data Updated Successfully');
                redirect('admin/specialposts/view');
            }else{
                $this->session->set_flashdata('error', 'Error Updating Data');
                redirect('admin/specialposts/view');
            }
        }
        // ajax search
        public function ajax_search(){
            $key =  $this->input->get('search');
            $this->load->model('SpecialPostModel');
            $data['json'] = $this->SpecialPostModel->get_json($key);       
        }

    }