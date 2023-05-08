<header>
    <h3>Atualizar Usuário</h3>
</header>

<?php 
    $idLivro = $_POST["idLivro"];
    $nomeLivro = $_POST["nomeLivro"]; 
    $autorLivro = $_POST["autorLivro"]; 
    $editoraLivro = $_POST["editoraLivro"]; 
    $dataLivro =  $_POST["dataLivro"]; 
    $estoqueLivro = $_POST["estoqueLivro"]; 

    $sql = "UPDATE tblivro SET  
    nomeLivro = '{$nomeLivro}', 
    autorLivro = '{$autorLivro}', 
    editoraLivro = '{$editoraLivro}',
    dataLivro = '{$dataLivro}', 
    estoqueLivro = '{$estoqueLivro}' 
    WHERE idLivro = '{$idLivro}'
    ";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro atualizado com sucesso');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }
    else{
        print "<script>alert('Erro ao atualizar o cadastro  do usuário.');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }
?>