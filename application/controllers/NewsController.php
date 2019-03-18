<?php 
    class NewsController extends CI_Controller{
        // public function __contruct(){
        //     parent::__construct();
        //     $this->load->model('bizpati_special_news');
        //     $this->load->helper('url_helper');
        // }
        public function create(){
            $this->load->helper('url');    
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = "Create special news";
            $this->form_validation->set_rules('headline','Headline','required');
            $this->form_validation->set_rules('extract','Sumamry','required');
            $this->form_validation->set_rules('text','Detail','required');
            if($this->form_validation->run() === false ){
                $this->load->view('inc/header.php');
                $this->load->view('news/create',$data);
                $this->load->view('inc/footer.php');

            }else{
                // $this->news_model->set_news();
                // $this->load->view('news/create');
            }


        }
    } 