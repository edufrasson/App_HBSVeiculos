<?php

namespace App\Model;
use App\DAO\CombustivelDAO;

class CombustivelModel extends Model{
    public $id, $descricao;

    public function save(){
        $dao = new CombustivelDAO();
        if($this->id == null){
            $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function getAll(){
        $dao = new CombustivelDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById($id){
        $dao = new CombustivelDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new CombustivelDAO();

        $dao->delete($id);
    }
}