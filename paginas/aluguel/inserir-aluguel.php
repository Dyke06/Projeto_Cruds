<?php 
    $livroAluguel = $_POST["livroAluguel"]; 
    $nomeAluguel = $_POST["nomeAluguel"]; 
    $dataAluguel = $_POST["dataAluguel"]; 
    $devolucaoAluguel =  $_POST["devolucaoAluguel"]; 
    $statusAluguel = "Não devolvido";

    $sql = "SELECT * FROM tblivro";
    $rs = $conexao -> query($sql);
        while($row = $rs -> fetch_object()){
            if($livroAluguel == $row -> nomeLivro and $row->estoqueLivro > 0){
                $sql = "INSERT INTO tbaluguel(
                    livroAluguel, 
                    nomeAluguel,
                    dataAluguel,  
                    devolucaoAluguel,
                    statusAluguel)
                    VALUES(
                        '{$livroAluguel}', 
                        '{$nomeAluguel}',  
                        '{$dataAluguel}',   
                        '{$devolucaoAluguel}', 
                        '{$statusAluguel}' 
                    )
                    ";

                    $rs = $conexao -> query($sql);
                    //atualizar os valore de estoque na tabela livro
                    $update = "UPDATE tblivro SET estoqueLivro = estoqueLivro - 1 WHERE nomeLivro = '{$livroAluguel}'";
                    $rs2 = $conexao -> query($update);
          
                    print "<script>alert('Livro alugado com sucesso');</script>";
                    print "<script>location.href='?menuop=aluguel';</script>";
                               
        }
    }
    print "<script>alert('Livro esgotado.');</script>";
    print "<script>location.href='?menuop=aluguel';</script>";
    
?>