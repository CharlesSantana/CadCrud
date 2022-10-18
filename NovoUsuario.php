<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

include_once ('conexao.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = "INSERT INTO tab_usuarios (usuario, email, senha) VALUES";
$sql .= "('$usuario', '$email', '$senha')"; 

mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "<h1>Usuario cadastrado com sucesso!</h1>";
header("Refresh: 2; url=login.html");

?>
</body>
</html>