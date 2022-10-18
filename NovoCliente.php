<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

include_once ('conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$fone = $_POST['fone'];
$email = $_POST['email'];
$nomecontato = $_POST['nomecontato'];
$fonecontato = $_POST['fonecontato'];

$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$trabalho = $_POST['trabalho'];
$fonetrabalho = $_POST['fonetrabalho'];
$esposa = $_POST['esposa'];
$pai = $_POST['pai'];

$mae = $_POST['mae'];
$qtdfilhos = $_POST['qtdfilhos'];
$about = $_POST['about'];
$favcidade = $_POST['favcidade'];


$dtcadastro = $_POST['dtcadastro'];


$sql = "INSERT INTO tab_cadgeral (nome, sobrenome, cpf, rg, fone, email, nomecontato,fonecontato,endereco,bairro,cidade,estado,trabalho,fonetrabalho,esposa,pai,mae,qtdfilhos,about,favcidade,dtcadastro) VALUES";
$sql .= "('$nome', '$sobrenome', '$cpf', '$rg','$fone','$email','$nomecontato','$fonecontato','$endereco','$bairro','$cidade','$estado','$trabalho','$fonetrabalho','$esposa','$pai','$mae','qtdfilhos','$about','$favcidade','$dtcadastro')"; 

mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "<h1>Cliente cadastrado com sucesso!</h1>";
header("Refresh: 2; url=cadastro.html");

?>
</body>
</html>