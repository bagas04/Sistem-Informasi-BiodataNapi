<?php
class BarangModel{
    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("View/barang/index.php");
    }

    /**
     * Function creat berfungsi untuk mengatur tampilan tambah data
     */
    public function create()
    {
        $jenis=$this->getjenis();

        extract($jenis);
        require_once("View/barang/create.php");
    }

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
    public function prosesStore($nama, $harga, $id_jenis)
    {
        $sql = "INSERT INTO barang(nama_barang, harga, id_jenis) 
        VALUES ('$nama', $harga, $jenis_id)";
        return koneksi()->query($sql);
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jenis_id = $_POST['id_jenis'];
        if ($this->model->prosesStore($nama, $harga, $jenis_id)){
            header("location: index.php?page=barang&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=barang&aksi=create&pesan=Gagal Menambah Data");
        }
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
     * function delete berfungsi untuk menghapus barang
     */
    public function delete()
    {
        $id = $_GET['id_barang'];
        if($this->prosesDelete($id)){
            header("location: index.php?page=barang&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=barang&aksi=view&pesan=Gagal Delete Data");
        }
    }

     /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_barang'];
        $data = $this->getById($id);
        $jenis = $this->getjenis();
        extract($data);
        extract($jenis);
        require_once("View/barang/edit.php");
    }

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama, $harga, $jenis_id, $id)
    {
        $sql = "UPDATE barang SET nama_barang='$nama', harga='$harga', 
        id_jenis='$jenis_id' WHERE id_barang=$id";
        return koneksi()->query($sql);
    }

    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_GET['id_barang'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jenis_id = $_POST['jenis_id'];
        if ($this->prosesUpdate($nama, $harga, $jenis_id, $id)){
            header("location: index.php?page=barang&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=barang&aksi=edit&pesan=Gagal Mengubah Data");
        }
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