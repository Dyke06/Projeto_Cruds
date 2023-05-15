<?php
if(!isset($_SESSION)){
    session_start();
}

//destroi a sessão
session_destroy();

//retornar a pagina login
header("Location: login.php")
?>