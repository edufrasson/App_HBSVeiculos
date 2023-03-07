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

        $model->descricao = $_POST['descricao'];

        $model->save();  
    }    
}