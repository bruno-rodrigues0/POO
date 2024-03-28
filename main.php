<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php 
        
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1 -> modelo = "BIC cristal";
        $c1 ->  cor = "Azul";

        $c1 -> tampar();

        print_r($c1);

    ?>
</body>
</html>  