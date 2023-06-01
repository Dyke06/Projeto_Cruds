<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/usuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style> 

           
        .pesquisa{
            position: relative;
            top: 10px;
            left: -5px;
        }

        .form{
            border-radius:5px;
            padding: 5px;
        }

         /* Tabela Responsiva */
         .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: 100%;
        }

        .table thead th {
            white-space: nowrap;
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
    </div>    

    <div class="pesquisa"> 
            <form action="index.php?menuop=livro" method="POST">
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Pesquisa" name="txt_pesquisa" id="">
                    <button class="btn btn-success btn-sm" type="submit" value="pesquisar" id=""><i class="bi bi-send-fill"></i> Pesquisar</button>
                </div>   
            </form> 
        </div>
</header>
<div class="table-responsive">
        <?php 
            $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

            $sql = "SELECT idLivro, nomeLivro, autorLivro, editoraLivro, DATE_FORMAT(dataLivro, '%d/%m/%Y') as dataaLivro, estoqueLivro, alugadoLivro FROM tblivro where idLivro = '{$txt_pesquisa}' or autorLivro LIKE '%{$txt_pesquisa}%' or nomeLivro LIKE '%{$txt_pesquisa}%' or editoraLivro LIKE '%{$txt_pesquisa}%' or dataLivro LIKE '%{$txt_pesquisa}%' or estoqueLivro = '{$txt_pesquisa}' or alugadoLivro = '{$txt_pesquisa}'";

            $rs = $conexao -> query($sql);
            $qtd = $rs ->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-dark'>";
                    print "<th>#</th>";
                    print "<th>Livro</th>";
                    print "<th>Autor</th>"; 
                    print "<th>Editora</th>"; 
                    print "<th>Data de lançameto</th>";
                    print "<th>Estoque</th>";
                    print "<th>Alugados</th>";
                    print "<th>Ações</th>";              
                    print "</tr>";
                
                while($row = $rs ->fetch_object()){
                    
                    print "<tr>";
                    print "<td>".$row -> idLivro."</td>";
                    print "<td>" .$row -> nomeLivro."</td>";
                    print "<td>" .$row -> autorLivro."</td>"; 
                    print "<td>" .$row -> editoraLivro."</td>"; 
                    print "<td>" .$row -> dataaLivro."</td>";
                    print "<td class=''>" .$row -> estoqueLivro."</td>"; 
                    print "<td class=''>" .$row -> alugadoLivro."</td>";
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
</div>
</body>
</html>