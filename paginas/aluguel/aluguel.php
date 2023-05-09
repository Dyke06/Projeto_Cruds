<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/usuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="alinhar">
        <div class="titu">
            <h3><i class="bi bi-bookmark-fill"></i></i>Aluguel</h3>
        </div>   

        <div class="link">
            <a href="index.php?menuop=cad-aluguel" class="botao">Novo Aluguel +</a>
        </div>
    </div>    
</header>

<?php 
            $sql = "SELECT * FROM tbaluguel";
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

                    $sql1 = "SELECT * FROM tbLivro";
                    $rs1 = $conexao -> query($sql1);
                    $row1 = $rs1 -> fetch_object();
                    

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