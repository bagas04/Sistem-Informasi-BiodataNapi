<?php
class OwnerController{
    private $model;

    public function __construct()
    {
        $this->model = new OwnerModel();
    }

    public function index()
    {
        $id = $_SESSION['owner']['id_owner'];
        $data = $this->model->get($id);
        extract($data);
        require_once("View/owner/index.php");
    }
}