<?php

namespace App\Model;
use App\DAO\CombustivelDAO;

class CombustivelModel extends Model{
    public $id, $descricao;

    public function save(){
        $dao = new CombustivelDAO();
        if($this->id == null){

        }
    }
}