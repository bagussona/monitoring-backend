<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = 'Login Area';
        $data['nama'] = $this->model('UserLogin_model')->loginSet();
        $this->view('templates/header_loginarea', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function register(){
        $data['judul'] = 'Register Area';
        $data['nama'] = $this->model('UserLogin_model')->registerSet();
        $this->view('templates/header_loginarea', $data);
        $this->view('login/register', $data);
        $this->view('templates/footer');
    }

    // public function loginSuccess(){
    //     if( $this->model('Postingan_model')->tambahUser($_POST) > 0 ){
    //         var_dump($_POST);
    //         Flasher::setFlash('berhasil', 'ditambah', 'success');
    //         header('Location: ' . BASEURL . 'Postingan');
    //         exit;
    //      } else{
    //         Flasher::setFlash('gagal', 'ditambah', 'danger');
    //         header('Location: ' . BASEURL . 'Postingan');
    //         exit;
    //      }
    //   }
}