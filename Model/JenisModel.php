<?php
class JenisModel{
    public function get()
    {
        $sql = "SELECT * FROM jenis_barang";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }
    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("View/jenis/index.php");
    }

    /**
     * function delete berfungsi untuk menghapus data barang dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM jenis_barang WHERE id_jenis= $id";
        return koneksi()->query($sql);
    }

    /**
     * function delete berfungsi untuk menghapus barang
     */
    public function delete()
    {
        $id = $_GET['id_jenis'];
        if($this->prosesDelete($id)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=jenis&aksi=view&pesan=Gagal Delete Data");
        }
    }

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM jenis_barang WHERE id_jenis=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 

    /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_jenis'];
        $data = $this->getById($id);
        extract($data);
        require_once("View/jenis/edit.php");
    }

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama,$id)
    {
        $sql = "UPDATE jenis_barang SET nama_jenis_barang='$nama' WHERE id_jenis=$id";
        return koneksi()->query($sql);
    }
   
    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_jenis'];
        $nama = $_POST['nama_jenis_barang'];
        if ($this->prosesUpdate($nama, $id)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=jenis&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    public function create()
    {
        require_once("View/jenis/create.php");
    }

    /**
     * Function prosesStore berfungsi untuk input data Pembeli
     */
    public function prosesStore($nama)
    {
        $sql = "INSERT INTO jenis_barang(nama_jenis_barang) 
        VALUES ('$nama')";
        return koneksi()->query($sql);
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama_jenis_barang'];
        if ($this->prosesStore($nama)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=jenis&aksi=create&pesan=Gagal Menambah Data");
        }
    }
}