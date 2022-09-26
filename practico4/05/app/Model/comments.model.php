<?php
class CommentModel{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=practica;charset=utf8', 'root', '');
    }


    public function getListComments(){
        $query = $this->db->prepare("SELECT * FROM comentarios");
        $query->execute();

        $comments = $query->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }
    //INSERT INTO comentarios (comentario) VALUES (?);
    public function addComment($id){
        $query = $this->db->prepare("INSERT INTO comentarios (comentario) VALUES (?)");
        $query->execute([$id]);
        return $this->db->lastInsertId();
    }
}