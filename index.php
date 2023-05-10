<?php
    include("db/conexao.php");
    session_start();
    if(isset($_SESSION["emailLogin"]) and isset($_SESSION["senhaLogin"])){
        $emailLogin = $_SESSION["emailLogin"]; 
        $senhaLogin = $_SESSION["senhaLogin"]; 
        $nomeLogin = $_SESSION["nomeLogin"]; 

        $sql = "SELECT * FROM userlogin WHERE emailLogin = '{$emailLogin}' and senhaLogin ='{$senhaLogin}'";
        $rs = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($rs);
        $linha = mysqli_num_rows($rs);

        if($linha == 0){
            session_unset();
            session_destroy();
            header('Location: login.php');
            exit();
        }

    }else{
        header('Location: login.php');
            exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Sistemas - Livros 1.1</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a href="#" class="navbar-brand">
                    <h3>WDA Livraria</h3>
                </a>            
                <div class="collapse navbar-collapse" id="conteudoNavBar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="?menuop=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="?menuop=usuario">Usuario</a></li>
                        <li class="nav-item"><a class="nav-link" href="?menuop=editora">Editora</a></li>
                        <li class="nav-item"><a class="nav-link" href="?menuop=livro">Livros</a> </li> 
                        <li class="nav-item"><a class="nav-link" href="?menuop=aluguel">Aluguel</a> </li> 
                    </ul>
                    <div class="navbar-nav w-100 justify-content-end">
                        <a href="logaut.php" class="nav-link">
                            <i class="bi bi-person"></i>
                            <?=$nomeLogin?> Sair <i class="bi bi-box-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>   
    <main>
        <div class="container">
        <?php 
            switch(@$_REQUEST["menuop"]){
                case 'home':
                    include("paginas/home/home.php");
                    break;
                
                case 'usuario':
                    include("paginas/usuario/usuario.php");
                    break;   
                    
                case 'cad-usuario':
                    include("paginas/usuario/cad-usuario.php");
                    break; 
                
                case 'editar-usuario':
                    include("paginas/usuario/editar-usuario.php");
                    break;

                case 'atualizar-usuario':
                    include("paginas/usuario/atualizar-usuario.php");
                    break;

                case 'inserir-usuario':
                    include("paginas/usuario/inserir-usuario.php");
                    break;

                case 'excluir-usuario':
                    include("paginas/usuario/excluir-usuario.php");
                    break;

                case 'livro':
                    include("paginas/livro/livro.php");
                    break; 

                case 'cad-livro':
                    include("paginas/livro/cad-livro.php");
                    break;
                    
                case 'inserir-livro':
                    include("paginas/livro/inserir-livro.php");
                    break;

                case 'editar-livro':
                    include("paginas/livro/editar-livro.php");
                    break;

                case 'atualizar-livro':
                    include("paginas/livro/atualizar-livro.php");
                    break;

                case 'excluir-livro':
                    include("paginas/livro/excluir-livro.php");
                    break;
                    
                    
                case 'editora':
                    include("paginas/editora/editora.php");
                    break;

                case 'cad-editora':
                    include("paginas/editora/cad-editora.php");
                    break;

                case 'inserir-editora':
                    include("paginas/editora/inserir-editora.php");
                    break;

                case 'editar-editora':
                    include("paginas/editora/editar-editora.php");
                    break;

                case 'atualizar-editora':
                    include("paginas/editora/atualizar-editora.php");
                    break;

                case 'excluir-editora':
                    include("paginas/editora/excluir-editora.php");
                    break;
                      
                case 'aluguel':
                    include("paginas/aluguel/aluguel.php");
                    break;

                case 'cad-aluguel':
                    include("paginas/aluguel/cad-aluguel.php");
                    break;

                case 'inserir-aluguel':
                    include("paginas/aluguel/inserir-aluguel.php");
                    break;

                case 'excluir-aluguel':
                    include("paginas/aluguel/excluir-aluguel.php");
                    break;

                default:
                    include("paginas/home/home.php");
                    break;
            }
        ?>
        </div>
    </main>
    <script>"js/bootstrap.bundle.min.js"</script>
</body>
</html>