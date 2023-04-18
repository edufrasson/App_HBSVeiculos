<?php

namespace App\Model;

use App\DAO\CombustivelDAO;
use App\DAO\FabricanteDAO;
use App\DAO\MarcaDAO;
use App\DAO\TipoVeiculoDAO;
use App\DAO\VeiculoDAO;

class VeiculoModel extends Model{
    public $id, $modelo, $ano, $cor, $num_chassi, $placa, $quilometragem, $observacoes;
    public $id_marca, $id_fabricante, $id_tipo, $id_combustivel, $id_detalhes;
    public $revisao, $venda, $aluguel, $roubo, $particular, $sinistrado;    
    public $lista_marca, $lista_fabricante, $lista_tipo, $lista_combustivel;

    public function save(){
        $dao = new VeiculoDAO();
        if($this->id == null){
            return $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function getAll(){
        $dao = new VeiculoDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById($id){
        $dao = new VeiculoDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new VeiculoDAO();

        $dao->delete($id);
    }

    public function getAllMarcas(){
        $dao = new MarcaDAO();

        $this->lista_marca = $dao->getAllRows();
    }
    public function getAllTipos(){
        $dao = new TipoVeiculoDAO();

        $this->lista_tipo = $dao->getAllRows();
    }
    public function getAllCombustivel(){
        $dao = new CombustivelDAO();

        $this->lista_combustivel = $dao->getAllRows();
    }
    public function getAllFabricantes(){
        $dao = new FabricanteDAO();

        $this->lista_fabricante = $dao->getAllRows();
    }
}