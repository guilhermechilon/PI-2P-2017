<?php
// Sua conexao (depende de como você faz)
require_once('conexao.php');

$usuarioId = $_SESSION['usuarioId'];

// Query
$dados = mysqli_query($conn,"SELECT * FROM usuarios WHERE id='{$usuarioId}' LIMIT 1") or die(mysqli_error());

$conta = @mysqli_fetch_assoc($dados);

echo $conta['nome'];

img/echo $conta['img'];

echo $conta['curso'];

?>