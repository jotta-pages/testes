<?php
     $conexao = mysqli_connect("localhost", "root", "", "login");

     //checar conexão
    
    if(!$conexao){
        echo"não foi possivel se conectar ao banco";
    } else {
        echo"conectado com sucesso ao banco....";
    }

    //checando se email ja existe
    $email = ($_POST['email']);
    $email = mysqli_real_escape_string($conexao, $email);
    $sql = "SELECT email FROM login.usuarios WHERE email='$email'";
    $retorno = mysqli_query($conexao,$sql);

    if(mysqli_num_rows($retorno)>0){
        echo"email ja cadastrado!<br>";
        echo"tente colocar outro email";

    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];

        $sql = "INSERT INTO login.usuarios(email,senha,nome) values('$email', '$senha', '$nome')";
        $resultado = mysqli_query($conexao, $sql);
        echo"....CADASTRO REALIZADO COM SUCESSO, SEJA BEM VINDO $nome";

        
    }
    

?>
<br>
<a href="index.php">
<button>FAZER LOGIN</button>
</a>
