<header>
    <h3>Usuario</h3>
</header>

<div>
    <a href="index.php?menuop=cad-usuario">Novo Usuario</a>

</div>
<table border="1">
    <thead>
        <tr>
            <th>ID</th> 
            <th>Nome</th> 
            <th>Cidade</th> 
            <th>Endereço</th>  
            <th>Email</th>   
        </tr>

    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM tbusuario";
            $rs = mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta" . mysqli_error($conexao));
            while($dados = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?=$dados["idUsuario"]?></td> 
            <td><?=$dados["nomeUsuario"]?></td> 
            <td><?=$dados["cidadeUsuario"]?></td> 
            <td><?=$dados["endereçoUsuario"]?></td> 
            <td><?=$dados["emailUsuario"]?></td> 
        </tr>
        <?php 
            }
        ?>

    </tbody>
</table>
