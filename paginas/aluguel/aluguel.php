<!DOCTYPE html>
<html lang="en">
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
            <h3><i class="bi bi-bookmark-fill"></i></i> Aluguel</h3>
        </div>   

        <div class="link">
            <a href="index.php?menuop=cad-aluguel" class="botao">Novo Aluguel +</a>
        </div>

        <div class="pesquisa"> 
            <form action="index.php?menuop=aluguel" method="POST">
                <input class="form" type="text" placeholder="Pesquisa" name="txt_pesquisa" id="">
                <input class="btn btn-success" type="submit" value="pesquisar" id="">
            </form> 
        </div>
    </div>    
</header>

<?php 
            $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

            $sql = "SELECT * FROM tbaluguel where idAluguel = '{$txt_pesquisa}' or nomeAluguel = '{$txt_pesquisa}' or livroAluguel LIKE '%{$txt_pesquisa}%'";
            $rs = $conexao -> query($sql);
            $qtd = $rs ->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-dark'>";
                    print "<th>#</th>";
                    print "<th>Livro</th>";
                    print "<th>Usuario</th>"; 
                    print "<th>Data do aluguel</th>"; 
                    print "<th>Previsão de devolução</th>";
                    print "<th>Ações</th>";
                    print "</tr>";
                
                while($row = $rs ->fetch_object()){      
                    print "<tr>";
                    print "<td>".$row -> idAluguel."</td>";
                    print "<td>" .$row -> livroAluguel."</td>";
                    print "<td>" .$row -> nomeAluguel."</td>"; 
                    print "<td>" .$row -> dataAluguel."</td>"; 
                    print "<td>" .$row -> devolucaoAluguel."</td>"; 
                    print "<td>
                            <a onclick=\"if(confirm('Tem certeza de que deseja excluir esse registro?')){location.href='?menuop=excluir-aluguel&idAluguel=".$row -> idAluguel."';} else{false;}\" class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></a> 
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