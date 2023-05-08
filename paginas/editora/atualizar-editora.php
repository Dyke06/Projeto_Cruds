<header>
    <h3>Atualizar Usuário</h3>
</header>

<?php 

    $idEditora = $_POST["idEditora"];
    $nomeEditora = $_POST["nomeEditora"]; 
    $emailEditora = $_POST["emailEditora"]; 
    $telefoneEditora = $_POST["telefoneEditora"]; 
    $siteEditora =  $_POST["siteEditora"];  

    $sql = "UPDATE tbeditora SET  
    nomeEditora = '{$nomeEditora}', 
    emailEditora = '{$emailEditora}', 
    telefoneEditora = '{$telefoneEditora}',
    siteEditora = '{$siteEditora}'  
    WHERE idEditora = '{$idEditora}'
    ";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro atualizado com sucesso');</script>";
        print "<script>location.href='?menuop=editora';</script>";
    }
    else{
        print "<script>alert('Erro ao atualizar o cadastro  do usuário.');</script>";
        print "<script>location.href='?menuop=editora';</script>";
    }
?>