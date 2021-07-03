<?php
class PembeliController{
    private $model;

    public function __construct()
    {
        $this->model = new PembeliModel();
    }

    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once("View/pembeli/index.php");
    }

    /**
     * Function creat berfungsi untuk mengatur tampilan tambah data
     */
    public function create()
    {
        require_once("View/pembeli/create.php");
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email_pembeli'];
        $notelp = $_POST['nomer_hp'];
        if ($this->model->prosesStore($nama, $alamat, $email, $notelp)){
            header("location: index.php?page=pembeli&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=pembeli&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * function delete berfungsi untuk menghapus data pembeli
     */
    public function delete()
    {
        $id = $_GET['id_pembeli'];
        if($this->model->prosesDelete($id)){
            header("location: index.php?page=pembeli&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=pembeli&aksi=view&pesan=Gagal Delete Data");
        }
    }

    /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_pembeli'];
        $data = $this->model->getById($id);
        extract($data);
        require_once("View/pembeli/edit.php");
    }

    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_pembeli'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email_pembeli'];
        $notelp = $_POST['nomer_hp'];
        if ($this->model->prosesUpdate($nama, $alamat, $email, $notelp, $id)){
            header("location: index.php?page=pembeli&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=pembeli&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }
}