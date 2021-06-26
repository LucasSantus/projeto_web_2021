<?php
$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql, PDO::FETCH_ASSOC);
?>

<h2>Listagem de Usuários</h2>

<div>
    <a class="btn-table btn-cadastro" href="?pg=usuario/cadastrar_usuario">CADASTRAR</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>USUÁRIO</th>
        <th>SENHA</th>
        <th>DATA DE CRIAÇÃO</th>
        <th>DATA DE ALTERAÇÃO</th>
        <th></th>
        <th></th>
    </tr>

    <?php
        while($linha = $result->fetch()){
    ?>
        <tr>
            <?php 
                foreach($linha as $chave => $valor){
            ?>
                <td><?= $valor ?></td>
                
            <?php
                }
            ?>
            <td><a class="btn-table" href="?pg=usuario/alterar_usuario&id=<?= $linha['id'] ?>">MODIFICAR</a></td>
            <td><a class="btn-table" href="?pg=usuario/excluir_usuario&id=<?= $linha['id'] ?>">DELETAR</a></td>            
        </tr>
    <?php
        }
    ?>
</table>