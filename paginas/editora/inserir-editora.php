<?php 
    $nomeEditora = $_POST["nomeEditora"]; 
    $emailEditora = $_POST["emailEditora"]; 
    $telefoneEditora = $_POST["telefoneEditora"]; 
    $siteEditora =  $_POST["siteEditora"]; 
    $sql = "INSERT INTO tbeditora(
    nomeEditora, 
    emailEditora,
    telefoneEditora, 
    siteEditora)
    VALUES(
        '{$nomeEditora}', 
        '{$emailEditora}',  
        '{$telefoneEditora}',  
        '{$siteEditora}' 
    )
    ";
    $rs = $conexao -> query($sql);
    
    if($rs==true){
        print "<script>alert('Cadastro com sucesso');</script>";
        print "<script>location.href='?menuop=editora';</script>";
    }
    else{
        print "<script>alert('Erro ao cadastrar o usuário.');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }
?>