<?php

namespace App\Model;
use App\DAO\FabricanteDAO;

class FabricanteModel extends Model{
    public $id, $descricao;

    public function save(){
        $dao = new FabricanteDAO();
        if($this->id == null){
            $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function getAll(){
        $dao = new FabricanteDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById($id){
        $dao = new FabricanteDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new FabricanteDAO();

        $dao->delete($id);
    }
}