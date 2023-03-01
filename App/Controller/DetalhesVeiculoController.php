<?php 

namespace App\Controller;

use App\Model\DetalhesVeiculoModel;

class DetalhesVeiculoController extends Controller{

    public static function save(){
        $model = new DetalhesVeiculoModel();

        $model->revisao = $_POST['revisao'];
        $model->venda = $_POST['venda'];
        $model->aluguel = $_POST['aluguel'];
        $model->roubo_furto = $_POST['roubo_furto'];
        $model->particular = $_POST['particular'];
        $model->sinistrado = $_POST['sinistrado'];

        return $model->save();  
    }    
}