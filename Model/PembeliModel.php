<?php
class PembeliModel{
    
    public function get()
    {
        $sql = "SELECT * FROM pembeli";
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
     * Function prosesStore berfungsi untuk input data Pembeli
     */
    public function prosesStore($nama, $alamat, $email, $notelp)
    {
        $sql = "INSERT INTO pembeli(nama, alamat, email_pembeli, nomer_hp) 
        VALUES ('$nama', '$alamat', '$email', '$notelp' )";
        return koneksi()->query($sql);
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
        if ($this->prosesStore($nama, $alamat, $email, $notelp)){
            header("location: index.php?page=pembeli&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=pembeli&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * function delete berfungsi untuk menghapus data pembeli dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM pembeli WHERE id_pembeli = $id";
        return koneksi()->query($sql);
    }

    /**
     * function delete berfungsi untuk menghapus data pembeli
     */
    public function delete()
    {
        $id = $_GET['id_pembeli'];
        if($this->prosesDelete($id)){
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
        $data = $this->getById($id);
        extract($data);
        require_once("View/pembeli/edit.php");
    }

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($nama, $alamat, $email, $notelp, $id)
    {
        $sql = "UPDATE pembeli SET nama='$nama', alamat='$alamat', email_pembeli='$email', nomer_hp='$notelp'  WHERE id_pembeli=$id";
        return koneksi()->query($sql);
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
        if ($this->prosesUpdate($nama, $alamat, $email, $notelp, $id)){
            header("location: index.php?page=pembeli&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=pembeli&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
}