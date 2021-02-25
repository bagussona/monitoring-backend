<?php
class DataSantri
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "evaluasi_4";
        $username = "bagus";
        $password = "awsd123";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function create($nama_santri, $divisi_santri, $alamat)
    {
        $data = $this->db->prepare('INSERT INTO evaluasi_4.data_santri (nama, divisi, asal) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_santri);
        $data->bindParam(2, $divisi_santri);
        $data->bindParam(3, $alamat);

        $data->execute();
        return $data->rowCount();
    }

    public function read()
    {
        $query = $this->db->prepare("SELECT * FROM evaluasi_4.data_santri");
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

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM data_santri where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$nama_santri,$divisi_santri,$alamat){
        $query = $this->db->prepare('UPDATE data_santri set nama=?, divisi=?, asal=? where id=?');
        
        $query->bindParam(1, $nama_santri);
        $query->bindParam(2, $divisi_santri);
        $query->bindParam(3, $alamat);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM data_santri where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function register($username, $password)
    {
        $query = $this->db->prepare('INSERT INTO evaluasi_4.user (username, password) VALUES (?, ?)');
        
        $query->bindParam(1, $username);
        $query->bindParam(2, $password);

        $query->execute();
        return $query->rowCount();
    }

}

?>