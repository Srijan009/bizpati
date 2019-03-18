<?php 
class PagesController extends CI_Controller{
    // public function __construct(){
    //     $this->load->helper('url');    
    // }
    public function view( $page = "home" )
    {   
        // $path = APPPATH.'views/pages/'.$page.'.php';
        //  echo $path;
        $this->load->helper('url');    
        
        // echo base_url();
        if(! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        $this->load->model('SpecialPostModel');
        $data['results'] = $this->SpecialPostModel->get_special_news();
        $data['similar_res'] = $this->SpecialPostModel->get_similar_res($data['results']);
        $data['all_res'] = $this->SpecialPostModel->get_all_results();
        //$data['single_res'] = $this->SpecialPostModel->viewall();
        //exit;
        $this->load->view('inc/header.php');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('inc/footer.php');
     }
}