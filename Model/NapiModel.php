<?php
class napiModel{
    
    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("View/napi/index.php");
    }

    public function get()
    {
        $sql = "SELECT * FROM napi";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }  

    /**
     * Function creat berfungsi untuk mengatur tampilan tambah data
     */
    public function create()
    {
        require_once("View/napi/create.php");
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $notelp = $_POST['nomer_hp'];
        if ($this->prosesStore($nama, $alamat, $tanggal_lahir, $notelp)){
            header("location: index.php?page=napi&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=napi&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * Function prosesStore berfungsi untuk input data napi
     */
    public function prosesStore($nama, $alamat, $tanggal_lahir, $notelp)
    {
        $sql = "INSERT INTO napi(nama, alamat, tanggal_lahir, nomer_hp) 
        VALUES ('$nama', '$alamat', '$tanggal_lahir', '$notelp' )";
        return koneksi()->query($sql);
    }

    /**
     * function delete berfungsi untuk menghapus data napi
     */
    public function delete()
    {
        $id = $_GET['id_napi'];
        if($this->prosesDelete($id)){
            header("location: index.php?page=napi&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=napi&aksi=view&pesan=Gagal Delete Data");
        }
    }

    /**
     * function delete berfungsi untuk menghapus data napi dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM napi WHERE id_napi = $id";
        return koneksi()->query($sql);
    }

    
   
    /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_napi'];
        $data = $this->getById($id);
        extract($data);
        require_once("View/napi/edit.php");
    }

    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_napi'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $notelp = $_POST['nomer_hp'];
        if ($this->prosesUpdate($nama, $alamat, $tanggal_lahir, $notelp, $id)){
            header("location: index.php?page=napi&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=napi&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama, $alamat, $tanggal_lahir, $notelp, $id)
    {
        $sql = "UPDATE napi SET nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal_lahir', nomer_hp='$notelp'  WHERE id_napi=$id";
        return koneksi()->query($sql);
    }
   
    

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM napi WHERE id_napi=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
}