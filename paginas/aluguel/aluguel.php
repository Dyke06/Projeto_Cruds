<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/usuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .pesquisa {
            position: relative;
            top: 10px;
            left: -5px;
        }

        .form {
            border-radius: 5px;
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
            <h3><i class="bi bi-bookmark-fill"></i></i> Aluguel</h3>
        </div>

        <div class="link">
            <a href="index.php?menuop=cad-aluguel" class="botao">Novo Aluguel +</a>
        </div>
    </div>
    <div class="pesquisa">
        <form action="index.php?menuop=aluguel" method="POST">
            <div class="input-group mb-3">
                <input class="form-control" type="text" placeholder="Pesquisa" name="txt_pesquisa" id="">
                <button class="btn btn-success btn-sm" type="submit" value="pesquisar" id=""><i class="bi bi-send-fill"></i> Pesquisar </button>
            </div>

        </form>
    </div>
</header>

<div class="table-responsive">
    <?php 
    $txt_pesquisa = (isset($_POST["txt_pesquisa"])) ? $_POST["txt_pesquisa"] : "";

    $sql = "SELECT * FROM tbaluguel WHERE idAluguel = '{$txt_pesquisa}' OR nomeAluguel LIKE '%{$txt_pesquisa}%' OR livroAluguel LIKE '%{$txt_pesquisa}%' or dataAluguel LIKE '%{$txt_pesquisa}%' or devolucaoAluguel LIKE '%{$txt_pesquisa}%'";
    $rs = $conexao->query($sql);
    $qtd = $rs->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr class='table-dark'>";
        echo "<th>#</th>";
        echo "<th>Livro</th>";
        echo "<th>Usuario</th>";
        echo "<th>Data do aluguel</th>";
        echo "<th>Previsão de devolução</th>";
        echo "<th>Status da devolução</th>";
        echo "<th>Ações</th>";
        echo "</tr>";

        while ($row = $rs->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->idAluguel . "</td>";
            echo "<td>" . $row->livroAluguel . "</td>";
            echo "<td>" . $row->nomeAluguel . "</td>";
            echo "<td>" . $row->dataAluguel . "</td>";
            echo "<td>" . $row->devolucaoAluguel . "</td>";
            if ($row->statusAluguel == "Não devolvido") {
                echo "<td>" . $row->statusAluguel . "</td>";
                echo "<td>
                            <a onclick=\"if(confirm('Tem certeza de que deseja devolver esse livro?')){location.href='?menuop=devolver-aluguel&idAluguel=" . $row->idAluguel . "';} else{false;}\" class='btn btn-warning btn-sm'><i class='bi bi-journal-bookmark'></i></a> 
                        </td>";
            } else {
                echo "<td>" . $row->statusAluguel . " - " . date("Y-m-d") . "</td>";
                echo "<td>
                            <a onclick=\"if(confirm('Tem certeza de que deseja excluir esse registro?')){location.href='?menuop=excluir-aluguel&idAluguel=" . $row->idAluguel . "';} else{false;}\" class='btn btn-danger btn-sm'><i class='bi bi-trash-fill'></i></a> 
                    </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Não encontrou resultado.</p>";
    }
    ?> 
</div>

</body>
</html>