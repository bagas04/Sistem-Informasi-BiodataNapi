<?php
//**Memanggil Helper */
require_once("Koneksi.php");

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'login') {
            $auth->login();
        }else if ($aksi == 'authOwner') {
            $auth->authOwner();
        }else if ($aksi == 'logout') {
            $auth->logout(); 
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "owner") {
        require_once("View/menu/index.php");
            $owner = new OwnerController();
        if ($aksi == 'view') {
            $owner->index();
        }else {
            echo "Method Not Found";
        }
    }  else if ($page == "pembeli"){
        require_once("View/menu/index.php");
           $pembeli = new PembeliController();
        if ($aksi == 'view') {
            $pembeli->index();
        }else if ($aksi == 'create') {
            $pembeli->create();
        }else if ($aksi == 'store') {
            $pembeli->store();
        }else if ($aksi == 'delete') {
            $pembeli->delete();
        }else if ($aksi == 'edit') {
            $pembeli->edit();
        } else if ($aksi == 'update') {
            $pembeli->update();
        }else {
            echo "Method Not Found";
        }
    } else if ($page == "barang"){
        require_once("View/menu/index.php");
        if ($aksi == 'view') {
            require_once("View/barang/index.php");
        }else if ($aksi == 'create') {
            require_once("View/barang/create.php");
        }else if ($aksi == 'edit') {
            require_once("View/barang/edit.php");
        }else {
            echo "Method Not Found";
        }
    } else if ($page == "jenis"){
        require_once("View/menu/index.php");
            $jenis = new JenisController();
        if ($aksi == 'view') {
            $jenis->index();
        }else if ($aksi == 'create') {
            $jenis->create();
        }else if ($aksi == 'edit') {
            $jenis->edit();
        }else if ($aksi == 'update') {
            $jenis->update();
        }else if ($aksi == 'delete') {
            $jenis->delete();
        }else if ($aksi == 'store') {
            $jenis->store();
        }else {
            echo "Method Not Found";
        }
    } else if ($page == "transaksi") {
        require_once("View/menu/index.php");
        if ($aksi == 'view') {
            require_once("View/transaksi/info.php");
        } else {
            echo "Method Not Found";
        }
    
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}
