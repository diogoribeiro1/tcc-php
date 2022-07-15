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
}