<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'View/includes/css_config.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Veiculo</title>
</head>

<body>
    <div class="content-container">
        <div class="navbar">
            <?php include 'View/includes/navbar.php' ?>
        </div>
        <div class="content">
            <div class="main-container">
                <div class="text-container">
                    <h4>Listagem de Veículos</h4>
                </div>
                <div class="table-container">

                    <div class="container-table">
                        <table id="tableVeiculo" class="table table-bordered table-style">
                            <thead>
                                <tr>
                                    <th>Modelo</th>
                                    <th>Ano</th>
                                    <th>Cor</th>
                                    <th>Núm. Chassi</th>
                                    <th>Placa</th>
                                    <th>Quilometragem</th>
                                    <th>Detalhes</th>
                                    <th>Informações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($model->rows !== null) : ?>
                                    <?php foreach ($model->rows as $veiculo) : ?>
                                        <tr>
                                            <td><?= $veiculo->modelo ?></td>
                                            <td><?= $veiculo->ano ?></td>
                                            <td><?= $veiculo->cor ?></td>
                                            <td><?= $veiculo->num_chassi ?></td>
                                            <td><?= $veiculo->placa ?></td>
                                            <td><?= $veiculo->quilometragem ?></td>
                                            <td><button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalListaDetalhes">Ver Detalhes</button></td>
                                            <td><button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalListaInformacoes">Ver Informações</button></td>

                                        </tr>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    nenhum registro
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalListaDetalhes" tabindex="-1" role="dialog" aria-labelledby="modalListaDetalhesTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalListaDetalhesTitle">Detalhes do Veículo</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-container-aside">
                            <div class="input-container">
                                <label for="chkRevisao">Revisão: </label><br>
                                <input type="checkbox" class="form-check-input" name="chkRevisao" id="chkRevisao" <?= ($veiculo->revisao == 1) ? 'checked' : "" ?>>
                            </div>

                            <div class="input-container">
                                <label for="chkVenda">Venda: </label><br>
                                <input type="checkbox" class="form-check-input" name="chkVenda" id="chkVenda" <?= ($veiculo->venda == 1) ? 'checked' : "" ?>>
                            </div>

                            <div class="input-container">
                                <label for="chkAluguel">Aluguel: </label><br>
                                <input type="checkbox" class="form-check-input" name="chkAluguel" id="chkAluguel" <?= ($veiculo->aluguel == 1) ? 'checked' : "" ?>>
                            </div>
                        </div>
                        <div class="form-container-aside">
                            <div class="input-container">
                                <label for="chkRoubo">Roubo ou Furto: </label><br>
                                <input type="checkbox" class="form-check-input" name="chkRoubo" id="chkRoubo" <?= ($veiculo->roubo == 1) ? 'checked' : "" ?>>
                            </div>

                            <div class="input-container">
                                <label for="chkParticular">Particular: </label><br>
                                <input type="checkbox" class="form-check-input" name="chkParticular" id="chkParticular" <?= ($veiculo->particular == 1) ? 'checked' : "" ?>>
                            </div>

                            <div class="input-container">
                                <label for="chkSinistrado">Sinistrado: </label><br>
                                <input type="checkbox" class="form-check-input" name="chkSinistrado" id="chkSinistrado" <?= ($veiculo->sinistrado == 1) ? 'checked' : "" ?>>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalListaInformacoes" tabindex="-1" role="dialog" aria-labelledby="modalListaInformacoesTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalListaInformacoesTitle">Lista de Informações</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Marca</th>
                            <th>Fabricante</th>
                            <th>Combustivel</th>
                            <th>Tipo</th>
                        </thead>
                        <tbody>
                            <td><?= $veiculo->marca ?></td>
                            <td><?= $veiculo->fabricante ?></td>
                            <td><?= $veiculo->combustivel ?></td>
                            <td><?= $veiculo->tipo ?></td>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>                   
                </div>
            </div>
        </div>
    </div>

    <?php include 'View/includes/js_config.php' ?>
    <script src="View/js/jquery.veiculo.js"></script>

</html>