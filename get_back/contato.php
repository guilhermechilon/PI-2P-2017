<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo

$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'contato@getback.com'; 
$nome = $_POST['nome'];
$msg = $_POST['msg'];
$m['assunto'] = $assunto; // assunto, por algum motivo ele precisa vir dessa forma.
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Contato Cliente</P>
<p><b>E-Mail:</b> '.$emailremetente.'</p>
<p><b>Nome:</b> '.$nome.'</p>
<p><b>Mensagem:</b> '.$msg.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "$assunto\r\n";
$envio = mail($emaildestinatario,$m['assunto'],$mensagemHTML, $headers); 

if($envio)
echo "<script>location.href='contato.php'</script>"; // Página que será redirecionada
?>