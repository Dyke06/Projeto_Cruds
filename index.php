<?php
    include("db/conexao.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Sistemas - Livros 1.1</title>
</head>
<body>
    <header>
        <h1>WDA Livraria</h1>
        <nav>
            <a href="?menuop=home">Home</a> |
            <a href="?menuop=usuario">Usuario</a>|
            <a href="?menuop=editora">Editora</a> |
            <a href="?menuop=livro">Livros</a> |
            <a href="?menuop=aluguel">Aluguel</a> |
        </nav>
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

                case 'editora':
                    include("paginas/editora/editora.php");
                    break;
                    
                case 'livro':
                    include("paginas/livro/livro.php");
                    break;
                    
                case 'aluguel':
                    include("paginas/aluguel/aluguel.php");
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