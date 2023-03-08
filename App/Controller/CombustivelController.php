<?php 

namespace App\Controller;

use App\Model\CombustivelModel;

class CombustivelController extends Controller{
    public static function index(){
        $model = new CombustivelModel();

        $model->getAll();

        include 'View/modules/Combustivel/ListarCombustivel.php';
    }
    public static function save(){
        $model = new CombustivelModel();

        $model->descricao = $_POST['descricao'];

        $model->id = $model->save();  

        parent::setResponseAsJSON($model);
    }    
}