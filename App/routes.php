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
    case '/marca/save':
        MarcaController::save();
        break;

    case '/combustivel':
        CombustivelController::index();
        break;
    case '/combustivel/save':
        CombustivelController::save();
        break;

    case '/tipo':
        TipoVeiculoController::index();
        break;
    case '/tipo/save':
        TipoVeiculoController::save();
        break;
    case '/fabricante':
        FabricanteController::index();
        break;
    case '/fabricante/save':
        FabricanteController::save();
        break;
    case '/veiculo':
        VeiculoController::index();
    default:
        header('Location: /home');
        break;
}
