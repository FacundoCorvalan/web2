<?php
require_once './app/Model/products.model.php';
require_once './app/View/products.view.php';

class ProductController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    public function showProducts(){
        $productos = $this->model->getListProducts();
        $this->view->showProducts($productos);
    }

    public function showProduct($id){
        $producto = $this->model->getProduct($id);
        //var_dump($producto);
        $this->view->showProduct($producto);
    }
}