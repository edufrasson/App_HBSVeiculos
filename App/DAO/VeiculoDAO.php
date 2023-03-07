<?php

namespace App\DAO;
use PDO;

use App\Model\VeiculoModel;

class VeiculoDAO extends DAO{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(VeiculoModel $model){
        $sql = "INSERT INTO Veiculo(modelo, ano, cor, num_chassi, placa, quilometragem, observacoes, id_fabricante, id_combustivel, id_marca, id_detalhes) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->ano);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->num_chassi);
        $stmt->bindValue(5, $model->placa);
        $stmt->bindValue(6, $model->quilometragem);
        $stmt->bindValue(7, $model->observacoes);

        $stmt->bindValue(8, $model->id_fabricante);
        $stmt->bindValue(9, $model->id_combustivel);
        $stmt->bindValue(10, $model->id_marca);
        $stmt->bindValue(11, $model->id_detalhes);      
        

        $stmt->execute();
    }
    public function update(VeiculoModel $model){
        $sql = "UPDATE Veiculo SET modelo = ?, ano = ?, cor = ?, num_chassi = ?, placa = ?, quilometragem = ?, 
        observacoes = ?, id_fabricante = ?, id_combustivel = ?, id_marca = ?, id_detalhes = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->ano);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->num_chassi);
        $stmt->bindValue(5, $model->placa);
        $stmt->bindValue(6, $model->quilometragem);
        $stmt->bindValue(7, $model->observacoes);

        $stmt->bindValue(8, $model->id_fabricante);
        $stmt->bindValue(9, $model->id_combustivel);
        $stmt->bindValue(10, $model->id_marca);
        $stmt->bindValue(11, $model->id_detalhes);

        $stmt->bindValue(12, $model->id);
        $stmt->execute();
    }
    public function getAllRows(){
        $sql = "SELECT * FROM Veiculo";

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function getById(int $id){
        $sql = "SELECT * FROM Veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
    public function delete(int $id){
        $sql = "DELETE FROM Veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}