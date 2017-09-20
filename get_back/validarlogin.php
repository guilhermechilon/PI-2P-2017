<?php
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql="SELECT * FROM usuario WHERE email='$email' && senha='$senha' limit 1";
$result=mysqli_query($conn, $sql);
$row=$result->fetch_assoc();
    if(!empty($row)){
        echo "Usuario nao encontrado";
    }else{
        echo "Usuario encontrado";
        $_SESSION=$row['id_usuario'];
        header("location:index.php");
    }

?>