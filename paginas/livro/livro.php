<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/usuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style> 

        .alinhar{
            width: 2000px;
        }
           
        .pesquisa{
            margin-left: 500px;
        }

        .form{
            border-radius:5px;
            padding: 5px;
        }
    </style>

    <title>Document</title>
</head>
<body>

<header>
    <div class="alinhar">
        <div class="titu">
            <h3><i class="bi bi-book-fill"></i></i> Livros</h3>
        </div>   

        <div class="link">
            <a href="index.php?menuop=cad-livro" class="botao">Novo Livro +</a>
        </div>

        <div class="pesquisa"> 
            <form action="index.php?menuop=livro" method="POST">
                <input class="form" type="text" placeholder="Pesquisa" name="txt_pesquisa" id="">
                <input class="btn btn-success" type="submit" value="pesquisar" id="">
            </form> 
        </div>
    </div>    
</header>

        <?php 
            $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

            $sql = "SELECT * FROM tblivro where idLivro = '{$txt_pesquisa}' or autorLivro = '{$txt_pesquisa}' or nomeLivro LIKE '%{$txt_pesquisa}%'";

            $rs = $conexao -> query($sql);
            $qtd = $rs ->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-dark'>";
                    print "<th>#</th>";
                    print "<th>Nome</th>";
                    print "<th>Autor</th>"; 
                    print "<th>Editora</th>"; 
                    print "<th>Data de lançameto</th>";
                    print "<th>Estoque</th>";
                    print "<th>Ações</th>";
                    print "</tr>";
                
                while($row = $rs ->fetch_object()){
                    
                    print "<tr>";
                    print "<td>".$row -> idLivro."</td>";
                    print "<td>" .$row -> nomeLivro."</td>";
                    print "<td>" .$row -> autorLivro."</td>"; 
                    print "<td>" .$row -> editoraLivro."</td>"; 
                    print "<td>" .$row -> dataLivro."</td>";
                    print "<td class=''>" .$row -> estoqueLivro."</td>"; 
                    print "<td>
                            <a onclick=\"location.href='?menuop=editar-livro&idLivro=".$row-> idLivro."';\" class='btn btn-primary btn-sm'> <i class='bi bi-pencil-fill'></i>
                            </a> 
                            <a onclick=\"if(confirm('Tem certeza de que deseja excluir esse registro?')){location.href='?menuop=excluir-livro&idLivro=".$row -> idLivro."';} else{false;}\" class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></a> 
                    </td>"; 
                    print "</tr>";
                }
                print "</table>";
              }else{
                print "<p>Não encontrou resultado.</p>";
            }
        ?> 



</body>
</html>