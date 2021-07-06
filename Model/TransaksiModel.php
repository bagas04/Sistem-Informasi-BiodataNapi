<?php
class TransaksiModel{
    /**untuk memanggil data pembeli yang ada */
    public function getpembeli(){
        $sql = "SELECT * FROM pembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    /**untuk memanggil data barang yang ada */
    public function getbarang(){
        $sql = "SELECT * FROM barang";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    /**untuk memunculkan nama pembeli dan nama barang pada saat menginputkan sebuah transaksi */
    public function getTransaksi($id_pembeli){
        $sql = "SELECT * FROM barang JOIN transaksi ON barang.id_barang=transaksi.id_barang where id_pembeli = $id_pembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    /**utuk memanggil harga barang mentotal seluruh pembelian */
    public function getHargaBarang($id_barang)
    {
        $sql = "SELECT harga from barang WHERE id_barang = $id_barang";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    /**proses Transaksi */
    public function prosesTransaksi($id_barang, $id_pembeli, $tanggal, $jumlahbarang, $total, $jumlahbayar, $kembalian)
    {
        $sql = "INSERT INTO transaksi (id_barang, id_owner, id_pembeli,
        tgl_transaksi, jumlah_barang, total, jumlah_bayar, kembalian)
        VALUES ($id_barang, 1, $id_pembeli, $tanggal, $jumlahbarang, $total, $jumlahbayar, $kembalian)";
        return koneksi()->query($sql);
    }

}