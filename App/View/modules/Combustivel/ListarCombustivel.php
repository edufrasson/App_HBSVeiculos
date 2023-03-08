<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'View/includes/css_config.php' ?>
    <link rel="stylesheet" href="View/css/marca.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Combustível</title>
</head>

<body>
    <div class="content-container">
        <div class="navbar">
           <?php include 'View/includes/navbar.php' ?>
        </div>
        <div class="content">
            <div class="main-container">
                <div class="text-container">
                    <h4>Cadastro de Combustivel</h4>
                </div>
                <div class="table-container">
                    <button id="adicionar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCombustivel">Adicionar</button>
                    <div class="container-table">
                        <table id="tableCombustivel" class="table table-bordered table-style">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Descricao</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php if ($model->rows !== null) : ?>                                    
                                    <?php foreach ($model->rows as $combustivel): ?>
                                        <tr>
                                            <td><?= $combustivel->id ?></td>
                                            <td><?= $combustivel->descricao ?></td>
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
    <div class="modal fade" id="modalCombustivel" tabindex="-1" role="dialog" aria-labelledby="modalCombustivelTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCombustivelTitle">Cadastrar Combustivel</h5>
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
                    <button type="button" class="btn btn-primary" id="adicionarCombustivel">Salvar Registro</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'View/includes/js_config.php' ?>
    <script src="View/js/jquery.combustivel.js"></script>
    
</body>

</html>