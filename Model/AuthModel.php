<?php
class AuthModel
{
    /**
     * Function login berfungsi untuk mengatur ke halaman login
     **/
    public function login()
    {
        require_once("View/auth/index.php");
    }
    
    public function prosesAuthOwner($email,$password){
        $sql = "select * from owner where email_owner = '$email' and password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
    
    /**
     * Function authOwner untuk authentication Owner
     */
    public function authOwner()
    {
        $email = $_POST['email_owner'];
        $password = $_POST['password'];
        $data = $this->prosesAuthOwner($email, $password);
        if($data) {
            $_SESSION['owner'] = $data;
            header("location:index.php?page=owner&aksi=view&pesan=Berhasil Login");
        }else{
            header("location:index.php?page=auth&aksi=login&pesan=Password atau email Anda salah !!");
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=login&aksi=view&pesan=Berhasil Logout !!");
    }

}