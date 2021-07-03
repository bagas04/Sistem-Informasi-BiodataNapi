<?php
class PembeliModel{
    
    public function get()
    {
        $sql = "SELECT * FROM pembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }  


    /**
     * Function prosesStore berfungsi untuk input data Pembeli
     */
    public function prosesStore($nama, $alamat, $email, $notelp)
    {
        $sql = "INSERT INTO pembeli(nama, alamat, email_pembeli, nomer_hp) 
        VALUES ('$nama', '$alamat', '$email', '$notelp' )";
        return koneksi()->query($sql);
    }

    

    /**
     * function delete berfungsi untuk menghapus data pembeli dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM pembeli WHERE id_pembeli = $id";
        return koneksi()->query($sql);
    }

    
   
    

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama, $alamat, $email, $notelp, $id)
    {
        $sql = "UPDATE pembeli SET nama='$nama', alamat='$alamat', email_pembeli='$email', nomer_hp='$notelp'  WHERE id_pembeli=$id";
        return koneksi()->query($sql);
    }
   
    

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
}