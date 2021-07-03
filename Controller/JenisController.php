<?php
class JenisController{
    private $model;

    public function __construct()
    {
        $this->model = new JenisModel();
    }

    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once("View/jenis/index.php");
    }

    public function create()
    {
        require_once("View/jenis/create.php");
    }

    /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_jenis'];
        $data = $this->model->getById($id);
        extract($data);
        require_once("View/jenis/edit.php");
    }

    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_jenis'];
        $nama = $_POST['nama_jenis_barang'];
        if ($this->model->prosesUpdate($nama, $id)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=jenis&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    /**
     * function delete berfungsi untuk menghapus barang
     */
    public function delete()
    {
        $id = $_GET['id_jenis'];
        if($this->model->prosesDelete($id)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=jenis&aksi=view&pesan=Gagal Delete Data");
        }
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama_jenis_barang'];
        if ($this->model->prosesStore($nama)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=jenis&aksi=create&pesan=Gagal Menambah Data");
        }
    }
}