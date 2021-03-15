<?php

class Postingan extends Controller{
 
   public function index (){
    $data['judul'] = 'Postingan';
    $data['postingan'] = $this->model('Postingan_model')->getAllPostWithDB();
    $this->view('templates/header', $data);
    $this->view('postingan/index', $data);
    $this->view('templates/footer');
   }


   public function view_post (){
      $data['judul'] = 'Postingan';
      $data['post'] = $this->model('Postingan_model')->getAllPostNoDB();
      $this->view('templates/header', $data);
      $this->view('postingan/view_post', $data);
      $this->view('templates/footer');
   }

   public function detail($id){
      $data['judul'] = 'Description';
      $data['postingan'] = $this->model('Postingan_model')->getPostByID($id);
      $this->view('templates/header', $data);
      $this->view('postingan/detail', $data);
      $this->view('templates/footer');
   }

   public function tambah(){
      if( $this->model('Postingan_model')->tambahPost($_POST) > 0 ){
         var_dump($_POST);
         Flasher::setFlash('berhasil', 'ditambah', 'success');
         header('Location: ' . BASEURL . 'Postingan');
         exit;
      } else{
         Flasher::setFlash('gagal', 'ditambah', 'danger');
         header('Location: ' . BASEURL . 'Postingan');
         exit;
      }
   }

   public function ubah(){
      if( $this->model('Postingan_model')->ubahPost($_POST) > 0){
         var_dump($_POST);
         Flasher::setFlash('berhasil', 'diubah', 'success');
         header('Location: ' . BASEURL . 'Postingan');
         exit;
      } else{
         Flasher::setFlash('gagal', 'diubah', 'danger');
         header('Location: ' . BASEURL . 'Postingan');
         exit;
      }
   }

   public function hapus($id){
      if( $this->model('Postingan_model')->hapuspost($id) > 0 ){
         Flasher::setFlash('berhasil', 'dihapus', 'success');
         header('Location: ' . BASEURL . 'Postingan');
         exit;
      } else{
         Flasher::setFlash('gagal', 'dihapus', 'danger');
         header('Location: ' . BASEURL . 'Postingan');
         exit;
      }
   }


}