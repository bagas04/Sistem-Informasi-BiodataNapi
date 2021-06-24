<?php
class OwnerModel{
    public function get($id)
    {
        $sql = "SELECT * FROM owner WHERE id_owner = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
    public function index()
    {
        $id = $_SESSION['owner']['id_owner'];
        $data = $this->get($id);
        extract($data);
        require_once("View/owner/index.php");
    }
    
}
