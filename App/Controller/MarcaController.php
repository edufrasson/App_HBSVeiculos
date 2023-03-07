<?php 

namespace App\Controller;

use App\Model\MarcaModel;

class MarcaController extends Controller{
    public static function index(){
        $model = new MarcaModel();

        $model->getAll();

        include 'View/modules/Marca/ListarMarca.php';
    }
    public static function save(){
        $model = new MarcaModel();

        $model->descricao = $_POST['descricao'];

        $id = $model->save(); 
        
        $model->id = $id;

        parent::setResponseAsJSON($model);
    }    
}