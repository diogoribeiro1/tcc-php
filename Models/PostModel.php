<?php

class PostModel
{
    Public $idaluno, $post, $tag, $tforum, $data;

    public function save(PostModel $postModel)
    {
        include_once 'DAO/PostDao.php';
        $dao = new PostDao();
        $dao->insert($postModel);
    }

    public function getPostByIdAluno($idAluno)
    {
        include_once 'DAO/PostDao.php';
        $dao = new PostDao();
       $dataPost =  $dao->selectByIdAluno($idAluno);
        return $dataPost;
    }
    public function update($post, $tag, $tforum, $idaluno)
    {
        include_once 'DAO/PostDao.php';
        $dao = new PostDao();
        dao->updatePost($post, $tag, $tforum, $idaluno);
    }
    public function delete($idpost)
    {
        include_once 'DAO/PostDao.php';
        $dao = new PostDao();
        $dao->delete($idpost);
    }
}