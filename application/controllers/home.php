<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_global');
        session_start();
        }

        function index(){
            $data['artikel']=$this->model_global->query_for_control("SELECT * FROM `artikel` ORDER BY `id_artikel` DESC limit 1");
            $data['popular_artikel']=$this->model_global->query_getAll("SELECT * FROM `artikel` ORDER BY `view` DESC limit 3");
            $data['side_bar_iklan']=$this->model_global->query_getAll("SELECT * FROM `iklan` ORDER BY `id_iklan` DESC limit 5");
            $data['hot_artikel']=$this->model_global->query_getAll("SELECT * FROM `artikel` where id_artikel != ".$data['artikel']['id_artikel']. " ORDER BY `id_artikel` DESC limit 5");

           //echo $data['artikel']['header_image'];
            $data['title']=  "Otomotif Store";
            // $data['kategori']=  $this->model_iklan->getAll_kategori();
            // $data['prov']=$this->model_iklan->query_getAll("SELECT * From provinsi");
          
            $this->load->view('head',$data);
            $this->load->view('view_home',$data);
            $this->load->view('footer', $data);

        }


        
        function insert(){
            $dataInsert=array(
                'nim'=>  $this->input->post('nim'),
                'nama'=>  $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat')
            );
            $this->model_mahasiswa->insert($dataInsert);
            redirect('mahasiswa');
        }
        
        function delete(){
            $id=$this->uri->segment(3);// uri segment 3 maksudnya bagian ketiga setelah site_url, 
            $this->model_mahasiswa->delete($id);//mahasiswa(1)/delete(2)/0803xxx(3)
            redirect('mahasiswa');
        }
        
        function ubah(){
            $id=$this->uri->segment(3);
            $data['data']=$this->model_mahasiswa->get_by_id($id);
            $this->load->view('update_mahasiswa',$data);
        }
        
        function update(){
            $id=$this->input->post('nim');
            $dataUpdate=array(
                'nama'=>  $this->input->post('nama'),
                'alamat'=>  $this->input->post('alamat')
            );
            $this->model_mahasiswa->update($id,$dataUpdate);
            redirect('mahasiswa');
        }
}
?>
