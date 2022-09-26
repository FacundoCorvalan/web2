<?php
require_once './app/Model/comments.model.php';
require_once './app/View/comments.view.php';

class CommentController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new CommentModel();
        $this->view = new CommentView();
    }

    public function showComments(){
        $comments = $this->model->getListComments();
        $this->view->showComments($comments);
    }

    public function addComment(){
        $comentario = $_GET['comment'];
        $id =  $this->model->addComment($comentario);
        header("Location: " . BASE_URL); 
    }
}