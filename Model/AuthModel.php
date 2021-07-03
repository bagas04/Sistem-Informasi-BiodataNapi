<?php
class AuthModel
{
    public function prosesAuthOwner($email,$password){
        $sql = "select * from owner where email_owner = '$email' and password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
    
}