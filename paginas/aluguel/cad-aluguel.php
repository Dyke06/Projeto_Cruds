<header class="mt-3">
    <h3>Cadastro de Aluguel</h3>
</header>


<div>
    <form action="?menuop=inserir-aluguel" method="POST">
        <div class="mb-3">
            <label class="form-label" for="livroAluguel">Livro:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <select class="form-control" name="livroAluguel">
                    <option selected></option>
                    <?php 
                        $sql = "SELECT nomeLivro FROM tblivro where idLivro >= 1";
                        $rs = $conexao -> query($sql); 
                        while($row = $rs -> fetch_assoc()){
                            echo "<option>".$row['nomeLivro']."</option>";
                        }
                    ?>
                </select>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeAluguel">Nome:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <select class="form-control" name="nomeAluguel">
                    <option selected></option>
                    <?php 
                        $sql = "SELECT nomeUsuario FROM tbusuario where idUsuario >= 1";
                        $rs = $conexao -> query($sql); 
                        while($row = $rs -> fetch_assoc()){
                            echo "<option>".$row['nomeUsuario']."</option>";
                        }
                    ?>
                </select>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataAluguel">Data do aluguel:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataAluguel" required>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="devolucaoAluguel">Devolução:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-check-fill"></i></span>
                <input class="form-control" type="date" name="devolucaoAluguel" required>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=aluguel" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>