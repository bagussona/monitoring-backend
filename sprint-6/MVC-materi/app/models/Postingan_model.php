<?php

class Postingan_model{

    private $tb = 'postingan';
    private $db;

    private $post = [
        [
            "judul_post" => "Jago IT, Jago Ngaji!",
            "kategori_post" => "LifeHack",
            "isi_post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore."
        ],
        [
            "judul_post" => "Monitoring Backend",
            "kategori_post" => "Programming",
            "isi_post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore."
        ],
        [
            "judul_post" => "PHP Server side Language",
            "kategori_post" => "PHP",
            "isi_post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore."
        ]
        ];



        public function __construct(){
            $this->db = new Database;
        }


        public function getAllPostNoDB(){
            return $this->post;
        }

        public function getAllPostWithDB(){
            $this->db->query('SELECT * FROM ' . $this->tb);
            return $this->db->resultSet();
        }

        public function getPostByID($id){
            $this->db->query('SELECT * FROM '. $this->tb .' WHERE id = :id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function tambahPost($data){
            $query = "INSERT INTO postingan (judul_post, kategori_post, isi_post, img_post, tgl_post) VALUES (:judul_post, :kategori_post, :isi_post, :img_post, :tgl_post)";
        
            $date = date("Y-m-d");

        $this->db->query($query);
        $this->db->bind('judul_post', $data['judul_post']);
        $this->db->bind('kategori_post', $data['kategori_post']);
        $this->db->bind('img_post', $data['img_post']);
        $this->db->bind('isi_post', $data['isi_post']);
        $this->db->bind('tgl_post', $date);
        
        $this->db->execute();
        return $this->db->rowCount();
        }

        public function hapusPost($id){
            $query = "DELETE FROM postingan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
        }

        public function ubahPost($data){
            $query = "UPDATE postingan SET judul_post = :judul_post, kategori_post = :kategori_post, isi_post = :isi_post, img_post = :img_post WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul_post', $data['judul_post']);
        $this->db->bind('kategori_post', $data['kategori_post']);
        $this->db->bind('isi_post', $data['isi_post']);
        $this->db->bind('img_post', $data['img_post']);
        $this->db->bind('id', $data['id']);
        
        $this->db->execute();
        return $this->db->rowCount();
        }

}