<?php

namespace App\Model;
use App\DAO\VeiculoDAO;

class VeiculoModel extends Model{
    public $id, $modelo, $ano, $cor, $num_chassi, $placa, $quilometragem, $observacoes;
    public $id_marca, $id_fabricante, $id_tipo, $id_combustivel, $id_detalhes;

    public function save(){
        $dao = new VeiculoDAO();
        if($this->id == null){
             $dao->insert($this);
        }else{
             $dao->update($this);
        }
    }

    public function getAll(){
        $dao = new VeiculoDAO();

        return $dao->getAllRows();
    }

    public function getById($id){
        $dao = new VeiculoDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new VeiculoDAO();

        $dao->delete($id);
    }
}