<?php
class seluruhdataModel{
    public function indexnapi()
    {
        $data = $this->getnapi();
        extract($data);
        require_once("View/seluruhdata/index.php");
    }

    public function getnapi()
    {
        $sql = "SELECT * FROM napi";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }  

    public function getpelanggaran(){
        $sql = "SELECT * FROM pelanggaran";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public  function indexpesanan(){
        $id_napi = $_GET['id_napi'];
        $data = $this->getseluruhdata($id_napi);
        extract($data);
        require_once("View/seluruhdata/pesanan.php");
    }

    public function getseluruhdata($id_napi){
        $sql = "SELECT * FROM pelanggaran JOIN semuadata ON pelanggaran.id_pelanggaran=semuadata.id_pelanggaran where id_napi = $id_napi";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public  function indexdaftar(){
        $data_napi = $this->getnapi();
        $data_pelanggaran = $this->getpelanggaran();
        extract($data_napi);
        extract($data_pelanggaran);
        require_once("View/seluruhdata/daftar.php");
    }

    public function create()
    {
        require_once("View/seluruhdata/daftar.php");
    }

    public function store()
    {
        $id_napi = $_POST['id_napi'];
        $id_pelanggaran = $_POST['id_pelanggaran'];
        $tgl_masuk = $_POST['tgl_masuk'];
        $lama_hukuman = $_POST['lama_hukuman'];
        if ($this->prosesStore($id_napi,$id_pelanggaran,$tgl_masuk,$lama_hukuman)){
            header("location: index.php?page=seluruhdata&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=seluruhdata&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * Function prosesStore berfungsi untuk input data napi
     */
    public function prosesStore($id_napi,$id_pelanggaran,$tgl_masuk,$lama_hukuman)
    {
        $sql = "INSERT INTO semuadata
        (id_napi,id_pelanggaran,tgl_masuk,lama_hukuman) 
        VALUES ($id_napi,$id_pelanggaran,'$tgl_masuk',$lama_hukuman)";
        return koneksi()->query($sql);
    }


}