<?php
$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql, PDO::FETCH_ASSOC);
?>

<h3>Listagem de Usuários</h3>

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
    <div>
        <ul>
            <a href="?pg=usuario/cadastrar_usuario"><li>CADASTRAR</li></a>
        </ul>
    </div>
</table>