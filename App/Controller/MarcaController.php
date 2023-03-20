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

        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $id = $model->save(); 
        
        $model->id = $id;

        header("Location: /marca");     
    }    

    public static function getById(){
        $model = new MarcaModel();

        parent::setResponseAsJSON($model->getById($_GET['id']));
    }

    public static function delete(){
        $model = new MarcaModel();

        $model->delete($_GET['id']);
    }
}