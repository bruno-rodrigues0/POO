<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>

    <?php 
        
        require_once './Caneta.php';

        $c1 = new Caneta("Bic Cristal" , 0.5);
        
        print("Modelo da caneta {$c1->getModelo()} e ponta da caneta {$c1->getPonta()}")
    ?>

    <div class="target"></div>

    <!-- <script src="main.js"></script> -->
</body>
</html>  