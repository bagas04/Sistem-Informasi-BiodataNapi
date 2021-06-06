<?php
//**Memanggil Helper */
require_once("Koneksi.php");

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        if ($aksi == 'view') {
            require_once("View/auth/index.php");
        } else if ($aksi == 'loginOwner') {
            require_once("View/auth/login_owner.php");
        } else if ($aksi == 'loginPembeli') {
            require_once("View/auth/login_pembeli.php");
        } else if ($aksi == 'authOwner') {
            require_once("View/menu/menu_owner.php");
            require_once("View/owner/index.php");
        } else if ($aksi == 'authPembeli') {
            require_once("View/menu/menu_pembeli.php");
            require_once("View/pembeli/index.php");
        } else if ($aksi == 'logout') {
            require_once("View/auth/index.php");
        } else if ($aksi == 'daftarAkun') {
            require_once("View/auth/daftar_akun.php");
        } else if ($aksi == 'storePembeli') {
            require_once("View/auth/index.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "owner") {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/owner/index.php");
        } else {
            echo "Method Not Found";
        }
    }  else if ($page == "pembeli") {
        require_once("View/menu/menu_pembeli.php");
        if ($aksi == 'view') {
            require_once("View/pembeli/index.php");
        } else if ($aksi == 'edit') {
            require_once("View/pembeli/edit.php");
        } else if ($aksi == 'update') {
            require_once("View/pembeli/index.php");
        } else if ($aksi == 'storePembeli') {
            require_once("View/pembeli/index.php");
        } else {
            echo "Method Not Found";
        }
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}
