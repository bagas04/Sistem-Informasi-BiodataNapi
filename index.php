<?php
//**Memanggil Helper */
require_once("Koneksi.php");

//**Memanggil Model */
require_once("Model/AuthModel.php");
require_once("Model/OwnerModel.php");
require_once("Model/PembeliModel.php");
require_once("Model/BarangModel.php");
require_once("Model/JenisModel.php");
require_once("Model/TransaksiModel.php");

/** Memanggil Controller */
require_once("Controller/AuthController.php");
require_once("Controller/OwnerController.php");
require_once("Controller/PembeliController.php");
require_once("Controller/BarangController.php");
require_once("Controller/JenisController.php");

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page


    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'login') {
            $auth->login();
        }else if ($aksi == 'authOwner') {
            $auth->authOwner();
        }else if ($aksi == 'logout') {
            $auth->logout(); 
        } else {
            echo "Method Not Founds";
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
        $barang = new BarangController();
        if ($aksi == 'view') {
            $barang->index();
        }else if ($aksi == 'create') {
            $barang->create();
        }else if ($aksi == 'store') {
            $barang->store();
        }else if ($aksi == 'edit') {
            $barang->edit();
        }else if ($aksi == 'update') {
            $barang->update();
        }else if ($aksi == 'delete') {
            $barang->delete();
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
        $transaksi = new TransaksiModel();
        if ($aksi == 'view') {
            $transaksi->indexpembeli();
        } else if ($aksi == 'pesanan') {
            $transaksi->indexpesanan();
        } else if ($aksi == 'daftar'){
            $transaksi->indexdaftar();
        }else if ($aksi == 'store') {
            $transaksi->Transaksi();
        }else {
            echo "Method Not Found";
        }
    
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=login"); //Jangan ada spasi habis location
}
