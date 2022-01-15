<?php
class JenisModel{

    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("View/jenis/index.php");
    }

    public function get()
    {
        $sql = "SELECT * FROM jenis";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
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
     * function delete berfungsi untuk menghapus data barang dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM jenis WHERE id_jenis= $id";
        return koneksi()->query($sql);
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
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_jenis'];
        $nama = $_POST['nama_jenis'];
        if ($this->prosesUpdate($nama, $id)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=jenis&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama,$id)
    {
        $sql = "UPDATE jenis SET nama_jenis='$nama' WHERE id_jenis=$id";
        return koneksi()->query($sql);
    }
   
    public function create()
    {
        require_once("View/jenis/create.php");
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama_jenis'];
        if ($this->prosesStore($nama)){
            header("location: index.php?page=jenis&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=jenis&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * Function prosesStore berfungsi untuk input data 
     */
    public function prosesStore($nama)
    {
        $sql = "INSERT INTO jenis(nama_jenis) 
        VALUES ('$nama')";
        return koneksi()->query($sql);
    }

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM jenis WHERE id_jenis=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
    
}