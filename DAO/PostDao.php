<?php

class PostDao
{
    private $conexao;

    public function __construct()
    {

        $dsn = "mysql:host=localhost:3306;dbname=acau-db";

        $this->conexao = new PDO($dsn, 'root', '123');
    }

    public function insert(PostModel $model)
    {
        $sql = "INSERT INTO postagem(idaluno, post, tag, tforum) VALUES (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->idaluno);
        $stmt->bindValue(2, $model->post);
        $stmt->bindValue(3, $model->tag);
        $stmt->bindValue(4, $model->tforum);
       // $stmt->bindValue(5, $model->data);

        $stmt->execute();
    }

    public function selectByIdAluno($idaluno)
    {
        $sql = "SELECT * FROM postagem where idaluno = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $idaluno);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function updatePost($post, $tag, $tforum, $idaluno)
    {
        $sql = "UPDATE postagem SET post=?, tag=?, tforum=? WHERE idaluno=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $post);
        $stmt->bindValue(2, $tag);
        $stmt->bindValue(3, $tforum);
        $stmt->bindValue(5, $idaluno);
        $stmt->execute();
    }

}