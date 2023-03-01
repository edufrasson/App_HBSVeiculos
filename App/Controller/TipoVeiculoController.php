<?php 

namespace App\Controller;

use App\Model\TipoVeiculoModel;

class TipoVeiculoController extends Controller{
    public static function index(){
        $model = new TipoVeiculoModel();

        $model = $model->getAll();

        include 'View/modules/TipoVeiculo/ListarTipoVeiculo';
    }
    public static function save(){
        $model = new TipoVeiculoModel();

        $model->descricao = $_POST['descricao'];

        $model->save();  
    }    
}