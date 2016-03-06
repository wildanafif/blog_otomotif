<?php

class Posting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_global');
      
        }

        function index(){
            
            $this->load->view('admin/head',$data);
            $this->load->view('admin/view_home',$data);
            $this->load->view('admin/footer', $data);

        }
        function add(){
           	$judul=$this->input->post('judul');
           	$kategori=$this->input->post('kategori');
           	$isi=$this->input->post('editor');
           	$header_image=$this->input->post('header_image');

        	date_default_timezone_set("Asia ");
   			  	$t_tgl=date("Y-m-d");
            	// $day = date('D', strtotime($tanggal));
            	
			$dayList = array(
				'Sun' => 'Minggu',
				'Mon' => 'Senin',
				'Tue' => 'Selasa',
				'Wed' => 'Rabu',
				'Thu' => 'Kamis',
				'Fri' => 'Jumat',
				'Sat' => 'Sabtu'
			);
			$month_list = array(1 =>	"Januari" ,
						2	=>	"Februari",
						3 	=>	"Maret",
						4	=>	"April",
						5	=>	"Mei",
						6	=>	"Juni",
						7	=>	"Juli",
						8 	=>	"Agustus",
						9	=>	"September",
						10	=>	"Oktober",
						11	=>	"November",
						12	=>	"Desember");
			$hari=$dayList[$day];
			$tgl=date("d");
			$int_bl=intval(date("m"));
			$bulan=$month_list[$int_bl];
			$tahun=date("Y");
			$judul_url=str_replace(" ", "-", $judul);
			$replace=array("!","@","#","$","%","^","&","*","(",")","=","'",":",";",".","/");
			foreach ($replace as $key => $value) {
				$judul_url=str_replace($value,"", $judul_url);

			}

			echo $judul_url."<br>";

			$hash_url=sha1($judul_url);
			echo $hash_url."<br>";


			$waktu=$hari ." , $tgl $bulan $tahun";
			if ($header_image=="") {
				$header_image="tak ada";
			}else{
				$header_image="http://localhost".$header_image;
			}

			$data_insert = array('hash_judul' =>	$hash_url ,
						'judul_url'	=>	$judul_url,
						'judul_artikel'	=>	$judul,
						'kategori'	=>	$kategori,
						'waktu'	=>	$waktu,
						'isi'	=>	$isi,
						 'header_image'	=>	$header_image);

			$this->model_global->insert($data_insert,'artikel');


           echo $judul."<br>".$kategori."<br>".$isi."<br>".$waktu."<br>$judul_url";

        }


       
}
?>
