<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <h1>Projeto ControleRemoto</h1>
    <pre>
        
        <?php 
            require_once 'ControleRemoto.php';
        
            $controle = new ControleRemoto();
        
            $controle -> abrirMenu();
        
        ?> 
    </pre>
</body>
</html>