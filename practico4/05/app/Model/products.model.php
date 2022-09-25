<?php
class ProductModel{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=practica;charset=utf8', 'root', '');
    }


    public function getListProducts(){
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    public function getProduct($id){
        $query = $this->db->prepare("SELECT * FROM `productos` WHERE `producto_id` = ?;");
        $query->execute([$id]);
        $product = $query->fetchAll(PDO::FETCH_OBJ);
        return $product;
        //return $this->db->lastInsertId();
    }
}