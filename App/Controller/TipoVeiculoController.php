<?php 

namespace App\Controller;

use App\Model\TipoVeiculoModel;

class TipoVeiculoController extends Controller{
    public static function index(){
        $model = new TipoVeiculoModel();

        $model->getAll();

        include 'View/modules/TipoVeiculo/ListarTipoVeiculo.php';
    }
    public static function save(){
        $model = new TipoVeiculoModel();

        $model->descricao = $_POST['descricao'];

        $model->id = $model->save(); 
        
        parent::setResponseAsJSON($model);
    }    
}