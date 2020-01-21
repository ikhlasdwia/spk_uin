<?php
 
class Login extends CI_Controller{
 
    function __construct(){     //proses awal dalam mempersiapkan objek
        parent:: __construct();     
        $this->load->model('Model_login');

    }
 
    function index(){
        $this->template->load('template/login','login');
    }

    function logout(){
            $this->session->sess_destroy();
            redirect('Login');
        }
 
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );

        $cek_akademik = $this->Model_login->cek_login("tb_akademik",$where);
        $cek_admin = $this->Model_login->cek_login("tb_admin",$where); 
        if($cek_akademik->num_rows() > 0){
            foreach ($cek_akademik->result() as $row)
            {
            $data_session = array(
                'username'  => $username,
                'password'  => $password,
                
                'status'           => "login",
                'nama_lengkap'     => $row->nama_lengkap,
                'no_hp'            => $row->no_hp,
                'id_akademik'      => $row->id_akademik,
            );
            
                    $this->session->set_userdata($data_session);
                    redirect('dashboard_akademik');
            }   
        }
        else if($cek_admin->num_rows() > 0) {
        
            foreach ($cek_admin->result() as $row)
            {
            $data_session = array(
                'username'  => $username,
                'password'  => $password,
                
                'status'           => "login",
                'nama_lengkap'     => $row->nama_lengkap,
                'id_admin'         => $row->id_admin,
            );
            
                    $this->session->set_userdata($data_session);
                    redirect('dashboard');
            }   
        }
    
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-secondary" role="alert">
                  Maaf <b> username dan password</b> salah!!
                </div>');
            redirect('login');
        }
    }
}
 