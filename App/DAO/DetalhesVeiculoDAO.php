<?php

namespace App\DAO;

use App\Model\DetalhesVeiculoModel;

class DetalhesVeiculoDAO extends DAO{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(DetalhesVeiculoModel $model){
        $sql = "INSERT INTO Detalhes_Veiculo(revisao, venda, aluguel, roubo_furto, particular, sinistrado) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->revisao);
        $stmt->bindValue(2, $model->venda);
        $stmt->bindValue(3, $model->aluguel);
        $stmt->bindValue(4, $model->roubo_furto);
        $stmt->bindValue(5, $model->particular);
        $stmt->bindValue(6, $model->sinistrado);
        $stmt->execute();

        return $this->conexao->lastInsertId();
    }
    public function update(DetalhesVeiculoModel $model){
        $sql = "UPDATE Detalhes_Veiculo SET revisao = ?, venda = ?, aluguel = ?, roubo_furto = ?, particular = ?, sinistrado = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->revisao);
        $stmt->bindValue(2, $model->venda);
        $stmt->bindValue(3, $model->aluguel);
        $stmt->bindValue(4, $model->roubo_furto);
        $stmt->bindValue(5, $model->particular);
        $stmt->bindValue(6, $model->sinistrado);
        $stmt->bindValue(7, $model->id);
        $stmt->execute();

        return $this->conexao->lastInsertId();
    }
  
    public function getById(int $id){
        $sql = "SELECT * FROM Detalhes_Veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
 
}