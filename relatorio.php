<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

include_once ('conexao.php');


$sql = "SELECT codigo, nome, sobrenome, cpf, rg, fone, email, nomecontato,fonecontato,endereco,bairro,cidade,estado,trabalho,fonetrabalho,esposa,pai,mae,qtdfilhos,about,favcidade,dtcadastro FROM tab_cadgeral";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> codigo: ". $row["codigo"]. " | nome: ". $row["nome"]. " | sobrenome: ". $row["sobrenome"]. " | cpf: ". $row["cpf"]." | rg: ". $row["rg"]." | fone: ". $row["fone"]." | email: ". $row["email"]."<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

</body>
</html>

