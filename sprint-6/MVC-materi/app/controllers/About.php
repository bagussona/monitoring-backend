<?php

class About extends Controller{
    public function index($user = 'Bagus (Administrator)', $webpage = 'Lights Life Company'){
        $data['judul'] = 'About Me';
        $data['nama'] = $user;
        $data['webpage'] = $webpage;
        
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'About Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}