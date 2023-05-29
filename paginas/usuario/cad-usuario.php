<header class="mt-3">
    <h3>Cadastro de Usuário</h3>
</header>


<div>
    <!-- Formulário de cadastro com o POST -->
    <form class="needs-validation" action="?menuop=inserir-usuario" method="POST" novalidate>
        <div class="mb-3">
            <label class="form-label" for="nomeUsuario">Nome:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="nomeUsuario"  required>
                <div class="invalid-feedback">
                                INFORME SEU NOME!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label for="cidadeUsuario">Cidade:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-building"></i></span>
                <input class="form-control" type="text" name="cidadeUsuario" required>
                <div class="invalid-feedback">
                                INFORME SUA CIDADE!
                </div>
            </div>           
        </div>

        <div class="mb-3">
            <label class="form-label for="numeroUsuario">Telefone:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="phone" name="numeroUsuario" required>
                <div class="invalid-feedback">
                                INFORME SEU NÚMERO!
                </div>
            </div>  
        </div>

        <div class="mb-3">
            <label class="form-label for="endereçoUsuario">Endereço:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-broadcast"></i></span>
                <input class="form-control" type="text" name="endereçoUsuario" required>
                <div class="invalid-feedback">
                                INFORME SEU ENDEREÇO!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label for="emailUsuario">Email:</label>

            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailUsuario" required>
                <div class="invalid-feedback">
                                INFORME SEU EMAIL!
                </div>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=usuario" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js1/validar.js"></script>