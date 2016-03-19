<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        if (!isset($_SESSION['admin'])){
            redirect(auth);
        }
        $this->load->model('model_iklan');
      
        }

        function index(){
            $data['menu_aktif']="beranda";
            $data['title']="Admin";
            $this->load->view('admin/head',$data);
            $this->load->view('admin/view_home',$data);
            $this->load->view('admin/footer', $data);

        }
        function kategori(){
            $this->load->view('head',$data);
            $this->load->view('view_kategori',$data);
            $this->load->view('footer', $data);

        }


       
}
?>
