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
                <div class="form-container">
                    <form action="/veiculo/save" method="post">
                        <div class="form-container-aside">
                            <label for="modelo">Modelo:</label>
                            <input type="text" name="modelo" id="modelo" required>
                            <br>

                            <label for="ano">Ano:</label>
                            <input type="text" name="ano" id="ano" required>
                            <br>
                        </div>
                        <div class="form-container-aside">
                            <label for="cor">Cor:</label>
                            <input type="text" name="cor" id="cor" required>
                            <br>

                            <label for="num_chassi">Número do Chassi:</label>
                            <input type="text" name="num_chassi" id="num_chassi" required>
                            <br>
                        </div>
                        <div class="form-container-aside">
                            <label for="placa">Placa:</label>
                            <input type="text" name="placa" id="placa" required>
                            <br>

                            <label for="quilometragem">Quilometragem:</label>
                            <input type="text" name="quilometragem" id="quilometragem" required>
                            <br>
                        </div>
                        <div class="form-container-aside">
                            <label for="obs">Observações:</label>
                            <input type="text" name="obs" id="obs" required>
                            <br>

                            <label for="obs">Marca:</label>
                            <select name="id_marca">
                                <?php foreach ($model->lista_marca as $marca) : ?>
                                    <option value="<?= $marca->id ?>"><?= $marca->descricao ?></option>
                                <?php endforeach ?>
                            </select>
                            <br>
                        </div>
                        <div class="checkbox-container">

                        </div>
                    </form>
                </div>
            </div>
    </main>
    </div>
    <?php include 'View/includes/js_config.php' ?>
</body>

</html>