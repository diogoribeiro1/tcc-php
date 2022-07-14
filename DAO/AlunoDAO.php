<?php

class AlunoDAO
{
    private $conexao;

    public function __construct()
    {

        $dsn = "mysql:host=localhost:3306;dbname=acau-db";

        $this->conexao = new PDO($dsn, 'root', '123');
    }

    public function insert(AlunoModel $model)
    {
        $sql = "INSERT INTO aluno(idaluno, nome, rg, senha) VALUES (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->idaluno);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(3, $model->rg);
        $stmt->bindValue(4, $model->senha);

        $stmt->execute();
    }

    public function updateSenha($senha, $id)
    {
        $sql = "UPDATE aluno SET senha=? WHERE idaluno=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $senha);
        $stmt->bindValue(2, $id);
        $stmt->execute();
    }

    public function update(AlunoModel $model)
    {
        $sql = "UPDATE pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM pessoa ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    public function selectByIdAndSenha($id)
    {
        //include_once 'Models/AlunoModel.php';

        $sql = "SELECT senha FROM aluno WHERE idaluno = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectByIdaluno($id)
    {
        //include_once 'Models/AlunoModel.php';

        $sql = "SELECT * FROM aluno WHERE idaluno = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectByRg($rg)
    {
//        include_once 'Models/AlunoModel.php';

        $sql = "SELECT * FROM aluno WHERE rg = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $rg);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM pessoa WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}