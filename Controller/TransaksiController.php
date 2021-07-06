<?php
class TransaksiController{
    private $model;

    public function __construct()
    {
        $this->model = new TransaksiModel();
    }

    /**berfungsi untuk menampilkan view dalam transaksi dan menampilkan kembali data pembelinya */
    public function indexpembeli(){
        $data = $this->model->getpembeli();
        extract($data);
        require_once("View/transaksi/index.php");
    }

    /**berfungsi untuk menamilkan data pesanan suatu pembeli */
    public  function indexpesanan(){
        $id_pembeli = $_GET['id_pembeli'];
        $data = $this->model->getTransaksi($id_pembeli);
        extract($data);
        require_once("View/transaksi/pesanan.php");
    }

    /**untuk menamilkan seluruh data pembeli dan data barang yang ada */
    public  function indexdaftar(){
        $data_pembeli = $this->model->getpembeli();
        $data_barang = $this->model->getbarang();
        extract($data_pembeli);
        extract($data_barang);
        require_once("View/transaksi/daftar.php");
    }

    /**proses menginputkan suatu transaksi untuk sebuah pembeli */
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
        if($this->model->prosesTransaksi($id_barang, $id_pembeli, $tanggal, $jumlahbarang, $total, $jumlahbayar, $kembalian)){
            header("location: index.php?page=transaksi&aksi=view&pesan=Berhasil Tambah Data transaksi");
        }
        else{
            header("location: index.php?page=transaksi&aksi=daftar&pesan=Gagal Tambah Data");
        }
    }
}