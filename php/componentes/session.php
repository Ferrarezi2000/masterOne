<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION[ 'login' ]);
    unset($_SESSION[ 'senha' ]);

    echo "<script language='javascript' type='text/javascript'>
           window.location.href='../../src/administracao/login.php'
          </script>";
}

$logado = $_SESSION['login'];
