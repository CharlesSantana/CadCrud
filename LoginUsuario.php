<?php
// Inclui o arquivo com o sistema de segurança
include_once('conexao.php');


$usuarioform = $_POST['usuario'];
$senhaform = $_POST['senha'];


$sql = "SELECT usuario FROM tab_usuarios where usuario = '$usuarioform' and senha= '$senhaform'";
$select = mysqli_query($conn,$sql);
$array = mysqli_fetch_array($select);
$logarray = $array['usuario'];

var_dump($usuarioform);

var_dump($logarray);


if ($logarray == $usuarioform) {
  header("Location: cadastro.html");
}else{
  header("Location: cadasddtro.html");

}

  ?>