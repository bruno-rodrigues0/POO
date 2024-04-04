<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>

    <?php 
        
        require_once("./Banco.php");

        $user1 = new Contas("CC", "Bruno");

        $user1 -> abrirConta();

        $user1 -> depositar(230);
        
        print($user1 -> getSaldo());
        print("<br>" . $user1 -> getNumConta());

        $user2 = new Contas("CC", "Gabriel");

        $user2 -> abrirConta();

        $user2 -> depositar(540);

        $user2 -> sacar(300);
        
        print("<br>" . $user2 -> getSaldo());
        print("<br>" . $user2 -> getNumConta());
    ?>

    <div class="target"></div>

    <!-- <script src="main.js"></script> -->
</body>
</html>  