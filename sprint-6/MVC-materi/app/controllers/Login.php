<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = 'Login Area';
        $data2 = $this->model('UserLogin_model')->loginSet();
        $this->view('templates/headerloginarea', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function register(){
        $data['judul'] = 'Register Area';
        $data2 = $this->model('UserLogin_model')->registerSet();
        $this->view('templates/headerloginarea', $data);
        $this->view('login/register', $data);
        $this->view('templates/footer');
    }

    public function registerSuccess(){
        if( $this->model('UserLogin_model')->tambahUser($_POST) > 0 ){
            // var_dump($_POST);
            Flasher::setFlash('berhasil', 'ditambah', 'success');
            header('Location: ' . BASEURL . 'Login/register');
            exit;
         } else{
            Flasher::setFlash('gagal', 'ditambah', 'danger');
            header('Location: ' . BASEURL . 'Login/register');
            exit;
         }
      }

      public function loginSuccess(){
        // var_dump ($_POST);

        if( $this->model('UserLogin_model')->loginUser($_POST) > 0 ){
            // var_dump($_POST);
            $_SESSION['username'] = $_POST['username']; // set sesion dengan variabel username
            Flasher::setFlash('berhasil', 'login', 'success');
            header('Location: ' . BASEURL . 'Home');
            exit;
         } else{
            Flasher::setFlash('gagal', 'login', 'danger');
            header('Location: ' . BASEURL . 'About');
            exit;
         }
      }

      public function logout(){
        unset($_SESSION["username"]);
        $this->index();
    }

}