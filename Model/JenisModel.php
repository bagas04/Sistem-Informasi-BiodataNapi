<?php
class JenisModel{
    public function get()
    {
        $sql = "SELECT * FROM jenis_barang";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }
    

    /**
     * function delete berfungsi untuk menghapus data barang dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM jenis_barang WHERE id_jenis= $id";
        return koneksi()->query($sql);
    }

    

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM jenis_barang WHERE id_jenis=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 

    

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama,$id)
    {
        $sql = "UPDATE jenis_barang SET nama_jenis_barang='$nama' WHERE id_jenis=$id";
        return koneksi()->query($sql);
    }
   

    /**
     * Function prosesStore berfungsi untuk input data 
     */
    public function prosesStore($nama)
    {
        $sql = "INSERT INTO jenis_barang(nama_jenis_barang) 
        VALUES ('$nama')";
        return koneksi()->query($sql);
    }

    
}