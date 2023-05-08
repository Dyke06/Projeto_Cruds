<?php 
    $nomeLivro = $_POST["nomeLivro"]; 
    $autorLivro = $_POST["autorLivro"]; 
    $editoraLivro = $_POST["editoraLivro"]; 
    $dataLivro =  $_POST["dataLivro"]; 
    $estoqueLivro = $_POST["estoqueLivro"]; 
    $sql = "INSERT INTO tblivro(
    nomeLivro, 
    autorLivro,
    editoraLivro, 
    dataLivro, 
    estoqueLivro)
    VALUES(
        '{$nomeLivro}', 
        '{$autorLivro}',  
        '{$editoraLivro}',  
        '{$dataLivro}', 
        '{$estoqueLivro}'
    )
    ";
    $rs = $conexao -> query($sql);
    
    if($rs==true){
        print "<script>alert('Cadastro com sucesso');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }
    else{
        print "<script>alert('Erro ao cadastrar o usuário.');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }
?>