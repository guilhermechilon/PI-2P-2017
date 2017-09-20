<?php
$conn = mysql_connect('localhost','root','') or die ("Erro na conexao");
mysqli_select_db($conn, 'achados_perdidos')or die ("Erro na conexao");

?>