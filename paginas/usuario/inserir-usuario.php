
<?php 
    //Recupera os valores do form pelo POST
    $nomeUsuario = $_POST["nomeUsuario"]; 
    $cidadeUsuario = $_POST["cidadeUsuario"]; 
    $numeroUsuario = $_POST["numeroUsuario"]; 
    $endereçoUsuario =  $_POST["endereçoUsuario"]; 
    $emailUsuario = $_POST["emailUsuario"]; 
    //comando que insere os valores na tabela
    $sql = "INSERT INTO tbusuario(
    nomeUsuario, 
    cidadeUsuario,
    numeroUsuario, 
    endereçoUsuario, 
    emailUsuario)
    VALUES(
        '{$nomeUsuario}', 
        '{$cidadeUsuario}',  
        '{$numeroUsuario}',  
        '{$endereçoUsuario}', 
        '{$emailUsuario}'
    )
    ";
    //variavel que executa a consulta
    $rs = $conexao -> query($sql);
    
    if($rs==true){
        print "<script>alert('Cadastro com sucesso');</script>";
        print "<script>location.href='?menuop=usuario';</script>";
    }
    else{
        print "<script>alert('Erro ao cadastrar o usuário.');</script>";
        print "<script>location.href='?menuop=usuario';</script>";
    }
?>

