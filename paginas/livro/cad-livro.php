<header class="mt-3">
    <h3>Cadastro de Livros</h3>
</header>


<div>
    <form class="needs-validation" action="?menuop=inserir-livro" method="POST" novalidate>
        <div class="mb-3">
            <label class="form-label" for="nomeLivro">Livro:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="nomeLivro" required>
                <div class="invalid-feedback">
                        INFORME O NOME DO LIVRO!
            </div>
            </div>  
        </div>

        <div class="mb-3">
            <label class="form-label" for="autorLivro">Autor:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="autorLivro" required>
                <div class="invalid-feedback">
                            INFORME O AUTOR DO LIVRO!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="editoraLivro">Editora:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-collection-play-fill"></i></span>
                <select class="form-control" name="editoraLivro" required>
                    <option selected></option>
                    <?php 
                        $sql = "SELECT nomeEditora FROM tbeditora where idEditora >= 1";
                        $rs = $conexao -> query($sql); 
                        while($row = $rs -> fetch_assoc()){
                            echo "<option>".$row['nomeEditora']."</option>";
                        }
                    ?>
                </select>
                <div class="invalid-feedback">
                            INFORME A EDITORA!
                </div>
                
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataLivro">Data de lançamento:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataLivro" required>
                <div class="invalid-feedback">
                                INFORME A DATA!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="estoqueLivro">Estoque:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-0-square"></i></span>
                <input class="form-control" type="number" name="estoqueLivro" required>
                <div class="invalid-feedback">
                                INFORME O ESTOQUE!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary"type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=livro" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js1/validar.js"></script>