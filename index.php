<?php
    include("db/conexao.php");
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <style>
            ul li{
                margin-left: 25px;
                width: 100px;
            }

            
            body{
                background-color: #fff;
                
            }

            nav a h3{
                color: rgb(255, 255, 255);
                text-decoration: none;
            }

            .nav-link{
                color: rgb(255, 255, 255);
                
            }

            .nav-link:hover{
                border-radius: 20px;
                background-color: rgb(31, 89, 197);
                transition: 0.5s;
                color: rgb(243, 242, 242);
                font-weight: bold;
            }

            #Sair{
                margin-left: 20px;
                
            }

            #Sair-width{
                width: 140px;
            }

        </style>
        <title>Sistemas - Livros 1.1</title>
    </head>
    <body>
        <header class="bg-primary">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <a href="#" class="navbar-brand">
                        <h3>WDA Livraria</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>            
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="?menuop=home"><i class="bi bi-house"></i> Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menuop=usuario"><i class="bi bi-person"></i> Usuario</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menuop=editora"><i class="bi bi-archive"></i> Editora</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menuop=livro"><i class="bi bi-book-fill"></i> Livros</a> </li> 
                            <li class="nav-item"><a class="nav-link" href="?menuop=aluguel"> <i class="bi bi-calendar-check"></i> Aluguel</a> </li> 
                        </ul>
                        <div class="navbar-nav w-100 justify-content-end" id="Sair">
                            <li class="nav-item">
                                <a href="logaut.php" class="nav-link" id="Sair-width">
                                    <i class="bi bi-person"></i>
                                    Sair <i class="bi bi-box-arrow-right"></i>
                                </a>
                            <li>
                        </div>
                    </div>
                </nav>
            </div>
        </header>   
        <main>
            <div class="container">
            <?php 
                //área de paginação
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>