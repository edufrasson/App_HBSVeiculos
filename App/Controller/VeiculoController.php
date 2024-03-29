<?php

namespace App\Controller;

use App\Model\VeiculoModel;
use App\Model\DetalhesVeiculoModel;

class VeiculoController extends Controller
{
    public static function index()
    {
        $model = new VeiculoModel();

        $model->getAll();

        include 'View/modules/Veiculo/ListarVeiculo.php';
    }

    public static function form(){
        $model = new VeiculoModel();
        $model_update = new VeiculoModel();
        $model->getAllMarcas();
        $model->getAllCombustivel();
        $model->getAllFabricantes();
        $model->getAllTipos();

        (isset($_GET['id'])) ?  $model_update = $model->getById($_GET['id']) : $model;       

        include 'View/modules/Veiculo/FormVeiculo.php';
    }
    public static function save()
    {
        $id_detalhe = DetalhesVeiculoController::save();

        $model_veiculo = new VeiculoModel();

        $model_veiculo->id = $_POST['id'];
        $model_veiculo->modelo = $_POST['modelo'];
        $model_veiculo->ano = $_POST['ano'];
        $model_veiculo->cor = $_POST['cor'];
        $model_veiculo->num_chassi = $_POST['num_chassi'];
        $model_veiculo->placa = $_POST['placa'];
        $model_veiculo->quilometragem = $_POST['quilometragem'];
        $model_veiculo->observacoes = $_POST['obs'];
        $model_veiculo->id_marca = $_POST['id_marca'];
        $model_veiculo->id_fabricante = $_POST['id_fabricante'];
        $model_veiculo->id_tipo = $_POST['id_tipo'];
        $model_veiculo->id_combustivel = $_POST['id_combustivel'];
        $model_veiculo->id_detalhes =  $id_detalhe;

        $model_veiculo->save();   
        
        header('Location: /veiculo');
    }

}
