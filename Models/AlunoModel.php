<?php

class AlunoModel
{
    public $idaluno, $nome, $rg, $senha;

    public function save(AlunoModel $alunoModel)
    {
    include_once 'DAO/AlunoDAO.php';
    $dao = new AlunoDAO();
    $dao->insert($alunoModel);
    }

    public function updateSenha($senha, $id)
    {
        include 'DAO/AlunoDAO.php';
        $dao = new AlunoDAO();
        $dao->updateSenha($senha, $id);
    }

    public function getByIdAndSenha($id)
    {
        include_once 'DAO/AlunoDAO.php';
        $dao = new AlunoDAO();
        $senha = $dao->selectByIdAndSenha($id);
        return $senha;
    }

    public function getByIdaluno($id)
    {
        include 'DAO/AlunoDAO.php';
        $dao = new AlunoDAO();
        $aluno = $dao->selectByIdaluno($id);
        return $aluno;
    }

    public function getByRg($rg)
    {
        include 'DAO/AlunoDAO.php';
        $dao = new AlunoDAO();
        $aluno = $dao->selectByRg($rg);
        return $aluno;
    }

    public function delete( $id)
    {
        include 'DAO/AlunoDAO.php';
        $dao = new AlunoDAO();
        $dao->delete($id);
    }
}