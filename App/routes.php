<?php

use App\Controller\{
    MarcaController,
    FabricanteController,
    CombustivelController,
    DetalhesVeiculoController,
    VeiculoController,
    TipoVeiculoController
};


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



switch ($url) {
    case '/home':
        include 'View/modules/Home/Home.php';
        break;

    case '/marca':
        MarcaController::index();
        break;

    case '/marca/get-by-id':
        MarcaController::getById();
        break;
    case '/marca/save':
        MarcaController::save();
        break;
    case '/marca/delete':
        MarcaController::delete();
        break;

    case '/combustivel':
        CombustivelController::index();
        break;
    case '/combustivel/get-by-id':
        CombustivelController::getById();
        break;
    case '/combustivel/save':
        CombustivelController::save();
        break;
    case '/combustivel/delete':
        CombustivelController::delete();
        break;

    case '/tipo':
        TipoVeiculoController::index();
        break;
    case '/tipo/get-by-id':
        TipoVeiculoController::getById();
        break;
    case '/tipo/save':
        TipoVeiculoController::save();
        break;
    case '/tipo/delete':
        TipoVeiculoController::delete();
        break;

    case '/fabricante':
        FabricanteController::index();
        break;
    case '/fabricante/save':
        FabricanteController::save();
        break;
    case '/fabricante/get-by-id':
        FabricanteController::getById();
        break;
    case '/fabricante/delete':
        FabricanteController::delete();
        break;

    case '/veiculo':
        VeiculoController::index();
        break;
    case '/veiculo/save':
        VeiculoController::save();
        break;

    case '/cadastro':
        VeiculoController::form();
        break;
    default:
        header('Location: /home');
        break;
}