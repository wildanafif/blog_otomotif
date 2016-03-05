<?php

class C extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_iklan');
      
        }

        function index(){
            
            $this->load->view('head',$data);
            $this->load->view('view_home',$data);
            $this->load->view('footer', $data);

        }
        function kategori(){
            $this->load->view('head',$data);
            $this->load->view('view_kategori',$data);
            $this->load->view('footer', $data);

        }


       
}
?>
