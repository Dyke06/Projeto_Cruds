<header class="mt-3">
    <h3>Cadastro de Editoras</h3>
</header>


<div>
    <form class="needs-validation"action="?menuop=inserir-editora" method="POST" novalidate>
        <div class="mb-3">
            <label class="form-label" for="nomeEditora">Editora:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="nomeEditora" required>
                <div class="invalid-feedback">
                            INFORME A EDITORA!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailEditora">Email:</label>

            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailEditora" required>
                <div class="invalid-feedback">
                                INFORME O EMAIL!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="telefoneEditora">Telefone:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="number" name="telefoneEditora" required>
                <div class="invalid-feedback">
                            INFORME SEU NÚMERO!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="siteEditora">Site:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-broadcast-pin"></i></span>
                <input class="form-control" type="text" name="siteEditora" required>
                <div class="invalid-feedback">
                                INFORME O SITE!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary"  type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=editora" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js1/validar.js"></script>