<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas - Livros 1.1</title>
</head>
<body>
    <header>
        <h1>Sitema de Livraria</h1>
        <nav>
            <a href="index.php?menuop=home">Home</a> |
            <a href="index.php?menuop=usuario">Usuario</a>|
            <a href="index.php?menuop=editora">Editora</a> |
            <a href="index.php?menuop=livro">Livros</a> |
            <a href="index.php?menuop=aluguel">Aluguel</a> |
        </nav>
    </header>

    <main>
        <?php 
            $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
            switch($menuop){
                case 'home':
                    include("paginas/home/home.php");
                    break;
                
                case 'usuario':
                    include("paginas/usuario/usuario.php");
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
    </main>
    
</body>
</html>