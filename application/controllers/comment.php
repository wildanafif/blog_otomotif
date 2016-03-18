<?php

class Comment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_global');
      
        }

        function index(){
            
            $this->load->view('head',$data);
            $this->load->view('view_home',$data);
            $this->load->view('footer', $data);

        }
        function add_comment(){
            if ($this->input->post('komentar')){
                    $id_artikel=$this->input->post('id_artikel');
                    $nama=$this->input->post('nama_komentar');
                    $isi=$this->input->post('isi_komentar');
                    echo"$nama , $id_artikel , $isi ";
                    date_default_timezone_set("Asia/Jakarta");
                    $t_tgl=date("Y-m-d");
                    
                    $data_insert = array('id_artikel' =>    $id_artikel ,
						'isi_komentar'	=>	$isi,
						'nama'	=>	$nama,
						'tgl_komen'	=>  $t_tgl
						);
                    $artikel=$this->model_global->query_for_control("SELECT * from artikel where id_artikel=$id_artikel");
                    $this->model_global->insert($data_insert,'comment_on_artikel');
                    redirect(site_url()."page/read/".$artikel['kategori']."/".$artikel['judul_url']);
                    
                }
        }


       
}
?>
