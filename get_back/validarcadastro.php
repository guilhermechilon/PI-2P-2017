<?php
include("conexao.php");
$email=$_POST['email'];
$senha=$_POST['senha'];
$nome=$_POST['nome'];
$curso=$_POST['curso'];

$destino = $_FILES['foto']['name'];
$arquivo_tmp = $_FILES['foto']['tmp_name'];
$diretorio = "img/";
move_uploaded_file( $arquivo_tmp, $diretorio.$destino );

$sql=mysqli_query($conn,"SELECT * FROM usuario WHERE email = $email");

echo $sql;
?>