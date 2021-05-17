<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "id14759530_caf";
        $username = "id14759530_cafuser";
        $password = "Bk-820201.290399";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($nominal, $harga)
    {
        $data = $this->db->prepare('INSERT INTO priceList (nominal,harga) VALUES (?, ?)');
        
        $data->bindParam(1, $nominal);
        $data->bindParam(2, $harga);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM priceList");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kode){
        $query = $this->db->prepare("SELECT * FROM priceList WHERE kode=?");
        $query->bindParam(1, $kode);
        $query->execute();
        return $query->fetch();
    }

    public function update($kode,$nominal,$harga){
        $query = $this->db->prepare('UPDATE priceList SET nominal=?,harga=? where kode=?');
        
        $query->bindParam(1, $nominal);
        $query->bindParam(2, $harga);
        $query->bindParam(3, $kode);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($kode)
    {
        $query = $this->db->prepare("DELETE FROM priceList where kode=?");

        $query->bindParam(1, $kode);

        $query->execute();
        return $query->rowCount();
    }

}
?>