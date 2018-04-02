<?php
//Variáveis

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$email = $_POST['email'];

echo $nome;

// Compo E-mail
$arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
            <tr>
              <td width='500'>Nome:$nome</td>
            </tr>
            <tr>
              <td width='320'>Sobrenome:<b>$sobrenome</b></td>
            </tr>
            <tr>
              <td width='320'>Assunto:<b>$assunto</b></td>
            </tr>
            <tr>
              <td width='320'>Email:<b>$email</b></td>
            </tr>
            <tr>
              <td width='320'>Mensagem:$mensagem</td>
            </tr>
            </td>
          </tr>
        </table>
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
$headers .= 'From: $nome <$email>';

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