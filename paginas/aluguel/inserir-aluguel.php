<?php 
    $livroAluguel = $_POST["livroAluguel"]; 
    $nomeAluguel = $_POST["nomeAluguel"]; 
    $dataAluguel = $_POST["dataAluguel"]; 
    $devolucaoAluguel =  $_POST["devolucaoAluguel"]; 
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
    
    if($rs==true){
        print "<script>alert('Cadastro com sucesso');</script>";
        print "<script>location.href='?menuop=aluguel';</script>";
    }
    else{
        print "<script>alert('Erro ao cadastrar o usuário.');</script>";
        print "<script>location.href='?menuop=aluguel';</script>";
    }
?>