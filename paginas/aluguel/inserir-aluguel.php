<?php 
    $livroAluguel = $_POST["livroAluguel"]; 
    $nomeAluguel = $_POST["nomeAluguel"]; 
    $dataAluguel = $_POST["dataAluguel"]; 
    $devolucaoAluguel =  $_POST["devolucaoAluguel"]; 

    $sql = "SELECT * FROM tblivro";
    $rs = $conexao -> query($sql);
        //Repetição para compara dois campos
        while($row = $rs -> fetch_object()){
            if($livroAluguel == $row -> nomeLivro){
                $sql = "INSERT INTO tbaluguel(
                    livroAluguel, 
                    nomeAluguel,
                    dataAluguel,  
                    devolucaoAluguel)
                    VALUES(
                        '{$livroAluguel}', 
                        '{$nomeAluguel}',  
                        '{$dataAluguel}',   
                        '{$devolucaoAluguel}'
                    )
                    ";

                    $rs = $conexao -> query($sql);
                    //atualizar os valore de estoque na tabela livro
                    $update = "UPDATE tblivro SET estoqueLivro = estoqueLivro - 1 WHERE nomeLivro = '{$livroAluguel}'";
                    $rs2 = $conexao -> query($update);
          
                    print "<script>alert('Cadastro com sucesso');</script>";
                    print "<script>location.href='?menuop=aluguel';</script>";
                               
        }
    }
    print "<script>alert('Livro ou usuário não encontrado.');</script>";
    print "<script>location.href='?menuop=aluguel';</script>";
    
?>