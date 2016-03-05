<?php

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_iklan');
      
        }

        function index(){
            
            $this->load->view('head',$data);
            $this->load->view('view_home',$data);
            $this->load->view('footer', $data);

        }
        function read(){
            $kategori=mysql_real_escape_string($this->uri->segment(3));
            $id_artikel=sha1($this->uri->segment(5));
            $data['judul']="judul";
            $data['direktori']='<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>';
            $this->load->view('head',$data);
            $this->load->view('view_read_artikel',$data);
            $this->load->view('footer', $data);


        }


       
}
?>
