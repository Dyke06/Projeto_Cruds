<!DOCTYPE html>
<html lang="en">
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
    <title>Usuario</title>
</head>
<body>
    
<header>
    <div class="alinhar">
        <div class="titu">
            <h3><i class="bi bi-person-circle"></i> Usuario</h3>
        </div>   

        <div class="link">
            <a href="index.php?menuop=cad-usuario" class="botao">Novo Usuario +</a>
        </div>
    </div>    
    <div class="pesquisa"> 
            <form action="index.php?menuop=usuario" method="POST">
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Pesquisa" name="txt_pesquisa" id="">
                    <button class="btn btn-success btn-sm" type="submit" value="pesquisar" id=""><i class="bi bi-send-fill"></i> Pesquisar</button>
                </div>   
            </form> 
        </div>
</header>
<div class="table-responsive">
        <?php 
            //recebe a valor da pesquisa
            $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
            //comando sql que lista tida a tabela
            $sql = "SELECT * FROM tbusuario where idUsuario = '{$txt_pesquisa}' or nomeUsuario LIKE '%{$txt_pesquisa}%' or cidadeUsuario LIKE '%{$txt_pesquisa}%' or numeroUsuario LIKE '%{$txt_pesquisa}%' or endereçoUsuario LIKE '%{$txt_pesquisa}%' or emailUsuario LIKE '%{$txt_pesquisa}%'";
            //variavel que executa a consulta
            $rs = $conexao -> query($sql);
            //condição que analisa as linhas da tabela
            $qtd = $rs ->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-dark'>";
                    print "<th>#</th>";
                    print "<th>Nome</th>";
                    print "<th>Cidade</th>"; 
                    print "<th>Telefone</th>"; 
                    print "<th>Endereço</th>";
                    print "<th>Email</th>";
                    print "<th>Ações</th>";
                    print "</tr>";
                //listar as linhas 
                while($row = $rs ->fetch_object()){
                    print "<tr>";
                    print "<td>".$row -> idUsuario."</td>";
                    print "<td>" .$row -> nomeUsuario."</td>";
                    print "<td>" .$row -> cidadeUsuario."</td>"; 
                    print "<td>" .$row -> numeroUsuario."</td>"; 
                    print "<td>" .$row -> endereçoUsuario."</td>";
                    print "<td>" .$row -> emailUsuario."</td>"; 
                    print "<td>
                            <a onclick=\"location.href='?menuop=editar-usuario&idUsuario=".$row-> idUsuario."';\" class='btn btn-primary btn-sm'> <i class='bi bi-pencil-fill'></i>
                            </a> 
                            <a onclick=\"if(confirm('Tem certeza de que deseja excluir esse registro?')){location.href='?menuop=excluir-usuario&idUsuario=".$row -> idUsuario."';} else{false;}\" class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></a> 
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
    
