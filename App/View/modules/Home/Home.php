<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'View/includes/css_config.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home XD</title>
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
            <div class="main-container-about">
                <div class="text-container">
                    <h4>HBS Veículos</h4>
                </div>
                <div class="image-container mb-3">
                    <img src="View/assets/cars.jpg" alt="cars">
                </div>
                <div class="text-container">
                    <p>Que tal realizar aquele sonho do carro novo? Na HBS Veículos você encontra toda a ajuda que precisa para tornar o seu sonho uma realidade! Carros novos e seminovos, de todas as marcas e com as melhores condições que você irá encontrar! Venha nos fazer uma visita em Dois Córregos! Estamos te aguardando!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'View/includes/js_config.php'?>
</body>

</html>