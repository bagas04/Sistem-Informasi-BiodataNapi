<?php
class BarangModel{
    

    

    /**
     * Function getjenis berfungsi untuk mengambil seluruh data jenis dari database
     **/
    public function getjenis()
    {
        $sql = "SELECT * FROM jenis_barang";
        $query = koneksi()->query($sql);
        $jenis = [];
        while ($data = $query->fetch_assoc()){
            $jenis[] = $data;
        }
        return $jenis;
    }

    public function get()
    {
        $sql = "SELECT barang.id_barang as id_barang, barang.nama_barang as nama_barang,barang.ukuran as ukuran, barang.harga as harga,barang.tebal_barang as tebal_barang,
        jenis_barang.nama_jenis_barang as nama_jenis_barang FROM barang JOIN jenis_barang ON
        barang.id_jenis = jenis_barang.id_jenis";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    /**
     * Function prosesStore berfungsi untuk input data barang
     */
    public function prosesStore($nama,$id_jenis,$ukuran, $harga,$tebal_barang)
    {
        $sql = "INSERT INTO barang(nama_barang, id_jenis, ukuran, harga,tebal_barang ) 
        VALUES ('$nama', $id_jenis,'$ukuran', $harga,'$tebal_barang')";
        return koneksi()->query($sql);
    }

    

    /**
     * function delete berfungsi untuk menghapus data barang dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM barang WHERE id_barang= $id";
        return koneksi()->query($sql);
    }

     

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($id, $nama, $harga, $id_jenis)
    {
        $sql = "UPDATE barang SET nama_barang='$nama', harga=$harga, 
        id_jenis=$id_jenis WHERE id_barang=$id";
        return koneksi()->query($sql);
    }

    

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM barang WHERE id_barang=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
}