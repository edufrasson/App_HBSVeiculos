<?php

namespace App\Model;
use App\DAO\MarcaDAO;

class MarcaModel extends Model{
    public $id, $descricao;

    public function save(){
        $dao = new MarcaDAO();
        if($this->id == null){
           return $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function getAll(){
        $dao = new MarcaDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById($id){
        $dao = new MarcaDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new MarcaDAO();

        $dao->delete($id);
    }
}