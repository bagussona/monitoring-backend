<?php
class DataSantri
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "sprint_4";
        $username = "bagus";
        $password = "Baguzt3aa";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function createPost($judul, $kategori, $isi, $image, $date)
    {
        $data = $this->db->prepare('INSERT INTO postingan (judul_post, kategori_post, isi_post, img_post, tgl_post) VALUES (?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $judul);
        $data->bindParam(2, $kategori);
        $data->bindParam(3, $isi);
        $data->bindParam(4, $image);
        $data->bindParam(5, $date);

        $data->execute();
        return $data->rowCount();
    }

    public function trending()
    {
        $query = $this->db->prepare("SELECT COUNT(kategori_post),kategori_post FROM postingan GROUP BY kategori_post LIMIT 3");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }


    public function read1()
    {
        $query = $this->db->prepare("SELECT * FROM user");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function readPost()
    {
        $query = $this->db->prepare("SELECT * FROM postingan");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function readKategori($cat_post)
    {
        $query = $this->db->prepare("SELECT * FROM postingan where kategori_post=?");
        $query->bindParam(1, $cat_post);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM user where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
    public function get_by_postID($cat_post){
        $query = $this->db->prepare("SELECT * FROM postingan where kategori_post=?");
        $query->bindParam(1, $cat_post);
        $query->execute();
        return $query->fetch();
    }

    // public function get_by_postCAT($cat){
    //     $query = $this->db->prepare("SELECT * FROM postingan where kategori_post=?");
    //     $query->bindParam(1, $cat);
    //     $query->execute();
    //     return $query->fetch();
    // }

    public function updateUser($id,$user,$password){
        $query = $this->db->prepare('UPDATE user set username=?, password=? where id=?');
        
        $query->bindParam(1, $user);
        $query->bindParam(2, $password);
        $query->bindParam(3, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function updatePost($id,$judul,$kategori,$isi,$image){
        $query = $this->db->prepare('UPDATE postingan set judul_post=?, kategori_post=?, isi_post=?, img_post=? where id=?');
        
        $query->bindParam(1, $judul);
        $query->bindParam(2, $kategori);
        $query->bindParam(3, $isi);
        $query->bindParam(4, $image);
        $query->bindParam(5, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function deleteUser($id)
    {
        $query = $this->db->prepare("DELETE FROM user where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function deletePost($id)
    {
        $query = $this->db->prepare("DELETE FROM postingan where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function register($username, $password)
    {
        $query = $this->db->prepare('INSERT INTO user (username, password) VALUES (?, ?)');
        
        $query->bindParam(1, $username);
        $query->bindParam(2, $password);

        $query->execute();
        return $query->rowCount();
    }

}

?>