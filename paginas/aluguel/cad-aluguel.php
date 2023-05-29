<header class="mt-3">
    <h3>Cadastro de Aluguel</h3>
</header>


<div>
    <form class="needs-validation" action="?menuop=inserir-aluguel" method="POST" novalidate>
        <div class="mb-3">
            <label class="form-label" for="livroAluguel">Livro:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <select class="form-control" name="livroAluguel" required>
                    <option selected></option>
                    <?php 
                        $sql = "SELECT nomeLivro FROM tblivro where idLivro >= 1";
                        $rs = $conexao -> query($sql); 
                        while($row = $rs -> fetch_assoc()){
                            echo "<option>".$row['nomeLivro']."</option>";
                        }
                    ?>
                </select>
                <div class="invalid-feedback">
                                INFORME O LIVRO!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeAluguel">Nome:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <select class="form-control" name="nomeAluguel" required>
                    <option selected></option>
                    <?php 
                        $sql = "SELECT nomeUsuario FROM tbusuario where idUsuario >= 1";
                        $rs = $conexao -> query($sql); 
                        while($row = $rs -> fetch_assoc()){
                            echo "<option>".$row['nomeUsuario']."</option>";
                        }
                    ?>
                    
                </select>
                <div class="invalid-feedback">
                                INFORME O USUÁRIO!
                </div>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataAluguel">Data do aluguel:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataAluguel" required>
                <div class="invalid-feedback">
                                INFORME A DATA DO ALUGUEL!
                </div>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="devolucaoAluguel">Devolução:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-check-fill"></i></span>
                <input class="form-control" type="date" name="devolucaoAluguel" required>
                <div class="invalid-feedback">
                                INFORME A DATA DE DEVOLUÇÃO!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=aluguel" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js1/validar.js"></script>