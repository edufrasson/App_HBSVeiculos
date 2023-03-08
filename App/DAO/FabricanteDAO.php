<?php

namespace App\DAO;

use App\Model\FabricanteModel;
use PDO;

class FabricanteDAO extends DAO{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(FabricanteModel $model){
        $sql = "INSERT INTO Fabricante(descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();

        return $this->conexao->lastInsertId();
    }
    public function update(FabricanteModel $model){
        $sql = "UPDATE Fabricante SET descricao = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    public function getAllRows(){
        $sql = "SELECT * FROM Fabricante";

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function getById(int $id){
        $sql = "SELECT * FROM Fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
    public function delete(int $id){
        $sql = "DELETE FROM Fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}