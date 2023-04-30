<header>
    <h3>Inserir Usuário</h3>
</header>

<?php 
    $nomeUsuario = $_POST["nomeUsuario"]; 
    $cidadeUsuario = $_POST["cidadeUsuario"]; 
    $endereçoUsuario =  $_POST["endereçoUsuario"]; 
    $emailUsuario = $_POST["emailUsuario"]; 
    $sql = "INSERT INTO tbusuario(
    nomeUsuario, 
    cidadeUsuario, 
    endereçoUsuario, 
    emailUsuario)
    VALUES(
        '{$nomeUsuario}', 
        '{$cidadeUsuario}', 
        '{$endereçoUsuario}', 
        '{$emailUsuario}'
    )
    ";
    mysqli_query($conexao, $sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));

    echo "O registro foi inserido com sucesso!";
?>