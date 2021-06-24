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
}