<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'View/includes/css_config.php' ?>
    <link rel="stylesheet" href="View/css/marca.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Marcas</title>
</head>

<body>
    <div class="content-container">
        <div class="navbar">
            <div class="logo-container">
                <a href="/home">
                    <img src="View/assets/logo.png" height="110" width="110">
                </a>
            </div>
            <div class="action-container">
                <div class="link-container">
                    <a href="/veiculo/form" class="btn btn-primary">Cadastro Veículo</a>
                </div>
                <div class="link-container">
                    <a href="/veiculo" class="btn btn-primary">Listar Veículo</a>
                </div>
            </div>
            <div class="dropdown-container">
                <div class="dropdown">
                    <a href="#" class=" btn btn-primary align-items-center link-white text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="/marca">Marca</a></li>
                        <li><a class="dropdown-item" href="/fabricante">Fabricante</a></li>
                        <li><a class="dropdown-item" href="/tipo">Tipo Veiculo</a></li>
                        <li><a class="dropdown-item" href="/combustivel">Combustivel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="main-container">
                <div class="text-container">
                    <h4>Cadastro de Marca</h4>
                </div>
                <div class="table-container">
                    <button id="adicionar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMarca">Adicionar</button>
                    <div class="container-table">
                        <table id="tableMarca" class="table table-bordered table-style">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Descricao</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($model_marca !== null) : ?>
                                    <?= var_dump($model_marca)?>
                                    <?php foreach ($model_marca as $marca): ?>
                                        <tr>
                                            <td><?= $marca->id ?></td>
                                            <td><?= $marca->descricao ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else : ?>

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
    <div class="modal fade" id="modalMarca" tabindex="-1" role="dialog" aria-labelledby="modalMarcaTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMarcaTitle">Cadastrar Marca</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <label for="txtDescricao">Descrição:</label>
                   <input type="text" class="form-control" id="txtDescricao">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="adicionarMarca">Salvar Registro</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'View/includes/js_config.php' ?>
    <script src="View/js/jquery.marca.js"></script>
    
</body>

</html>