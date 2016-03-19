<?php

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('model_global');
    }

    function index() {
        if ($this->input->post('masuk')) {
            $email = mysql_real_escape_string($this->input->post('email'));
            $password = mysql_real_escape_string($this->input->post('password'));
            $pwd = sha1($password);

            $data = array('email' => $email,
                'password' => $pwd,
                'level' => 'admin'
            );
            $hasil = $this->model_global->cek_user($data);
            if ($hasil->num_rows() == 1) {

                foreach ($hasil->result() as $sess) {

                    $_SESSION['nama'] = $sess->nama;
                    $_SESSION['email'] = $sess->email;
                    $_SESSION['level'] = $sess->level;
                    $_SESSION['id_user'] = $sess->id_user;
                    $_SESSION['nama'] = $sess->nama;
                    $_SESSION['provinsi'] = $sess->provinsi;
                    $_SESSION['daerah'] = $sess->daerah;
                    $_SESSION['telp'] = $sess->telp;
                    $_SESSION['pin_bb'] = $sess->pin_bb;
                    $_SESSION['admin'] = 1;
                    //$_SESSION['password']= $sess->password;
                }
                redirect('admin');
            } else {
                $data['title'] = "Login";
                $data['salah']=1;
                $this->load->view('admin/view_login', $data);
            }
        } else {
            $data['title'] = "Login";
            $this->load->view('admin/view_login', $data);
        }
    }

    function logout() {
        session_destroy();
        redirect('admin');
    }

}

?>
