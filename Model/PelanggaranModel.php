<?php
class pelanggaranModel{
    

    /** 
     * Function ini berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("View/pelanggaran/index.php");
    }

    /**
     * Function getjenis berfungsi untuk mengambil seluruh data jenis dari database
     **/
    public function getjenis()
    {
        $sql = "SELECT * FROM jenis";
        $query = koneksi()->query($sql);
        $jenis = [];
        while ($data = $query->fetch_assoc()){
            $jenis[] = $data;
        }
        return $jenis;
    }

    public function get()
    {
        $sql = "SELECT pelanggaran.id_pelanggaran as id_pelanggaran, pelanggaran.nama_pelanggaran as nama_pelanggaran,
        jenis.nama_jenis as nama_jenis FROM pelanggaran JOIN jenis ON
        pelanggaran.id_jenis = jenis.id_jenis";
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
        $jenis=$this->getjenis();

        extract($jenis);
        require_once("View/pelanggaran/create.php");
    }

    /**
     * Function store berfungsi untuk memproses data untuk ditambahkan
     */
    public function store()
    {
        $nama = $_POST['nama_pelanggaran'];
        $id_jenis = $_POST['id_jenis'];
        if ($this->prosesStore($nama, $id_jenis)){
            header("location: index.php?page=pelanggaran&aksi=view&pesan=Berhasil Menambah Data");
        } else {
            header("location: index.php?page=pelanggaran&aksi=create&pesan=Gagal Menambah Data");
        }
    }

    /**
     * Function prosesStore berfungsi untuk input data pelanggaran
     */
    public function prosesStore($nama,$id_jenis)
    {
        $sql = "INSERT INTO pelanggaran(nama_pelanggaran, id_jenis ) 
        VALUES ('$nama', $id_jenis)";
        return koneksi()->query($sql);
    }

    /**
     * function delete berfungsi untuk menghapus pelanggaran
     */
    public function delete()
    {
        $id = $_GET['id_pelanggaran'];
        if($this->prosesDelete($id)){
            header("location: index.php?page=pelanggaran&aksi=view&pesan=Berhasil Delete Data");
        }
        else {
            header("location: index.php?page=pelanggaran&aksi=view&pesan=Gagal Delete Data");
        }
    }

    /**
     * function delete berfungsi untuk menghapus data pelanggaran dari database
     */
    public function prosesDelete($id)
    {
        $sql = "DELETE FROM pelanggaran WHERE id_pelanggaran= $id";
        return koneksi()->query($sql);
    }

     /**
     * function ini berfungsi untuk menampilkan halaman edit
     */
    public function edit()
    {
        $id = $_GET['id_pelanggaran'];
        $data = $this->getById($id);
        $jenis = $this->getjenis();
        extract($data);
        extract($jenis);
        require_once("View/pelanggaran/edit.php");
    }

    /**
     * Function update berfungsi untuk memproses data untuk diupdate
     */
    public function update()
    {
        $id = $_POST['id_pelanggaran'];
        $nama = $_POST['nama_pelanggaran'];
        $id_jenis = $_POST['id_jenis'];
        if ($this->prosesUpdate( $id, $nama, $id_jenis)){
            header("location: index.php?page=pelanggaran&aksi=view&pesan=Berhasil Mengubah Data");
        } else {
            header("location: index.php?page=pelanggaran&aksi=edit&pesan=Gagal Mengubah Data");
        }
    }

    /**
     * Function update berfungsi untuk mengubah data di database
     
     */
    public function prosesUpdate($id, $nama, $id_jenis)
    {
        $sql = "UPDATE pelanggaran SET nama_pelanggaran='$nama', id_jenis=$id_jenis WHERE id_pelanggaran=$id";
        return koneksi()->query($sql);
    }

    

    /**
     * Function getById berfungsi untuk mengambil satu data dari database
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM pelanggaran WHERE id_pelanggaran=$id";
        $query=koneksi()->query($sql);
        return $query->fetch_assoc();
    } 
}