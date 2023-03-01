<?php

namespace App\Model;
use App\DAO\DetalhesVeiculoDAO;

class DetalhesVeiculoModel extends Model{
    public $id, $revisao, $venda, $aluguel, $roubo_furto, $particular, $sinistrado;

    public function save(){
        $dao = new DetalhesVeiculoDAO();
        if($this->id == null){
            return $dao->insert($this);
        }else{
            return $dao->update($this);
        }
    }
    public function getById($id){
        $dao = new DetalhesVeiculoDAO();

        return $dao->getById($id);
    }   
}