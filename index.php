<?php
//**Memanggil Helper */
require_once("Koneksi.php");

//**Memanggil Model */
require_once("Model/AuthModel.php");
require_once("Model/OwnerModel.php");
require_once("Model/NapiModel.php");
require_once("Model/PelanggaranModel.php");
require_once("Model/JenisModel.php");
require_once("Model/seluruhdataModel.php");



//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page


    if ($page == "auth") {
        $auth = new AuthModel();
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
        $owner = new OwnerModel();
        if ($aksi == 'view') {
            $owner->index();
        }else {
            echo "Method Not Found";
        }
    }  else if ($page == "napi"){
        require_once("View/menu/index.php");
           $napi = new NapiModel();
        if ($aksi == 'view') {
            $napi->index();
        }else if ($aksi == 'create') {
            $napi->create();
        }else if ($aksi == 'store') {
            $napi->store();
        }else if ($aksi == 'delete') {
            $napi->delete();
        }else if ($aksi == 'edit') {
            $napi->edit();
        } else if ($aksi == 'update') {
            $napi->update();
        }else {
            echo "Method Not Found";
        }
    } else if ($page == "pelanggaran"){
        require_once("View/menu/index.php");
        $pelanggaran = new PelanggaranModel();
        if ($aksi == 'view') {
            $pelanggaran->index();
        }else if ($aksi == 'create') {
            $pelanggaran->create();
        }else if ($aksi == 'store') {
            $pelanggaran->store();
        }else if ($aksi == 'edit') {
            $pelanggaran->edit();
        }else if ($aksi == 'update') {
            $pelanggaran->update();
        }else if ($aksi == 'delete') {
            $pelanggaran->delete();
        }else {
            echo "Method Not Found";
        }
    } else if ($page == "jenis"){
        require_once("View/menu/index.php");
            $jenis = new JenisModel();
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
    } else if ($page == "seluruhdata") {
        require_once("View/menu/index.php");
        $seluruhdata = new seluruhdataModel();
        if ($aksi == 'view') {
            $seluruhdata->indexnapi();
        } else if ($aksi == 'pesanan') {
            $seluruhdata->indexpesanan();
        } else if ($aksi == 'daftar'){
            $seluruhdata->indexdaftar();
        }else if ($aksi == 'store') {
            $seluruhdata->store();
        }else {
            echo "Method Not Found";
        }
    
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=login"); //Jangan ada spasi habis location
}
