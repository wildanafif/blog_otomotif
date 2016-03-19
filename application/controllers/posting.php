<?php

class Posting extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        if (!isset($_SESSION['admin'])) {
            redirect(auth);
        }

        $this->load->model('model_global');
    }

    function index() {
        $this->load->library('pagination');
        $this->load->library('table');

        $config['base_url'] = base_url() . "posting/page";
        //jumlah total data
        $config['total_rows'] = $config['total_rows'] = $this->model_global->total_paging("SELECT * From artikel");
        //jumlah data per halaman
        $config['per_page'] = 2;
        //jumah link no halaman 
        $config['num_links'] = 5;
        //segment URL yang akan dijadikan pemotongan data
        //baca di http://ozs.web.id/2014/08/membuat-url-dengan-class-url-di-codeigniter/
        $config['uri_segment'] = 3;
        // awal membuka penomoran 
        // menggunakan class bootstrap
        $config['full_tag_open'] = '<ul class="pagination">';
        // akhi membuka penomoran 
        $config['full_tag_close'] = '</ul>';
        //pembuka link ke awal data
        $config['first_tag_open'] = '<li>';
        //penutup link ke akhir data
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        //class untuk halaman aktif
        $config['cur_tag_open'] = '<li class="active"><a href="#"><span class="sr-only">(current)</span>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //class bootstrap untuk awal halaman
        $config['first_link'] = '<span class="glyphicon glyphicon-fast-backward"></span>';
        //class bootstrap untuk akhir halaman
        $config['last_link'] = '<span class="glyphicon glyphicon-fast-forward"></span>';
        //class bootstrap untuk  halaman berikutnya
        $config['next_link'] = '<span class="glyphicon glyphicon-step-forward"></span>';
        //class bootstrap untuk  halaman sebelumnya
        $config['prev_link'] = '<span class="glyphicon glyphicon-step-backward"></span>';
// inisialisasi paging
        $this->pagination->initialize($config);
// membuat paging dan disimpan dalam array $halaman
        $data['halaman'] = $this->pagination->create_links();
// mengambil data per halaman
        $data['posting'] = $this->model_global->data_paging("SELECT * FROM artikel ORDER BY id_artikel DESC  LIMIT 1," . $config['per_page']);
// kirim data dan hasil paging ke file application/views/v_produk.php


        $data['menu_aktif'] = "posting";
        $data['title'] = "Posting";
        $this->load->view('admin/head', $data);
        $this->load->view('admin/view_posting', $data);
        $this->load->view('admin/footer', $data);
    }

    function page() {
        $this->load->library('pagination');
        $this->load->library('table');

        $config['base_url'] = base_url() . "posting/page";
        //jumlah total data
        $config['total_rows'] = $config['total_rows'] = $this->model_global->total_paging("SELECT * From artikel");
        //jumlah data per halaman
        $config['per_page'] = 2;
        //jumah link no halaman 
        $config['num_links'] = 5;
        //segment URL yang akan dijadikan pemotongan data
        //baca di http://ozs.web.id/2014/08/membuat-url-dengan-class-url-di-codeigniter/
        $config['uri_segment'] = 3;
        // awal membuka penomoran 
        // menggunakan class bootstrap
        $config['full_tag_open'] = '<ul class="pagination">';
        // akhi membuka penomoran 
        $config['full_tag_close'] = '</ul>';
        //pembuka link ke awal data
        $config['first_tag_open'] = '<li>';
        //penutup link ke akhir data
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        //class untuk halaman aktif
        $config['cur_tag_open'] = '<li class="active"><a href="#"><span class="sr-only">(current)</span>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //class bootstrap untuk awal halaman
        $config['first_link'] = '<span class="glyphicon glyphicon-fast-backward"></span>';
        //class bootstrap untuk akhir halaman
        $config['last_link'] = '<span class="glyphicon glyphicon-fast-forward"></span>';
        //class bootstrap untuk  halaman berikutnya
        $config['next_link'] = '<span class="glyphicon glyphicon-step-forward"></span>';
        //class bootstrap untuk  halaman sebelumnya
        $config['prev_link'] = '<span class="glyphicon glyphicon-step-backward"></span>';
// inisialisasi paging
        $this->pagination->initialize($config);
// membuat paging dan disimpan dalam array $halaman
        $data['halaman'] = $this->pagination->create_links();
// mengambil data per halaman
        $limit = 0;
        if ($this->uri->segment(3) == null) {
            
        } else {
            $limit = intval($this->uri->segment(3));
        }
        $data['posting'] = $this->model_global->data_paging("SELECT * FROM artikel ORDER BY id_artikel DESC  LIMIT $limit," . $config['per_page']);
// kirim data dan hasil paging ke file application/views/v_produk.php


        $data['menu_aktif'] = "posting";
        $data['title'] = "Posting";
        $this->load->view('admin/head', $data);
        $this->load->view('admin/view_posting', $data);
        $this->load->view('admin/footer', $data);
    }

    function add() {
        $judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');
        $isi = $this->input->post('editor');
        $header_image = $this->input->post('header_image');

        date_default_timezone_set("Asia/Jakarta");
        $t_tgl = date("Y-m-d");
        $day = date('D', strtotime($t_tgl));

        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        $month_list = array(1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember");
        $hari = $dayList[$day];
        $tgl = date("d");
        $int_bl = intval(date("m"));
        $bulan = $month_list[$int_bl];
        $tahun = date("Y");
        $judul_url = str_replace(" ", "-", $judul);
        $replace = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "=", "'", ":", ";", ".", "/");
        foreach ($replace as $key => $value) {
            $judul_url = str_replace($value, "", $judul_url);
        }

        echo $judul_url . "<br>";

        $hash_url = sha1($judul_url);
        echo $hash_url . "<br>";


        $waktu = $hari . " , $tgl $bulan $tahun";
        if ($header_image == "") {
            $header_image = "tak ada";
        } else {
            $header_image = "http://localhost" . $header_image;
        }

        $data_insert = array('hash_judul' => $hash_url,
            'judul_url' => $judul_url,
            'judul_artikel' => $judul,
            'kategori' => $kategori,
            'waktu' => $waktu,
            'isi' => $isi,
            'header_image' => $header_image);

        $this->model_global->insert($data_insert, 'artikel');


        echo $judul . "<br>" . $kategori . "<br>" . $isi . "<br>" . $waktu . "<br>$judul_url";
    }

}

?>
