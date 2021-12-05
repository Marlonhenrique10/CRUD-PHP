<?php 
include './../app/config.php';
include './../app/Libranes/Rota.php';
include './../app/Libranes/Controller.php';
include './../app/Libranes/DataBase.php';
$db = new DataBase;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>/public/css/estilos.css">    
</head>
<body>
    <?php 
        include '../app/Views/topo.php';
        $rotas = new Rota();        
        include '../app/Views/rodape.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="<?= URL ?>/public/js/function.js"></script>
</body>
</html>

