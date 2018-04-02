<?php
//Variáveis

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$email = $_POST['email'];

// Compo E-mail
$arquivo = "
<html>
<div style=\"width: 100%; padding-top: 10px; padding-bottom: 10px; text-align: center; background-color: #1f2d3b; color: white\">
    <h3>Master One</h3>
    <div style=\"font-size: 12px\">Nova mensagem recebida.</div>
</div>

<div style=\"margin-right: 50px; margin-left: 50px; margin-top: 20px\">
    <div><strong>Remetente:</strong></div>
    <div style=\"margin-left: 10px\">$nome $sobrenome</div>
    <div><strong>Assunto:</strong></div>
    <div style=\"margin-left: 10px\">$assunto</div>
    <div><strong>Email:</strong></div>
    <div style=\"margin-left: 10px\">$email</div>
    <div><strong>Mensagem:</strong></div>
    <div style=\"text-align: justify; margin-left: 10px\">$mensagem</div>
</div>
</html>
";

//enviar

// emails para quem será enviado o formulário
$emailenviar = "ferrarezi_alem@yahoo.com.br";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Master One';

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    echo "<script language='javascript' type='text/javascript'>
             alert('Email enviado com sucesso.');window.location.href='../index.php';
          </script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
             alert('Falha ao enviar o email.');window.location.href='../index.php';
          </script>";
}
?>