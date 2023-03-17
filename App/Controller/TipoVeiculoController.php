<?php 

namespace App\Controller;

use App\Model\TipoVeiculoModel;

class TipoVeiculoController extends Controller{
    public static function getById(){
        $model = new TipoVeiculoModel();

        parent::setResponseAsJSON($model->getById($_GET['id']));
    }
    public static function index(){
        $model = new TipoVeiculoModel();

        $model->getAll();

        include 'View/modules/TipoVeiculo/ListarTipoVeiculo.php';
    }
    public static function save(){
        $model = new TipoVeiculoModel();
        
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->id = $model->save(); 
        
        header('Location: /tipo');

        parent::setResponseAsJSON($model);        
    }    

    public static function delete(){
        $model = new TipoVeiculoModel();

        $model->delete($_GET['id']);
    }
}