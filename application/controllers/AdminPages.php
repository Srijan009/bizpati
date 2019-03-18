<?php 
class AdminPages extends CI_Controller {
    public function pages( $page = "dashboard" ){
        $this->load->helper('url');
        // echo APPPATH.'views/admin/pages/'.$page.'.php';   
      if( ! file_exists(APPPATH.'views/admin/pages/'.$page.'.php') ){
        show_404();
      } 
      $this->load->view('admin/inc/header.php');
      $this->load->view('admin/inc/navbar.php');
      $this->load->view('admin/pages/'.$page);
      $this->load->view('admin/inc/footer.php');
        
    }
}