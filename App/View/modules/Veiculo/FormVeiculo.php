<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'View/includes/css_config.php' ?>
    <link rel="stylesheet" href="View/css/form_veiculo.css">
    <title>Cadastrar Veículo</title>
</head>

<body>
    <main class="content-container">
        <div class="navbar">
            <?php include 'View/includes/navbar.php' ?>
        </div>
        <div class="content">
            <div class="main-container">
                <div class="text-container">
                    <h3>Cadastro de Veículos</h3>
                </div>
                <div class="form-container">


                    <form action="/veiculo/save" method="post">
                        <div class="form-row">
                            <div class="form-container-aside">
                                <input type="hidden" name="id" value="<?= $model_update->id?>">

                                <div class="input-container">
                                    <label for="modelo">Modelo:</label><br>
                                    <input class="form-control" type="text" name="modelo" id="modelo" value="<?= $model_update->modelo?>" required>
                                    <br>
                                </div>
                                <div class="input-container">
                                    <label for="ano">Ano:</label><br>
                                    <input class="form-control" type="number" name="ano" id="ano" min="1900" max="2050" value="<?= $model_update->ano?>"required>
                                    <br>
                                </div>
                            </div>
                            <div class="form-container-aside">
                                <div class="input-container">
                                    <label for="cor">Cor:</label><br>
                                    <input class="form-control" type="text" name="cor" id="cor" value="<?= $model_update->cor?>"required>
                                    <br>
                                </div>
                                <div class="input-container">
                                    <label for="num_chassi">Número do Chassi:</label><br>
                                    <input class="form-control" type="text" maxlength="17" name="num_chassi" id="num_chassi" value="<?= $model_update->num_chassi?>"required>
                                    <br>
                                </div>
                            </div>
                            <div class="form-container-aside">
                                <div class="input-container">
                                    <label for="placa">Placa:</label><br>
                                    <input class="form-control" type="text" name="placa" id="placa" value="<?= $model_update->placa?>"required>
                                    <br>
                                </div>
                                <div class="input-container">
                                    <label for="quilometragem">Quilometragem:</label><br>
                                    <input class="form-control" type="text" name="quilometragem" id="quilometragem" value="<?= $model_update->quilometragem?>" required>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-container-aside">
                                <div class="input-container">
                                    <label for="obs">Marca:</label><br>
                                    <select class="form-select" name="id_marca" required>
                                        <option value="">Selecione uma marca!</option>
                                        <?php foreach ($model->lista_marca as $marca) : ?>
                                            <option value="<?= $marca->id ?>" <?= ($marca->id == $model_update->id_marca) ? 'selected' : '' ?>><?= $marca->descricao ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <br>
                                </div>
                                <div class="input-container">
                                    <label for="obs">Fabricante:</label><br>
                                    <select class="form-select" name="id_fabricante" required>
                                        <option value="">Selecione um fabricante!</option>
                                        <?php foreach ($model->lista_fabricante as $fabricante) : ?>
                                            <option value="<?= $fabricante->id ?>" <?= ($fabricante->id == $model_update->id_fabricante) ? 'selected' : '' ?>><?= $fabricante->descricao ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-container-aside">
                                <div class="input-container">
                                    <label for="obs">Combustível:</label><br>
                                    <select class="form-select" name="id_combustivel" required>
                                        <option value="">Selecione o combustível!</option>
                                        <?php foreach ($model->lista_combustivel as $combustivel) : ?>
                                            <option value="<?= $combustivel->id ?>" <?= ($combustivel->id == $model_update->id_combustivel) ? 'selected' : '' ?>><?= $combustivel->descricao ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <br>
                                </div>
                                <div class="input-container">
                                    <label for="obs">Tipo de veículo:</label><br>
                                    <select class="form-select" name="id_tipo" required>
                                        <option value="">Selecione um tipo!</option>
                                        <?php foreach ($model->lista_tipo as $tipo) : ?>
                                            <option value="<?= $tipo->id ?>" <?= ($tipo->id == $model_update->id_tipo) ? 'selected' : '' ?>><?= $tipo->descricao ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-container-aside">
                                <div class="input-container">
                                    <label for="obs">Observações:</label><br>
                                    <input class="form-control" type="text" name="obs" value="<?= $model_update->observacoes?>" id="obs">
                                    <br>
                                </div>
                                <div class="input-container">
                                    <label for="btn">Finalizar cadastro:</label><br>
                                    <button type="button" id="finalizar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVeiculo">Abrir Detalhes do Veículo</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalVeiculo" tabindex="-1" role="dialog" aria-labelledby="modalVeiculoTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Detalhes do Veículo</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-container-aside">
                                                <div class="input-container">
                                                    <label for="chkRevisao">Revisão: </label><br>
                                                    <input type="checkbox" class="form-check-input" name="chkRevisao" id="chkRevisao" <?= ($model_update->revisao == 1) ? 'checked' : '' ?>>
                                                </div>

                                                <div class="input-container">
                                                    <label for="chkVenda">Venda: </label><br>
                                                    <input type="checkbox" class="form-check-input" name="chkVenda" id="chkVenda" <?= ($model_update->venda == 1) ? 'checked' : '' ?>>
                                                </div>

                                                <div class="input-container">
                                                    <label for="chkAluguel">Aluguel: </label><br>
                                                    <input type="checkbox" class="form-check-input" name="chkAluguel" id="chkAluguel" <?= ($model_update->aluguel == 1) ? 'checked' : '' ?>>
                                                </div>
                                            </div>
                                            <div class="form-container-aside">
                                                <div class="input-container">
                                                    <label for="chkRoubo">Roubo ou Furto: </label><br>
                                                    <input type="checkbox" class="form-check-input" name="chkRoubo" id="chkRoubo" <?= ($model_update->roubo == 1) ? 'checked' : '' ?>>
                                                </div>

                                                <div class="input-container">
                                                    <label for="chkParticular">Particular: </label><br>
                                                    <input type="checkbox" class="form-check-input" name="chkParticular" id="chkParticular" <?= ($model_update->particular == 1) ? 'checked' : '' ?>>
                                                </div>

                                                <div class="input-container">
                                                    <label for="chkSinistrado">Sinistrado: </label><br>
                                                    <input type="checkbox" class="form-check-input" name="chkSinistrado" id="chkSinistrado" <?= ($model_update->sinistrado == 1) ? 'checked' : '' ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" id="adicionarVeiculo">Salvar Registro</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    </div>

    <?php include 'View/includes/js_config.php' ?>
    <script src="View/js/jquery.veiculo.js"></script>
</body>

</html>