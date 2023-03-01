<?php 

namespace App\Controller;

use App\Model\MarcaModel;

class MarcaController extends Controller{
    public static function index(){
        $model = new MarcaModel();

        $model = $model->getAll();

        include 'View/modules/Marca/ListarMarca';
    }
    public static function save(){
        $model = new MarcaModel();

        $model->descricao = $_POST['descricao'];

        $model->save();  
    }    
}