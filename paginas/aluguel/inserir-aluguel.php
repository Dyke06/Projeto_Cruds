<?php 
    $livroAluguel = $_POST["livroAluguel"]; 
    $nomeAluguel = $_POST["nomeAluguel"]; 
    $dataAluguel = $_POST["dataAluguel"]; 
    $devolucaoAluguel =  $_POST["devolucaoAluguel"]; 

    $sql = "SELECT * FROM tblivro";
    $rs = $conexao -> query($sql);
    
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
                     
                    print "<script>alert('Cadastro com sucesso');</script>";
                    print "<script>location.href='?menuop=aluguel';</script>";
                                        
        }
    }
    print "<script>alert('Livro não encontrado.');</script>";
    print "<script>location.href='?menuop=aluguel';</script>";
    
?>