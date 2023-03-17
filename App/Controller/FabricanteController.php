<?php 

namespace App\Controller;

use App\Model\FabricanteModel;

class FabricanteController extends Controller{
    public static function index(){
        $model = new FabricanteModel();

        $model->getAll();

        include 'View/modules/Fabricante/ListarFabricante.php';
    }
    public static function save(){
        $model = new FabricanteModel();

        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->id = $model->save();  

        header('Location: /fabricante');      
    }    
    public static function getById(){
        $model = new FabricanteModel();

        parent::setResponseAsJSON($model->getById($_GET['id']));
    }

    public static function delete(){
        $model = new FabricanteModel();

        $model->delete($_GET['id']);
    }
}