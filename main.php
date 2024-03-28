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
       
        $c1->setModelo("Bic Cristal");
        $c1->setPonta(0.5);
        
        $c1->getModelo();
        $c1->getPonta();

    ?>
</body>
</html>  