<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo a sua conta, <?php echo $_SESSION['nome']; echo " seu id é "; echo $_SESSION['id']; ?>.

 <p>
    <a href="logout.php">Sair</a>
 </p>
</body>
</html>