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
        $c1 -> modelo = "2ab20x";
        $c1 -> cor = "blue";
        $c1 -> ponta = 0.5;
        $c1 -> tampada = false;

        $jsonc1 = json_encode($c1);

        print($c1 -> verModelo() . "<br>");


        print($c1 -> tampar() . "<br>");
        print($c1 -> destampar() . "<br>");

        print($c1 -> rabiscar("Olá mundo") . "<br>");

    ?>
</body>
</html>  