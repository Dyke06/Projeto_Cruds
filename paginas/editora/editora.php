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
            width: 100%;
        }

        .link a{
            text-align: justify;
            
        }
         
        .pesquisa{
            position: relative;
            top: 10px;
            left: -5px;
            
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
            <h3><i class="bi bi-box2-fill"></i></i> Editora</h3>
        </div>   

        <div class="link">
            <a href="index.php?menuop=cad-editora" class="botao">Nova Editora +</a>
        </div>   
    </div>   
    
    <div class="pesquisa"> 
            <form action="index.php?menuop=editora" method="POST">
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Pesquisa" name="txt_pesquisa" id="">
                    <button class="btn btn-success btn-sm" type="submit"><i class="bi bi-send-fill"></i> Pesquisar</button>
 
                </div>
                
            </form> 
        </div>
</header>

<?php 
            $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

            $sql = "SELECT * FROM tbeditora where idEditora = '{$txt_pesquisa}' or  nomeEditora LIKE '%{$txt_pesquisa}%'";

            $rs = $conexao -> query($sql);
            $qtd = $rs ->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-dark'>";
                    print "<th>#</th>";
                    print "<th>Nome</th>";
                    print "<th>Email</th>"; 
                    print "<th>Telefone</th>"; 
                    print "<th>Site</th>"; 
                    print "<th>Ações</th>"; 
                    print "</tr>";
                
                while($row = $rs ->fetch_object()){
                    print "<tr>";
                    print "<td>".$row -> idEditora."</td>";
                    print "<td>" .$row -> nomeEditora."</td>";
                    print "<td>" .$row -> emailEditora."</td>"; 
                    print "<td>" .$row -> telefoneEditora."</td>"; 
                    print "<td>" .$row -> siteEditora."</td>";
                    print "<td>
                            <a onclick=\"location.href='?menuop=editar-editora&idEditora=".$row-> idEditora."';\" class='btn btn-primary btn-sm'> <i class='bi bi-pencil-fill'></i>
                            </a> 
                            <a onclick=\"if(confirm('Tem certeza de que deseja excluir esse registro?')){location.href='?menuop=excluir-editora&idEditora=".$row -> idEditora."';} else{false;}\" class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></a> 
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