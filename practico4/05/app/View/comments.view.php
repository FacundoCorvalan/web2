<?php
class CommentView{
    public function showComments($comments){
        include './templates/header.php';

        echo '<ul class="list-group list-group-flush">';
        foreach($comments as $comment){
            echo '<li>';
            echo '<a href=verProducto/'.$comment->comentario_id.' class="list-group-item list-group-item-action">';
            echo $comment->comentario;
            echo '</a></li>';
        }
        echo '</ul>';
        include './templates/footer.php';
    }

    
}