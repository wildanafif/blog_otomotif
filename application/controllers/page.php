<?php

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_global');
      
        }

        function index(){
            
            $this->load->view('head',$data);
            $this->load->view('view_home',$data);
            $this->load->view('footer', $data);

        }
        function read(){
            $kategori=mysql_real_escape_string($this->uri->segment(3));
            $hash_judul=sha1($this->uri->segment(4));
            $data['judul']="judul";
            $data['artikel']=$this->model_global->query_for_control("SELECT * From artikel where hash_judul='$hash_judul'");
            if (!isset($data['artikel']['id_artikel'])){
                redirect(site_url());
            }
            $data['komentar']=$this->model_global->query_getAll("SELECT * from comment_on_artikel where id_artikel=".$data['artikel']['id_artikel']);
            $data['jumlah_komentar']=$this->model_global->query_for_control("SELECT count(id_komen) AS jml from comment_on_artikel where id_artikel=".$data['artikel']['id_artikel'] );
            $this->model_global->query_insert("UPDATE `artikel` SET `view`=view+1 where hash_judul='$hash_judul'");
            $data['direktori']='<ol class="breadcrumb">
                  <li><a href="'.site_url().'">Home</a></li>
                  <li><a href="#">'.$data['artikel']['kategori'].'</a></li>
                  <li class="active">Detail</li>
                </ol>';
            $data['title']=$data['artikel']['judul_artikel'];
            $this->load->view('head',$data);
            $this->load->view('view_read_artikel',$data);
            $this->load->view('footer', $data);


        }


       
}
?>
