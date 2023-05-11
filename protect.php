<?php 
if(!isset($_SESSION)){
    session_start();

}
if(!isset($_SESSION['idLogin'])){
    header('Location: login.php');
}
?>