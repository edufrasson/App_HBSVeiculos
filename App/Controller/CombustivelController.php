<?php 

namespace App\Controller;

use App\Model\CombustivelModel;

class CombustivelController extends Controller{
    public static function index(){
        $model = new CombustivelModel();

        $model->getAll();

        include 'View/modules/Combustivel/ListarCombustivel.php';
    }
    public static function getById(){
        $model = new CombustivelModel();

        parent::setResponseAsJSON($model->getById($_GET['id']));
    }
    public static function save(){
        $model = new CombustivelModel();

        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->id = $model->save();  

        parent::setResponseAsJSON($model);

        header('Location: /combustivel');
    }    

    public static function delete(){
        $model = new CombustivelModel();

        $model->delete($_GET['id']);
    }
}