<div id="div-form">
    
    <h2>Cadastrar Usuário</h2>

    <form method="POST" action="?pg=usuario/processar_usuario">
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Insira o Nome..." required/>
        </div>
        <div>
            <label>Usuário</label>
            <input type="text" name="usuario" placeholder="Insira o Usuário..." required/>
        </div>
        <div>
            <label>Senha</label>
            <input type="senha" name="senha" placeholder="Insira a Senha..." required/>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
    
<div>