<?php
class BarangController{
    private $model;

    public function __construct()
    {
        $this->model = new BarangModel();
    }

    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once("View/barang/index.php");
    }

    /**
     * Function creat berfungsi untuk mengatur tampilan tambah data
     */
    public function create()
    {
        $jenis=$this->model->getjenis();

        extract($jenis);
        require_once("View/barang/create.php");
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama_barang'];
        $id_jenis = $_POST['id_jenis'];
        $ukuran = $_POST['ukuran'];
        $harga = $_POST['harga'];
        $tebal_barang = $_POST['tebal_barang'];
        if ($this->model->prosesStore($nama, $id_jenis,$ukuran, $harga,$tebal_barang)){
            header("location: index.php?page=barang&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=barang&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_barang'];
        $data = $this->model->getById($id);
        $jenis = $this->model->getjenis();
        extract($data);
        extract($jenis);
        require_once("View/barang/edit.php");
    }

    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_barang'];
        $nama = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $id_jenis = $_POST['id_jenis'];
        if ($this->model->prosesUpdate( $id, $nama, $harga, $id_jenis)){
            header("location: index.php?page=barang&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=barang&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    /**
     * function delete berfungsi untuk menghapus barang
     */
    public function delete()
    {
        $id = $_GET['id_barang'];
        if($this->model->prosesDelete($id)){
            header("location: index.php?page=barang&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=barang&aksi=view&pesan=Gagal Delete Data");
        }
    }
}