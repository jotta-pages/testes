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
    
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://host.com/login');

curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 

curl_setopt ($ch, CURLOPT_POST, 1);

curl_setopt ($ch, CURLOPT_POSTFIELDS, '_username=$email&_password=$senha');

curl_setopt($ch, CURLOPT_COOKIESESSION, true);

$store = curl_exec ($ch);

curl_setopt($ch, CURLOPT_URL, 'https://host.com/dashboard/');

curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 

$prok =curl_exec($ch);

curl_close ($ch);

echo $prok;

?>
<br>
<a href="/cursonovo/meu/i/login/index.php">
<button>FAZER LOGIN</button>
</a>
