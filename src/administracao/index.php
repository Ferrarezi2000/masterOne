<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION[ 'login' ]);
    unset($_SESSION[ 'senha' ]);
    header('location:http://127.0.0.1:8080/edsa-teste/');
}

$logado = $_SESSION['login'];

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>

<body>
<div>
    <div>
        <?php
            echo "Bem vindo $logado";
        ?>
    </div>
</div>
</body>
</html>