<header>
    <h3>Cadastro de Contato</h3>
</header>


<div>
    <form action="?menuop=inserir-usuario" method="POST">
        <div>
            <label for="nomeUsuario">Nome:</label>
            <input type="text" name="nomeUsuario">
        </div>

        <div>
            <label for="cidadeUsuario">Cidade:</label>
            <input type="text" name="cidadeUsuario">
        </div>

        <div>
            <label for="numeroUsuario">Telefone:</label>
            <input type="number" name="numeroUsuario">
        </div>

        <div>
            <label for="endereçoUsuario">Endereço:</label>
            <input type="text" name="endereçoUsuario">
        </div>

        <div>
            <label for="emailUsuario">Email:</label>
            <input type="email" name="emailUsuario">
        </div>

        <div>
            <input type="submit" value = "Adicionar" name="btnAdicionar">
        </div>

    </form>
</div>