<?php 

namespace App\Controller;

use App\Model\DetalhesVeiculoModel;

class DetalhesVeiculoController extends Controller{

    public static function save(){
        $model = new DetalhesVeiculoModel();

        $model->revisao = (isset($_POST['chkRevisao'])) ? 1 : 0;
        $model->venda = (isset($_POST['chkVenda'])) ? 1 : 0;
        $model->aluguel = (isset($_POST['chkAluguel'])) ? 1 : 0;
        $model->roubo_furto = (isset($_POST['chkRoubo'])) ? 1 : 0;
        $model->particular = (isset($_POST['chkParticular'])) ? 1 : 0;
        $model->sinistrado = (isset($_POST['chkSinistrado'])) ? 1 : 0;

        return $model->save();  
    }    
}