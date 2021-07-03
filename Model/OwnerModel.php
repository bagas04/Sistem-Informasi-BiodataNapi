<?php
class OwnerModel{
    public function get($id)
    {
        $sql = "SELECT * FROM owner WHERE id_owner = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
    
    
}
