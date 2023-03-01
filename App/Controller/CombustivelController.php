<?php 

namespace App\Controller;

use App\Model\CombustivelModel;

class CombustivelController extends Controller{
    public static function index(){
        $model = new CombustivelModel();

        $model = $model->getAll();

        include 'View/modules/Combustivel/ListarCombustivel';
    }
    public static function save(){
        $model = new CombustivelModel();

        $model->descricao = $_POST['descricao'];

        $model->save();  
    }    
}