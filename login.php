<?php 
    include"./db/conexao.php";

    //verificação banco de dados

    if(isset($_POST["emailLogin"]) || isset($_POST["senhaLogin"])){
        //validação - se foi preenchido em branco
        if(strlen($_POST["emailLogin"]) == 0){
            echo "preencha";
        }elseif(strlen($_POST["senhaLogin"]) == 0){
            echo "preencha";
        }else{
            //recupera email e senha pelo POST
            $emailLogin = $_POST['emailLogin'];
            $senhaLogin = $_POST['senhaLogin'];
            //comando select
            $sql = "SELECT * FROM userlogin WHERE emailLogin = '$emailLogin' AND senhaLogin = '$senhaLogin'";
            //executa a consulta
            $rs = $conexao->query($sql) or die("Falha na execução");
            //retorna linhas dessa consulta
            $quantidade = $rs -> num_rows;

            if($quantidade != 0){
                //recupera os dados para a variavel
                $usuario = $rs -> fetch_assoc();
                //criar sessão se nã existir
                if(!isset($_SESSION)){
                    session_start();
                }
                //criação da session
                $_SESSION['idLogin'] = $usuario['idLogin'];

                header("Location: index.php");

            }else{
                echo "<script>alert('Email ou Senha errado.');</script>";
                echo "<script>location.href='?menuop=usuario';</script>";
            }
        }
    }  


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body{
            background-color: white;
        }
    </style>
    <title>Login - Livraria</title>
</head>
<body class="">
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 p-4 bg-white shadow rounded">
                <div class="row justify-content-center mb-4">
                    <center><h1>Login</h1></center>
                </div>

                <form action="login.php" class="needs-validation" method="POST" novalidate>
                    <div class="form-group mb-3">
                        <label class="form-label" for="emailLogin">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input class="form-control" type="email" name="emailLogin" id="emailLogin" required>
                            <div class="invalid-feedback">
                                INFORME SEU EMAIL!
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="senhaLogin">Senha:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                            <input class="form-control" type="password" name="senhaLogin" id="senhaLogin" required>
                            <div class="invalid-feedback">
                                INFORME SUA SENHA!
                            </div>
                        </div>                        
                    </div>
                    <button class="btn btn-outline-primary w-100 mb-3"><i class="bi bi-box-arrow-in-left"></i> Entrar</button>
                </form>
            </div>

        </div>
    </div>





<script src="./js1/validar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>