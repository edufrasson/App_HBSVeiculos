<?php

namespace App\DAO;
use PDO;

use App\Model\TipoVeiculoModel;

class TipoVeiculoDAO extends DAO{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(TipoVeiculoModel $model){
        $sql = "INSERT INTO Tipo_Veiculo(descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();

        return $this->conexao->lastInsertId();
    }
    public function update(TipoVeiculoModel $model){
        $sql = "UPDATE Tipo_Veiculo SET descricao = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    public function getAllRows(){
        $sql = "SELECT * FROM Tipo_Veiculo";

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function getById(int $id){
        $sql = "SELECT * FROM Tipo_Veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
    public function delete(int $id){
        $sql = "DELETE FROM Tipo_Veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}