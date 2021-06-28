<?php
class TransaksiModel{
    public function getpembeli(){
        $sql = "SELECT * FROM pembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getbarang(){
        $sql = "SELECT * FROM barang";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getTransaksi($id_pembeli){
        $sql = "SELECT * FROM barang JOIN transaksi ON barang.id_barang=transaksi.id_barang where id_pembeli = $id_pembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getHargaBarang($id_barang)
    {
        $sql = "SELECT harga from barang WHERE id_barang = $id_barang";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesTransaksi($id_barang, $id_pembeli, $tanggal, $jumlahbarang, $total, $jumlahbayar, $kembalian)
    {
        $sql = "INSERT INTO transaksi (id_barang, id_owner, id_pembeli,
        tgl_transaksi, jumlah_barang, total, jumlah_bayar, kembalian)
        VALUES ($id_barang, 1, $id_pembeli, $tanggal, $jumlahbarang, $total, $jumlahbayar, $kembalian)";
        return koneksi()->query($sql);
    }

    public function indexpembeli(){
        $data = $this->getpembeli();
        extract($data);
        require_once("View/transaksi/index.php");
    }

    public  function indexpesanan(){
        $id_pembeli = $_GET['id_pembeli'];
        $data = $this->getTransaksi($id_pembeli);
        extract($data);
        require_once("View/transaksi/pesanan.php");
    }

    public function Transaksi()
    {
        $id_barang = $_POST['id_barang'];
        $id_pembeli = $_POST['id_pembeli'];
        $tanggal = $_POST['tgl_transaksi'];
        $jumlahbarang = $_POST['jumlah_barang'];
        $harga = $this->getHargaBarang($id_barang);
        $total = $jumlahbarang * $harga['harga'];
        $jumlahbayar = $_POST['jumlah_bayar'];
        $kembalian = $jumlahbayar - $total;
        if($this->prosesTransaksi($id_barang, $id_pembeli, $tanggal, $jumlahbarang, $total, $jumlahbayar, $kembalian)){
            header("location: index.php?page=transaksi&aksi=view&pesan=Berhasil Tambah Data transaksi");
        }
        else{
            header("location: index.php?page=transaksi&aksi=daftar&pesan=Gagal Tambah Data");
        }
    }

    public  function indexdaftar(){
        $data_pembeli = $this->getpembeli();
        $data_barang = $this->getbarang();
        extract($data_pembeli);
        extract($data_barang);
        require_once("View/transaksi/daftar.php");
    }

}