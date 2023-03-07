<?php

namespace App\Model;
use App\DAO\TipoVeiculoDAO;

class TipoVeiculoModel extends Model{
    public $id, $descricao;

    public function save(){
        $dao = new TipoVeiculoDAO();
        if($this->id == null){
            $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function getAll(){
        $dao = new TipoVeiculoDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById($id){
        $dao = new TipoVeiculoDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new TipoVeiculoDAO();

        $dao->delete($id);
    }
}