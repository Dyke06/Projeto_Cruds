<header>
    <h3>Usuario</h3>
</header>

<div>
    <a href="index.php?menuop=cad-usuario">Novo Usuario</a>
</div>

        <?php 
            $sql = "SELECT * FROM tbusuario";
            $rs = $conexao -> query($sql);
            $qtd = $rs ->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-dark'>";
                    print "<th>#</th>";
                    print "<th>Nome</th>";
                    print "<th>Cidade</th>";
                    print "<th>Endereço</th>";
                    print "<th>Email</th>";
                    print "<th>Ações</th>";
                    print "</tr>";
                
                while($row = $rs ->fetch_object()){
                    print "<tr>";
                    print "<td>".$row -> idUsuario."</td>";
                    print "<td>" .$row -> nomeUsuario."</td>";
                    print "<td>" .$row -> cidadeUsuario."</td>";
                    print "<td>" .$row -> endereçoUsuario."</td>";
                    print "<td>" .$row -> emailUsuario."</td>"; 
                    print "<td>
                            <button onclick=\"location.href='?menuop=editar-usuario&idUsuario=".$row-> idUsuario."';\" class='btn btn-success'> Editar </button> 
                            <button onclick=\"location.href='?menuop=excluir-usuario&idUsuario=".$row -> idUsuario."';\" class='btn btn-danger'>Excluir</button> 
                    </td>"; 
                    print "</tr>";
                }
                print "</table>";
              }else{
                print "<p>Não encontrou resultado.</p>";
            }
        ?>
        

    
