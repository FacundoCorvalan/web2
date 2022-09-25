<?php
class ProductView{
    public function showProducts($products){
        include './templates/header.php';

        echo '<ul class="list-group list-group-flush">';
        foreach($products as $product){
            echo '<li>';
            echo '<a href=verProducto/'.$product->producto_id.' class="list-group-item list-group-item-action">';
            echo $product->nombre_producto;
            echo '</a></li>';
        }
        echo '</ul>';
        include './templates/footer.php';
    }

    public function showProduct($product){
        include './templates/header.php';
        
        //var_dump($product);
        foreach($product as $detalle){
            echo '<h1>'.$detalle->nombre_producto.'</h1>';

            echo '<p>Descripcion: '.$detalle->descripcion.'</p>';
            echo '<p>Precio: '.$detalle->precio.'</p>';

        }
        include './templates/footer.php';

    }
}